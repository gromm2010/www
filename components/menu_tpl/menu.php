<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']])?>">
        <?= $category['name'] ?>
        <?php if (isset($category['childs'])):?>
            <span class=" link down"></span>
        <?php endif?>
    </a>
    <?php if (isset($category['childs'])):?>

    <ul class="submenu">
        <?= $this->getMenuHtml($category['childs']);?>
    </ul>
<?php endif;?>
</li>
