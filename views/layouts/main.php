<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\AppAssetForMainPage;
use app\assets\ltAppAsset;

//если главная страницы - подключить индивидуальный для главной страницы assets
if(Yii::$app->controller->id == 'main') {
    AppAssetForMainPage::register($this);
}
//иначе дефолтный (общий) для всех
else {
    AppAsset::register($this);
}
AppAsset::register($this);

ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="74f08caafcd38b1a" />
<meta name="google-site-verification" content="_apS_QERAX0rKztTECQh5-GJJF03CGwc6evD2qcRRn4" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?php
//        $this->registerJsFile('js/html5shiv.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
//        $this->registerJsFile('js/respond.min.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
    ?>


</head><!--/head-->

<body>
<?php $this->beginBody() ?>

<div class="container">
    <header class="main__page__header">

        <div class="main__page__header__wrap">
            <?= \app\components\MenuHeaderWidget::widget(['tpl' => 'menu_header'])?>
        </div>
    </header>

        <?= $content ?>


    <footer class="footer">
        <ul class="menu footer__menu">
            <li class="menu__element">
                crystal-dogs.ru <br>
                Собачки из хрустального замка <br>
                +7-915-764-96-16
            </li>
        </ul>
    </footer>
</div> <!-- /container -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
