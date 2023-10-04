<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:35
 */

namespace app\components;
use yii\base\Widget;
use app\models\Breed;
use Yii;
use app\models\Category;

class MenuHeaderWidget extends Widget{

    public $tpl;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;

    public function init(){
        parent::init();
        if( $this->tpl === null ){
            $this->tpl = 'menu_header';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        // get cache

        if($this->tpl == 'menu_header.php'){
            $menu = Yii::$app->cache->get('menu_header');
            if($menu) return $menu;
        }

        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        // set cache
        if($this->tpl == 'menu_header.php'){
            Yii::$app->cache->set('menu_hader', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    }

    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            }
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    ////меню состоит из трех файлов: 1 (menu_header_start) - начало (открывающиеся теги)
    /// 2(menu_header) - середина (сами категории)
    /// // 3 (menu_header_end) - конец (закрывающиеся теги)
    /// Если контроллер главная страница - тогда подргружать шаблон components/views/header, иначе common_header
    protected function getMenuHtml($tree, $tab = ''){
        $str = '';

        $str = $this->render('menu_header_start');

//        if (Yii::$app->controller->id == 'main'){ //если главная страница сайта, тот для шаблона меню подгрузить common_header_menu
//            $str = $this->render('menu_header_start');
//        }
//        else {
//            $str = $this->render('common_menu_header_start');
//        }
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category, $tab);
        }
        $str .= $this->render('menu_header_end');
//        if (Yii::$app->controller->id == 'main') {
//            $str .= $this->render('menu_header_end');
//        }
//        else {
//            $str .= $this->render('common_menu_header_end');
//        }
        return $str;
    }

    protected function catToTemplate($category, $tab){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }

} 