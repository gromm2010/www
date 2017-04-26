<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста заполните форму регистрации:</p>

    <div class="row">
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Выберите тип <b class="caret"></b></a>
                <?php
                echo Dropdown::widget([
                    'items' => [
                        ['label' => 'Арендатор'],
                        ['label' => 'Арендодатель'],
                    ],
                ]);
                ?>
            </div>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>



