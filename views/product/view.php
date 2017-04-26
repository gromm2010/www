<?php
use yii\helpers\Html;
?>
<?php if (!empty($products)):?>
    <div class="container-fluid">

            <h1><?=$products->name?></h1>
            <div class="full-date">Дата публикации: <?=$products->data?></div>
            <div class="full-date">Поставщик услуг: <span class="username"><?=$products->provider?></span></div>
            <div class="maincont">
            <div class=" cart_product_img">
                <?= Html::img("@web/images/products/$products->img", ['alt' =>$products->name])?>
                <div class="photo">*Фотография может отличаться</div>
            </div>
            <div class="information-icon"></div><h2>Описание услуг</h2>
            <div class="field-information"><p><?=$products->content?></p></div>
            <div class="specifications-icon"></div><h2>Технические параметры</h2>
            <p><span class="color">Вместимость экскаваторного ковша:</span> 1.2 м3</p>
            <p><span class="color">Наибольшая глубина копания грунта:</span> 9.63 м</p>
            <p><span class="color">Максимальная высота выгрузки груза:</span> 6.72 м</p>
            <p><span class="color">Эксплуатационная масса экскаватора:</span> 23200 кг</p>
            <p><span class="color">Габаритные размеры (ДxШxВ):</span> 9910 x 2980 x 2990 мм</p>
            <div class="payment-icon"></div><h2>Стоимость и оплата</h2>
            <p><span class="color">Цена на услуги: </span> <?=$products->price?> рублей/час</p>
            <p><span class="color">Минимальный заказ:</span> 8 часов/1 рабочая смена</p>
            <p><span class="color">Форма оплаты:</span> <?=$products->payment_form?></p>
            <div class="field-contacts"><div class="contacts-icon"></div><h2>Контактная информация</h2></div>
            <div class="view" style="display: block;"><p><span class="color">Компания-арендодатель:</span> <?=$products->provider?></a></p>
                <p><span class="color">Адрес местонахождения:</span> 454091, г. Челябинск, ул. Труда, д. 95</p>
                <p><span class="color">Номер телефона:</span> +7 (351) 264-37-40</p>
                <p><span class="color">Контактное лицо:</span> Ольга Ильина</p>
                <p><span class="color">Адрес эл. почты:</span> связаться с арендодателем </p>
            <div class="clear"></div>
        </div>
     </div>
    </div>
<?php else :?>
    Товар не заполнен
<?php endif; ?>


