<?php if (Yii::$app->controller->id == $category['controller']) : ?>
<li class="menu__element active">
    <a href="<?= \yii\helpers\Url::to('/' . $category['path'])?>"><?=$category['name']?></a>
</li>
<?php else : ?>
<li class="menu__element">
    <a href="<?= \yii\helpers\Url::to('/' . $category['path'])?>"><?=$category['name']?></a>
</li>
<?php endif ?>