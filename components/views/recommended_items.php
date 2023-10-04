<?php $count = count($hits); if ($hits) : ?>
<div class="title__you__might__be__interested">Вам может быть интересно</div>
    <div class="you__might__be__interested">
        <section class="tape">



            <div class="owl-carousel auto-scrolling owl-theme">

                        <?php $i = 0; foreach($hits as $hit): ?>

                                <div class="item ">


                                                    <?php $hitImg = $hit->getImage();?>
                                                    <a href="<?= \yii\helpers\Url::to(['dog/view', 'alias' => $hit->alias]) ?>"><?= \yii\helpers\Html::img($hitImg->getUrl('268x249'), ['alt' => $hit->name])?></a>
                                                    <p><a href="<?= \yii\helpers\Url::to(['dog/view', 'alias' => $hit->alias])?>"><?= $hit->name?></a></p>



                                </div> <!-- /item-->

                        <?php endforeach; ?>

            </div>  <!-- /owl-carousel owl-theme -->

        </section>
    </div>
<?php endif; ?>