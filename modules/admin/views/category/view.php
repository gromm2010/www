<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<h1>Отображаються все обьявления в  категории</h1>
<table id="table_category">
    <tr><th>ID</th><th>Название</th><th>Дата</th><th>Поставщик</th><th>Цена</th><th>Мин заказ</th><th>Форма оплаты</th><th>Тех параметры</th><th></th></tr>
<?php if (!empty($products)):?>
    <?php foreach ($products as $product):?>
        <tr>
            <td><?=$product->id ?></td>
            <td><?=$product->name ?></td>
            <td><?=$product->data?></td>
            <td><?=$product->provider?></td>
            <td><?=$product->price?><p>руб/час</p></td>
            <td><?=$product->min_order?><p>часов</p></td>
            <td><?=$product->payment_form?></td>
            <td><?=$product->content?></td>
            <td><a href=""><span class="label label-primary">Изменить</span></a></td>
        </tr>
    <?php endforeach; ?>
<?php else :?>
    <h2>Категория пустая</h2>
<?php endif; ?>
</table>
