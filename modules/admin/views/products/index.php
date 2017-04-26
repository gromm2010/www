<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_category',
            'name',
            'content',
            'price',
            // 'payment_form',
            // 'provider',
            // 'data',
            // 'keywords',
            // 'description',
                'img',
            // 'new',
            // 'hit',
            // 'sale',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
