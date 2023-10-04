<?php
//получает объекты из БД, помеченные как hits

namespace app\controllers;



trait THits
{
   public function getHits() {
       $hits = \app\models\Dog::find()->where(['hit' => '1'])->all();
       $this->hits = $hits;
   }
}