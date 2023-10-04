<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:28
 */

namespace app\models;
use yii\db\ActiveRecord;


class Breed extends ActiveRecord{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName(){
        return 'breed';
    }

    public function getDog(){
        return $this->hasMany(Dog::className(), ['breed_id' => 'id']);
    }

} 