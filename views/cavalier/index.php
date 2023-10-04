<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<div class="header__area">
    <?= \app\components\MenuHeaderWidget::widget(['tpl' => 'menu_header'])?>
</div>

    <div class="cavalier__wrap">
        <div class="cavalier_category_info">
            При вязке собак в нашем питомника мы всегда находимся на стороне владельца суки! Мы знаем, что всегда сущесвуют определенные риски и понимаем, что природа непредсказуема. Долголетный опыт разведения говорит нам: <b>отсутствие щенков = повторная вязка бесплатно</b>.
            Наш питомник силен своими кавалерами, и мы всегда держим в уме перспективы их разведения с целью сохранить то лучшее, что у нас получилось.
            На данный момент мы предоствляем услуги по вязки шпицов и чихуахуа. Ниже можно ознакомится с наши кобелями:
        </div>

            <h3><span class="cavalier__header__top">Кобели чихуахуа и шпица</span><span class="cavalier__header__bottom">в Гусь-Хрустальном</span></h3>
            <ul class="cavalier__list">
                <li class="cavalier__item pic cavalier__img__first">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/1-full.jpg" data-caption="">
                    <img src="images/cavalier/1.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>
                <li class="cavalier__item pic cavalier__img__second">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/2-full.jpg" data-caption="">
                    <img src="images/cavalier/2.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>

                <li class="cavalier__item pic cavalier__img__third">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/3-full.jpg" data-caption="">
                    <img src="images/cavalier/3.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>

                <li class="cavalier__item pic cavalier__img__fourth">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/4-full.jpg" data-caption="">
                    <img src="images/cavalier/4.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>

                <li class="cavalier__item pic cavalier__img__fifth">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/5-full.jpg" data-caption="">
                    <img src="images/cavalier/5.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>

                <li class="cavalier__item pic cavalier__img__sixth">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/6-full.jpg" data-caption="">
                    <img src="images/cavalier/6.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__seventh">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/7-full.jpg" data-caption="">
                    <img src="images/cavalier/7.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>

                <li class="cavalier__item pic cavalier__img__eigth">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/8-full.jpg" data-caption="">
                    <img src="images/cavalier/8.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>

                <li class="cavalier__item pic cavalier__img__empty">

                </li>

                <li class="cavalier__item pic cavalier__img__nine">
                    <figure class="img-box cavalier__img__box">
                        <a data-fancybox="gallery" href="images/cavalier/9-full.jpg" data-caption="">
                            <img src="images/cavalier/9.jpg">
                            <figcaption><p>Нажмите, чтобы увеличить</p></figcaption>
                        </a>
                    </figure>
                </li>
            </ul>
    </div>


    <!-- recommended_items-->
<?php echo $this->render('@app/components/views/recommended_items', compact('hits'))?>
