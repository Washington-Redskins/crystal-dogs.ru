<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;
use app\models\Dog;
use Yii;
use yii\data\Pagination;

class MainController extends AppController{

    public function actionIndex(){



        $this->setMeta('Собачки из Хрустального замка');
        return $this->render('index');
    }


    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Собачки из Хрустального замка| Поиск: ' . $q);
        if(!$q)
            return $this->render('search');
        $query = Dog::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $dogs = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('dogs', 'pages', 'q'));
    }

} 