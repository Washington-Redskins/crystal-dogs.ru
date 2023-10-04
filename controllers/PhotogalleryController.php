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

class PhotogalleryController extends AppController{

    public function actionIndex(){

        $this->setMeta('Собачки из хрустального замка. Фото');
        return $this->render('index');
    }
} 