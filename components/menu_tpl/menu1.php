
<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']])?>">
        <?= $category['name'] ?>
        <?php if (isset($category['childs'])):?>
            <span class=" link down"></span>
        <?php endif?>
    </a>
    <?php if (isset($category['childs'])):?>

        <ul class="dropdown-menu">
            <?= $this->getMenuHtml($category['childs']);?>
        </ul>
    <?php endif;?>
</li>


<div class="menu">

    <nav>
        <ul class="topmenu">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
        </ul>
    </nav>

    <div class="clear"></div>
</div>