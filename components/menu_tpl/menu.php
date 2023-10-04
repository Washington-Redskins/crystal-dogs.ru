<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<li>
    <a href="<?= \yii\helpers\Url::to(['breed/view', 'alias' => $category['alias']]) ?>">
        <?= $category['name']?>
        <?php if( isset($category['childs']) ): ?>
            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
        <?php endif;?>
    </a>
    <?php if( isset($category['childs']) ): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
    <a href="<?= \yii\helpers\Url::to(['breed/view', 'alias' => $category['alias']]) ?>">
     <?= Html::img("@web/images/breed/" . $category['icon_image'], ['alt' => 'Не актуально', 'class' => 'sold'])?>
    </a>
</li>