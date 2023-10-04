<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section id="advertisement">
    <div class="container">
        <img src="/images/shop/1.jpg" alt="" />
    </div>
</section>

<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <ul class="catalog category-products">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
        </ul>



        <div class="price-range"><!--price-range-->
            <h2>Price Range</h2>
            <div class="well">
                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                <b>$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div><!--/price-range-->

        <div class="shipping text-center"><!--shipping-->
            <img src="/images/home/shipping.jpg" alt="" />
        </div><!--/shipping-->

    </div>
</div>

<div class="col-sm-9 padding-right">
<div class="features_items"><!--features_items-->
<h2 class="title text-center"><?= $category->name?></h2>
    <?php if(!empty($products)): ?>
        <?php $i = 0; foreach($products as $product): ?>
        <?php $mainImg = $product->getImage();?>
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <?= Html::img($mainImg->getUrl('268x249'), ['alt' => $product->name])?>
                <h2>$<?= $product->price?></h2>
                <p><a href="<?= \yii\helpers\Url::to(['dog/view', 'id' => $product->id]) ?>"><?= $product->name?></a></p>
                <a href="#" data-id="<?= $product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            <?php if($product->sold): ?>
                <?= Html::img("@web/images/home/sold.png", ['alt' => 'Продано', 'class' => 'sold'])?>
            <?php endif?>
            <?php if(!$product->status): ?>
                <?= Html::img("@web/images/home/not-actual.png", ['alt' => 'Не актуально', 'class' => 'sold'])?>
            <?php endif?>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>
            <?php $i++?>
            <?php if($i % 3 == 0): ?>
                <div class="clearfix"></div>
            <?php endif;?>
            <?php endforeach;?>
        <div class="clearfix"></div>
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
        <?php else :?>
        <h2>Скоро здесь что-нибудь появится...А пока ничего нет...</h2>
    <?php endif;?>
<!--<ul class="pagination">
    <li class="active"><a href="">1</a></li>
    <li><a href="">2</a></li>
    <li><a href="">3</a></li>
    <li><a href="">&raquo;</a></li>
</ul>-->
</div><!--features_items-->
</div>
</div>
</div>
</section>