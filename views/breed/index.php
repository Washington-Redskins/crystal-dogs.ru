<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>



    <section class="breed_category_content">
                    <div class="left-sidebar">
                        <span class="breed-left-sidebar">Породы</span>
                        <ul class="catalog category-breed">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                        </ul>

<!--                        <div class="breed__left__sidebar__img">-->

<!--                        </div>-->
                    </div>

                    <?php if( !empty($allDogs) ): ?>
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center"></h2>

                            <?php \yii\widgets\Pjax::begin();   //ajax секция?>
                            <div class="breed__category__dogs__wrap">
                            <section class="breed__banner">
                                <div class="breed__banner__item">
                                    <h1>Щенки шпица, чихуахуа, той терьера, пекинеса йоркширского терьера</h1>
                                    <span>Возможна доставка в регионы</span>
                                    <p>Текущий статус продажи этих милых собачек-компаньонов можно увидеть в описании</p>
                                </div>
                                <div class="breed__banner__item">
                                    <h1>Щенки по разумной цене</h1>
                                    <span>Мы стараемся формировать приемлемую для России ценовую политику.</span>
                                    <p>Убедитесь сами: познакомьтесь с фотографиями щенков на сайте, узнайте цену и выберите полюбившегося лохматого друга</p>
                                </div>

                            </section>


                                <section class="tape">
                                    <div class="owl-carousel owl-theme breed-scroll">


                                    <?php foreach($allDogs as $allDog): ?>
                                    <?php $mainImg = $allDog->getImage();?>
                                        <div class="item">
                                    <div class="breed__dog__wrapper">
                                        <div class="single-breed">
                                            <div class="doginfo text-center">
                                                <a href="<?= \yii\helpers\Url::to(['dog/view', 'alias' => $allDog->alias]) ?>"><?= Html::img($mainImg->getUrl('268x249'), ['alt' => $allDog->name])?></a>


<!--                                                <span class="price">--><?//= $allDog-?><!-- руб. </span>-->
                                                <p class="breed__dog__link">
                                                    <a href="<?= \yii\helpers\Url::to(['dog/view', 'alias' => $allDog->alias]) ?>"><?= $allDog->name?></a>
                                                </p>
                                                <a class="breed__dog__wrapper__button__link" href="<?= \yii\helpers\Url::to("/dog/view?alias=$allDog->alias")?>"><button class="breed__dog__wrapper__button">Подробнее</button>
                                                </a>
                                            </div>

                                            <?php if(!$allDog->status): ?>
                                                <?= Html::img("@web/images/home/not-actual.png", ['alt' => 'Не актуально', 'class' => 'sold'])?>
                                            <?php endif?>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">

                                            </ul>
                                        </div>
                                        <?php
                                        if($allDog['sold']):
                                            ?>
Нет в продаже
                                        <?php else : ?>
                                            <div class="actual">В продаже</div>
                                        <?php endif?>
                                    </div>
                                    </div>
                                     <?php endforeach;?>

                                    </section>
                                </div> <!-- breed_category_dogs -->
                        </div>
<div class="pagination__container">

</div>
                            <?php  \yii\widgets\Pjax::end();    //ajax секция?>

                        </div><!--features_items-->


                    <?php endif; ?>
    </section>
