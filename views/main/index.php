<?php

/* @var $this yii\web\View */
use yii\helpers\Html;


?>



<section class="intro">
    <div class="intro__wrap">
        <div class="intro__content">
            <h1>Собачки из хрустального замка</h1>
        <p>
            Каждая порода уникальна <br>
            Подберите породу, которая подходит именно вам</p>
        </div>
    </div>
</section>

<section class="welcome">
    <div class="welcome__wrap">
        <div class="welcome__left">
            <div class="welcome__left__first">
                <div class="circle">
                    <div class="number__in__circle">
                       1
                    </div>
                </div>
            </div>
            <div class="welcome__left__second">
                    О нас
            </div>
        </div>

        <div class="welcome__right">
            <div class="welcome__right__title">
                Добро пожаловать!
            </div>

            <div class="welcome__right__text">
                Для многих самой заветной мечтой с детства было завести маленького щеночка. Кому-то нравятся собаки крупных пород, потому что они обладают хорошими сторожевыми качествами, их можно взять на охоту. Но многие другие не представляют себе жизни без собачек маленьких пород, таких как шпиц, чихуахуа, йоркширский терьер. У нас в  Гусь-Хрустальном вы сможете купить собаку, которая станет для вас настоящим другом, маленького верного пёсиля, которого везде  можно взять с собой.
            </div>
<!--            <div class="welcome__right__title">-->
<!--                OUR ADVANTAGES-->
<!--            </div>-->
<!--            <div class="welcome__right__text">-->
<!--               Мы стараемся формировать приемлемую для России ценовую политику. Убедитесь сами: познакомьтесь с фотографиями щенков на сайте, узнайте цену и выберите полюбившегося лохматого друга.-->
<!--            </div>-->
        </div>
    </div>
</section>

<section class="advantages">
    <div class="advantages__wrap">
        <div class="advantages__left">
            <div class="advantages__left__first">
                <div class="circle">
                    <div class="number__in__circle">
                        2
                    </div>
                </div>
            </div>
            <div class="advantages__left__second">
                Наши услуги
            </div>
        </div>
        <div class="advantages__right">
            <h2 class="advantages__title">Премущества преобретения у нас:</h2>
            <ul class="advantages__list">
                <li class="advantages__item">
                    <div class="advantages__img">
                        <svg class="advantages__svg">
                            <use xlink:href="images/home/symbol/sprite.svg#dog"></use>
                        </svg>
                    </div>
                    <div class="advantages__content">
                        <p class="advantages__subtitle">Красивые щенки</p>
                        <p class="advantages__text">У нас Вы сможете найти щенков на любой вкус и цвет</p>
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__img">
                        <svg class="advantages__svg">
                            <use xlink:href="images/home/symbol/sprite.svg#price"></use>
                        </svg>
                    </div>
                    <div class="advantages__content">
                        <p class="advantages__subtitle">Адекватные цена</p>
                        <p class="advantages__text">Мы устанавляем на наших щенков оптимальные цены, чтобы они могли порадовать большее число людей</p>
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__img">
                        <svg class="advantages__svg">
                            <use xlink:href="images/home/symbol/sprite.svg#consultation"></use>
                        </svg>
                    </div>
                    <div class="advantages__content">
                        <p class="advantages__subtitle">Консультация</p>
                        <p class="advantages__text">Мы оказываем грамотную поддержку по содержанию и уходу за щенками</p>
                    </div>
                </li>
            </ul>

            <section class="services">
                <h3><span class="services__header__top">Наши</span><span class="services__header__bottom">Услуги</span></h3>
                <ul class="services__list">
                    <li class="services__item serv__desc__first">
                        <p class="services__subtitle">Породистые щенки</p>
                        <p class="services__text">У нас вы сможете преобрести щенков пород: <b>шпиц, тойтерьер, чихуахуа, йоркширский терьер, пекинес</b>, которые смогут стать вам настоящими друзьями и компаньонами.<br>
                            Нам очень важно передать щенка в ответственные руки, которые смогут обеспечить его заботой и теплом, в дом, где его всегда будут любить.
                        </p>
                        <a href="<?= \yii\helpers\Url::to('/breed')?>"><button class="services__button">Посмотреть щенков</button></a>
                    </li>
                    <li class="services__item pic serv__img__first">
                        <?= yii\helpers\Html::img('images/home/puppies.png', ['alt' => 'щенки шпица, чихуахуа, йоркширского терьера, той терьера']) ?>
                    </li>
                    <li class="services__item serv__desc__second">
                        <p class="services__subtitle">Кобели для вязки</p>
                        <p class="services__text">У нас имеются элитнейшие кобели шпица и чихуахуа.</p>
                        <a href="<?= \yii\helpers\Url::to('/cavalier')?>"><button class="services__button">Посмотреть кобелей</button></a>
                    </li>
                    <li class="services__item pic serv__img__second">
                        <img src="images/home/cavaliers.jpg">
                    </li>

                </ul>
            </section>


        </div>
    </div>
</section>

