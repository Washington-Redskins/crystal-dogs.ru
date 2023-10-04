<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<?php
//echo $this->render('@app/components/views/common_header_menu');

?>
<div class="header__area">
    <?= \app\components\MenuHeaderWidget::widget(['tpl' => 'menu_header'])?>
</div>

<section class="photos">
    <h3 class="about__header"><span class="photos__header__top">фотографии</span><span class="photos__header__bottom">питомцев</span></h3>
    <ul class="photos__list">
        <li class="photos__element photos__element--three">

            <p class="photos__text">
                <a href="<?= \yii\helpers\Url::to('/breed')?>">
                    <button class="services__button">Перейти в раздел Щенки</button>
                </a>
            </p>
        </li>
        <li class="photos__element photos__element--six">

            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g2.jpg" data-caption=""></a>
                    <p class="photos__name">Щенки той-терьера</p>

                    <!--                    <p class="photos__description">Той-терьер —  наиболее удачная порода для густонаселенных городов. Эта собака не страдает от ограниченного пространства, неприхотлива в уходе.  При этом активности и игривости у этой породы хоть отбавляй.</p>-->
                    <div class="photos__btns">

                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                            <svg>
                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>
                </figure>
            </div>
        </li>
        <li class="photos__element photos__element--three">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g3.jpg" data-caption="">                            </a>
                    <p class="photos__name">Щенки шпица</p>
                    <!--                    <p class="photos__description">Graphic Designer, Photoshop</p>-->
                    <div class="photos__btns">
                        <!--                        <button aria-label="Увеличить фото" class="photos__zoom">-->
                        <!--                            <svg>-->
                        <!--                                <use xlink:href="images/home/symbol/sprite.svg#search"></use>-->
                        <!--                            </svg>-->
                        <!--                        </button>-->
                        <a aria-label="Посмотреть другие фото" class="photos__link" href="/breed">
                            <svg>
                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>
                </figure>
            </div>
        </li>
        <li class="photos__element photos__element--three">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g4.jpg" data-caption=""></a>
                    <p class="photos__name">Щенки йоркширского терьера</p>
                    <!--                    <p class="photos__description">Graphic Designer, Photoshop</p>-->
                    <div class="photos__btns">
                        <!--                        <button aria-label="Увеличить фото" class="photos__zoom">-->
                        <!--                            <svg>-->
                        <!--                                <use xlink:href="images/home/symbol/sprite.svg#search"></use>-->
                        <!--                            </svg>-->
                        <!--                        </button>-->
                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                            <svg>
                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>
                </figure>
            </div>
        </li>
        <li class="photos__element photos__element--five">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g5.jpg" data-caption=""></a>
                    <p class="photos__name">Щенки шпица</p>
                    <!--                    <p class="photos__description">Graphic Designer, Photoshop</p>-->
                    <div class="photos__btns">
                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                            <svg>
                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>
                </figure>
            </div>
        </li>
        <li class="photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g6.jpg" data-caption=""></a>
                    <p class="photos__name">Щенки чихуахуа</p>
                    <!--                    <p class="photos__description">Graphic Designer, Photoshop</p>-->
                    <div class="photos__btns">
                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                            <svg>
                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                            </svg>
                        </a>
                    </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g7.jpg" data-caption=""></a>
                <p class="photos__name">Щенки йоркширского терьера</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--five">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g8.jpg" data-caption=""></a>
                <p class="photos__name">Щенки шпица</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
<!--                    <button aria-label="Увеличить фото" class="photos__zoom">-->
<!--                        <a data-fancybox="gallery" href="/images/photogallery/g8.jpg">-->
<!--                            <svg>-->
<!--                                <use xlink:href="images/home/symbol/sprite.svg#search"></use>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                    </button>-->
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--three">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g9.jpg" data-caption=""></a>
                <p class="photos__name">Щенки йоркширского терьера</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <button aria-label="Увеличить фото" class="photos__zoom">
                        <a data-fancybox="gallery" href="/images/photogallery/g9.jpg">
                            <svg>
                                <use xlink:href="images/home/symbol/sprite.svg#search"></use>
                            </svg>
                        </a>
                    </button>
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--six">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g10.jpg" data-caption=""></a>
                <p class="photos__name">Щенки шпица</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--six">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g11.jpg" data-caption=""></a>
                <p class="photos__name">Щенки чихуахуа</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--six">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g12.jpg" data-caption=""></a>
                <p class="photos__name">Щенки йоркширского терьера</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--three bg-image lazy">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g13.jpg" data-caption=""></a>
                <p class="photos__name">Щенки той-терьера</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--three">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g14.jpg" data-caption=""></a>
                <p class="photos__name">Щенки шпица</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g15.jpg" data-caption=""></a>
                <p class="photos__name">Щенки шпица</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g16.jpg" data-caption=""></a>
                <p class="photos__name">Щенки йоркширского терьера</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g17.jpg" data-caption=""></a>
                <p class="photos__name">Щенки чихуахуа</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                    <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                        <svg>
                            <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                        </svg>
                    </a>
                </div>
                </figure>
            </div>
        </li>
        <li class="bg-image lazy photos__element photos__element--six">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g18.jpg" data-caption=""></a>
                <p class="photos__name">Щенки шпица</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
<!--                    <button aria-label="Увеличить фото" class="photos__zoom">-->
<!--                        <a data-fancybox="gallery" href="/images/photogallery/g18.jpg">-->
<!--                            <svg>-->
<!--                                <use xlink:href="images/home/symbol/sprite.svg#search"></use>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                    </button>-->
                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                            <svg>
                                 <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                            </svg>
                        </a>
                </div>
                </figure>
            </div>
        </li>

        <li class="bg-image lazy photos__element photos__element--six">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g19.jpg" data-caption=""></a>
                <p class="photos__name">Щенки чихуахуа</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                                            <svg>
                                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                                            </svg>
                                        </a>
                </div>
                </figure>
            </div>
        </li>

        <li class="bg-image lazy photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g20.jpg" data-caption=""></a>
                <p class="photos__name">Щенки той-терьера</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                                            <svg>
                                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                                            </svg>
                                        </a>
                </div>
                </figure>
            </div>
        </li>

        <li class="bg-image lazy photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g21.jpg" data-caption=""></a>
                <p class="photos__name">Щенки шпица</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                                            <svg>
                                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                                            </svg>
                                        </a>
                </div>
                </figure>
            </div>
        </li>

        <li class="bg-image lazy photos__element photos__element--four">
            <div class="photos__info">
                <figure class="img-box img-box-photo">
                    <a class="gallery__link" data-fancybox="gallery" href="/images/photogallery/g22.jpg" data-caption=""></a>
                <p class="photos__name">Щенки той-терьера</p>
<!--                <p class="photos__description">Graphic Designer, Photoshop</p>-->
                <div class="photos__btns">
                                        <a aria-label="Посмотреть щенков" class="photos__link" href="/breed">
                                            <svg>
                                                <use xlink:href="images/home/symbol/sprite.svg#link"></use>
                                            </svg>
                                        </a>
                </div>
                </figure>
            </div>
        </li>
    </ul>
</section>
