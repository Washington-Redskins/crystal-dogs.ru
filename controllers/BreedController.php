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

class BreedController extends AppController{
use THits;  //включен метод getHits(), для получения объектов с атрибутов hit

    public function actionIndex(){

       // $query = Dog::find()->where(['status' => '1']);
//        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
//        $allDogs = $query->offset($pages->offset)->limit($pages->limit)->all();
        $allDogs = Dog::find()->where(['status' => '1'])->all();
        if (Yii::$app->request->isAjax) {

        }

        $this->getHits();       //хитовые объекты. вызывается из трейта THits.записывает в свойство hits.
        $hits = $this->hits;

        $this->setMeta('Собачки из Хрустального замка');
        return $this->render('index', compact('allDogs', 'pages', 'hits'));
    }

    public function actionView($alias){

//        $id = Yii::$app->request->get('id');
        $category = Breed::find()->where(['alias' => $alias])->one();
//        debug($category);
//        exit;
        if(empty($category->id))
            throw new \yii\web\HttpException(404, 'Такой породы нет');


        $query = Dog::find()->where(['breed_id' => $category->id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $allDogs = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Собачки из Хрустального замка | ' . $category->name, $category->keywords, $category->description);

        $this->getHits();       //хитовые объекты. вызывается из трейта THits.записывает в свойство hits.
        $hits = $this->hits;

        return $this->render('view', compact('allDogs', 'pages', 'category', 'hits'));
    }

    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Собачки из Хрустального замка| Поиск: ' . $q);
        if(!$q)
            return $this->render('search');
        $query = Dog::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $dogsFromBreed = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('dogsFromBreed', 'pages', 'q'));
    }

} 