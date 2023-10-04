<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.05.2016
 * Time: 10:50
 */

namespace app\controllers;
use app\models\Breed;
use app\models\Dog;
use Yii;

class DogController extends AppController{

    public function actionView($alias){

//        $id = Yii::$app->request->get('id');
        $dog = Dog::find()->where(['alias' => $alias])->one();

        if(empty($dog->id))
            throw new \yii\web\HttpException(404, 'Такой собаки нет');
//        $dog = dog::find()->with('breed')->where(['id' => $id])->limit(1)->one();

        $this->setMeta('Собачки из хрустального замка | ' . $dog->name, $dog->keywords, $dog->description);

        $mainImg = $dog->getImage();
        $gallery = $dog->getImages();



        return $this->render('view', compact('dog', 'mainImg', 'gallery', 'hits'));
    }

} 