<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<div class="header__area">
    <?= \app\components\MenuHeaderWidget::widget(['tpl' => 'menu_header'])?>
</div>

    <div class="contact__wrap">

        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif;?>

        <div class="contact_category_info"> Если вам понравился щенок, представленный у нас, вы сможете приехать посмотреть на него! Сможете поиграть с ним и просто убедится, что это именно тот малыш, о котором вы всегда мечтали. <br>
            Приобретая щенков у нас вы всегда можете рассчитывать
            на поддержку и консультации по вопросам содержания, воспитания, ухода, кормления, разведения.


<!--                <div class="contact__svg">-->
<!--                    <svg>-->
<!--                        <use xlink:href="images/home/symbol/sprite.svg#whatsapp"></use>-->
<!--                    </svg>-->
<!--                </div>-->
<!--            <ul class="advantages__list wrap">-->
<!--                <li class="advantages__item">-->
<!--                    <div class="advantages__img">-->
<!--                        <svg class="advantages__svg">-->
<!--                            <use xlink:href="images/home/symbol/sprite.svg#whatsapp"></use>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    <p class="advantages__subtitle">whatsapp</p>-->
<!--                </li>-->
<!--                <li class="advantages__item">-->
<!--                    <div class="advantages__img">-->
<!--                        <svg class="advantages__svg">-->
<!--                            <use xlink:href="images/home/symbol/sprite.svg#icons8-viber"></use>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    <p class="advantages__subtitle">viber</p>-->
<!--                </li>-->
<!--            </ul>-->

<!--            <br>-->
<!--           А так же можете задать вопрос на e-mail: <a href="mailto:mail.crystal.dogs@gmail.com">mail.crystal.dogs@gmail.com</a>-->



        </div>

    </div>

<section class="send__mail">
    <ul class="send__mail__list">
        <li class="send__mail__header">
            По всем интересующим вопросам можете связаться по номеру:
        </li>
        <li class="send__mail__phone">
            +79157649616
        </li>
        <li class="send__mail__svg">
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
        <li class="send__mail__map">
            Найти нас <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405740.83838633087!2d40.189769157692645!3d55.82062311958808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414be43e0eca5fbd%3A0x3053a3ae7804b68e!2z0JPRg9GB0Ywt0KXRgNGD0YHRgtCw0LvRjNC90YvQuSwg0JLQu9Cw0LTQuNC80LjRgNGB0LrQsNGPINC-0LHQuy4sINCg0L7RgdGB0LjRjw!5e0!3m2!1sru!2sin!4v1594995598121!5m2!1sru!2sin" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </li>

    </ul>
</section>