<section class="choose__breed">
    <div class="choose__breed__wrap">
        <div class="choose__breed__left">
            <div class="choose__breed__left__first">
                <div class="circle">
                    <div class="number__in__circle">
                        3
                    </div>
                </div>
            </div>
            <div class="choose__breed__left__second">
                Породы
            </div>
        </div>
        <div>

        </div>
        <div class="choose__breed__right">
            <div class="choose__breed__right__title">
                Найдите свою породу
            </div>

            <div class="choose__breed__right__text">
                Вы, может быть, заинтересуетесь йоркширскими терьером, грациозной породой, выведенной в самой Англии, с прическами и стрижками этих элегантных собачек можно бесконечно долго экспериментировать, давая волю своей фантазии. А как бывает приятно купить своему любимцу какую-нибудь одежку, будь бантик, комбинезон или заколка.
                Так же вам может понравится шпиц, который своей пушистой густой шерстью напоминают миниатюрного медвежонка.
                А может быть, Вам могли приглянуться чихуахуа, чрезвычайно любвеобильные собачки, которые не дадут вам скучать!
            </div>
            <!--            <div class="welcome__right__title">-->
            <!--                OUR ADVANTAGES-->
            <!--            </div>-->
            <!--            <div class="welcome__right__text">-->
            <!--               Мы стараемся формировать приемлемую для России ценовую политику. Убедитесь сами: познакомьтесь с фотографиями щенков на сайте, узнайте цену и выберите полюбившегося лохматого друга.-->
            <!--            </div>-->
        </div>
    </div>
</section>

<section class="photos">
    <div class="photos__wrap">
        <div class="photos__left">
            <div class="photos__left__first">
                <div class="circle">
                    <div class="number__in__circle">
                        4
                    </div>
                </div>
            </div>
            <div class="photos__left__second">
                Фотографии
            </div>
        </div>
        <div class="photos__right">
            <ul class="photos__list">
                <li class="photos__element photos__element--three">
                    <p class="photos__title">Посмотрите галлерею наших щенков</p>
                    <p class="photos__text">
                        <a href="<?= \yii\helpers\Url::to('/photogallery')?>">
                            <button class="services__button">Все фото</button>
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
            </ul>
            <div class="photos__under__text">
                Купить щенка в Гусь-Хрустальном, и быть уверенными, что вам все подробно объяснят про нюансы той или иной породы, о том как правильно ее нужно кормить, что лучше всего подойдет именно выбранному вами питомцу, знать, что с вами всегда на связи будет опытный заводчик собак, готовый консультировать в трудных ситуациях.
            </div>
        </div>

    </div>
</section>

<section class="about">
    <div class="about__wrap">
        <div class="about__left">
            <div class="about__left__first">
                <div class="circle">
                    <div class="number__in__circle">
                        5
                    </div>
                </div>
            </div>
            <div class="about__left__second">
                Контакты
            </div>
        </div>

        <div class="about__right">

            <div class="about__right__text">

                <ul class="about__list">
                    <li class="about__header">
                        <p><span class="about__header__top">Заинтересовались?</span><span class="about__header__bottom">Свяжитесь с нами</span>
                    </li>
                    <li class="about__item description">


                        Забавные лисички и мишки, чихуахуа, тортеьеры, йоркширские терьеры  разных размеров и окрасов на ваш выбор. По всем интересующим вопросам: где можно посмотреть и приобрести этих замечательных домашних любимцев, звоните нам

                    </li>
                    <li class="about__item">
                        <span class="phone__number">+7-915-764-96-16</span>
                        <br>
                        <ul class="messenger__list">
                            <li class="messenger__item">
                                <div class="messenger__img">
                                    <svg class="messenger__svg">
                                        <use xlink:href="images/home/symbol/sprite.svg#whatsapp"></use>
                                    </svg>
                                </div>
                                <p class="messenger__subtitle">whatsapp</p>
                            </li>
                            <li class="messenger__item">
                                <div class="messenger__img">
                                    <svg class="messenger__svg">
                                        <use xlink:href="images/home/symbol/sprite.svg#icons8-viber"></use>
                                    </svg>
                                </div>
                                <p class="messenger__subtitle">viber</p>
                            </li>
                        </ul>

                    </li>
                </ul>

            </div>

        </div>
    </div>
</section>


<div class="content">
    <section class="tape">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/1.jpg', ['alt' => 'Шенок шпица']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/2.jpg', ['alt' => 'Шенок той-терьера']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/3.jpg', ['alt' => 'Шенки чихуахуа']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/4.jpg', ['alt' => 'Шенок той-терьера']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/5.jpg', ['alt' => 'Шенок шпица']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/6.jpg', ['alt' => 'Шенки йоркширского терьера']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/7.jpg', ['alt' => 'Шенок шпица']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/8.jpg', ['alt' => 'Шенок той-терьера']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/9.jpg', ['alt' => 'Шенки чихуахуа']) ?>
            </div>
            <div class="item">
                <?= yii\helpers\Html::img('images/carousel/10.jpg', ['alt' => 'Шенок шпица']) ?>
            </div>
        </div>
    </section>




</div>



