<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
    <h1>Отображаються все категории</h1>
<table id="table_category">
    <tr><th>ID</th><th>Название категории</th><th>Количество обьявлений</th><th>Перейти к категории</th><th>Добавить обьявление</th></tr>
<?php if (!empty($category)): ?>
    <?php foreach ($category as $categori): ?>
    <tr>
        <td><?= $categori->id ?></td>
        <td><?= $categori->name ?></td>
        <td><span class="badge">5</span></td>
        <td><a href="<?= Url::to(['category/view', 'id' => $categori->id]) ?>"><span class="label label-success">Перейти</span></a></td>
        <td><a href=""><span class="label label-primary">Добавить</span></a></td>
    </tr>


    <?php endforeach; ?>
<?php else: ?>
    Категорий не найдено
<?php endif; ?>

</table>
