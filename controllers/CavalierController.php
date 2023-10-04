<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;
use app\models\Breed;
use app\models\Dog;
use Yii;
use yii\data\Pagination;

class CavalierController extends AppController{
    use THits;  //включен метод getHits(), для получения объектов с атрибутов hit

    public function actionIndex(){
        $this->getHits();       //хитовые объекты. вызывается из трейта THits.записывает в свойство hits.
        $hits = $this->hits;

        $this->setMeta('Собачки из хрустального замка | Вязка');
        return $this->render('index', compact('hits'));
    }
} 