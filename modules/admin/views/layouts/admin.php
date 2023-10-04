<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;
use app\assets\ltAppAsset;

AdminAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>Админка | <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <?php
        //        $this->registerJsFile('js/html5shiv.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
        //        $this->registerJsFile('js/respond.min.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
        ?>

        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <div class="wrap">
            <?php $this->beginBody() ?>
            <header id="header" class="admin-header"><!--header-->
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div><!--/header_top-->

                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="logo pull-left">
                                    <a href="<?= \yii\helpers\Url::home()?>">На главную</a>
                                </div>

                            </div>
                            <div class="col-sm-8">
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav">
                                        <?php if(!Yii::$app->user->isGuest): ?>
                                            <li><a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> (Выход)</a></li>
                                        <?php endif;?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->

                <div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="<?=\yii\helpers\Url::to(['/admin']) ?>" class="active">На главную</a></li>
                                        <li class="dropdown"><a href="#">Породы<i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="<?=\yii\helpers\Url::to(['breed/index']) ?>">Список  пород</a></li>
                                                <li><a href="<?=\yii\helpers\Url::to(['breed/create']) ?>">Добавить породу</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Собаки<i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="<?=\yii\helpers\Url::to(['dog/index']) ?>">Список</a></li>
                                                <li><a href="<?=\yii\helpers\Url::to(['dog/create']) ?>">Добавить собаку</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
<!--                                <div class="search_box pull-right">-->
<!--                                    <form method="get" action="--><?//= \yii\helpers\Url::to(['breed/search'])?><!--">-->
<!--                                        <input type="text" placeholder="Search" name="q">-->
<!--                                    </form>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div><!--/header-bottom-->
            </header><!--/header-->

            <div class="container admin-container">
                <?php if( Yii::$app->session->hasFlash('success') ): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo Yii::$app->session->getFlash('success'); ?>
                    </div>
                <?php endif;?>
                <?= $content ?>
            </div>

            <div class="row">
                <br>
                <br>
                <br>
            </div>

            <?php $this->endBody() ?>
        </div>
    </body>
    </html>
<?php $this->endPage() ?>