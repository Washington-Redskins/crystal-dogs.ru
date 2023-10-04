<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<div class="header__area">
    <?= \app\components\MenuHeaderWidget::widget(['tpl' => 'menu_header'])?>
</div>


<h2 class="dog-view-h2">Купить щенка <?= $dog->breed['singular_name']?> в Гусь-Хрустальном </h2>

<div class="dog-view">

    <div class="left-sidebar sidebar-dog-view">
        <span class="breed-left-sidebar">Породы</span>
        <ul class="catalog category-breed">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
        </ul>

    </div>


    <div class="single-dog content-dog-view">
        <div class="doginfo text-center">

                        <?= Html::img($mainImg->getUrl('268x249'), ['alt' => $dog->name, 'class' => 'img-fluid'])?>

        </div>

        <div class="dog-information"><!--/dog-information-->

            <?php if(!$dog->status): ?>
                <?= Html::img("@web/images/home/not-actual.png", ['alt' => 'Не актуально', 'class' => 'soldarrival'])?>
            <?php endif?>
            <h2><?= $dog->name?></h2>


            <p><b>В продаже - </b>

                <?php
                echo $dog['sold'] ? 'Нет' : 'Да';
                ?>

            </p>

            <!--                <p><b>Цена - </b>-->
            <!--                    --><?//= $dog?><!-- руб.-->
            <!--                </p>-->

            <p><b>Порода - </b> <a href="<?= \yii\helpers\Url::to(['breed/view', 'alias' => $dog->breed['alias']]) ?>"><?= $dog->breed['name']?></a></p>

            <?= $dog->content?>
        </div><!--/dog-information-->

            <div id="similar-item" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <section class="tape">
                    <div class="owl-carousel owl-theme auto-scrolling">

                    <?php $count = count($gallery); $i = 1; foreach($gallery as $img): ?>

                            <div class="item">
                                    <a data-fancybox="gallery" href="<?=$img->getUrl()?>" data-caption="<?= $dog['name'] ?>">
                                <?= Html::img($img->getUrl('84x85'), ['alt' => ''])?>
                                </a>
                            </div>

                    <?php if ($i  == $count) { break; }?>
                    <?php $i++ ?>

                    <?php endforeach;?>
                    </div>
                </section>

            </div>
        <div class="press-for-zoom">Нажмите на эти изображения, чтобы увеличить</div>




    </div><!--/dog-details-->

</div>


