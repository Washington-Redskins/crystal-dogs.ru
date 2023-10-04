<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:28
 */

namespace app\models;
use yii\db\ActiveRecord;

//для виджета верхнего меню
class Category extends ActiveRecord{


    public static function tableName(){
        return 'category';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'name']);
    }

} 