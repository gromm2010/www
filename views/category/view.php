<?php
use yii\helpers\Html;
?>
<?php if (!empty($products)):?>
    <?php foreach ($products as $product):?>
<div class="cart_product">
    <div class="cart_product_description">
        <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id])?>">
            <h3><?=$product->name?></h3>
        </a>
        <span>Дата размещения: <?=$product->data?></span><br>
        <span>Поставщик услуг:<?=$product->provider?></span>
        <h4></h4><i class="fa fa-rub" aria-hidden="true"></i> Стоимость и оплата</h4><br>
        <span>Цена за услуги:<?=$product->price?>руб/ч</span><br>
        <span>Минимальный заказ:</span><br>
        <span>Форма оплаты:<?=$product->payment_form?></span><br>
        <h4></h4><i class="fa fa-tachometer" aria-hidden="true"></i> Технические параметры</h4><br>
        <p><span class="color">Вместимость экскаваторного ковша:</span> 1.2 м3</p>
        <p><span class="color">Наибольшая глубина копания грунта:</span> 9.63 м</p>
        <p><span class="color">Максимальная высота выгрузки груза:</span> 6.72 м</p>
        <p><span class="color">Эксплуатационная масса экскаватора:</span> 23200 кг</p>
        <p><span class="color">Габаритные размеры (ДxШxВ):</span> 9910 x 2980 x 2990 мм</p>
    </div>
    <div class="cart_product_img">
        <?= Html::img("@web/images/products/$product->img", ['alt' =>$product->name])?>
    </div>
    <div class="clear"></div>
</div>
<?php endforeach; ?>
<?php else :?>
    <h2>Категория пустая</h2>
<?php endif; ?>
