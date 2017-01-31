<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\MenuWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language?>">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>МосСпецТранс </title>
    <link rel="shortcut icon"
          href="../web/favicon.ico"
          type="image/x-icon" />
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="conteiner">
    <div class="header">
        <div class="head">
            <div class="logoName">
                <h1>МосСпецТранс</h1>
                <p>Портал аренды спецтехники</p>
                <p>Успех - дело техники!!!</p>
                <?= Html::a('Главная страница', ['category/index'])?>
            </div>
            <div class="headCenter">
                <li> <?= Html::a('Сдать в аренду', [''])?></li>
                <li><?= Html::a('Взять в аренду', [''])?></li>

            </div>
            <div class="formEnter">
                <form>
                    <table>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" formmethod="post" placeholder="Введите емейл"></td>
                            <td rowspan="2"><input type="button" formmethod="post" value="Вход"></td>
                        </tr>
                        <tr><td>Пароль</td>
                            <td><input type="password" formmethod="post" placeholder="Введите пароль"></td>

                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="clear"></div>

        <div class="menu">

            <nav>
                <ul class="topmenu">
                    <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                </ul>
            </nav>

            <div class="clear"></div>
        </div>
    </div>
    <div class="content">
        <div class="leftBox">

        </div>
        <div class="centrBox">

            <?= $content ?>
        </div>

    </div>
    <div class="clear"></div>
    <div class="footer">


    </div>
</div>
<?php $this->endBody() ?>
</body>
<footer>
    <p>Все права защищены 2017</p>
</footer>
</html>
<?php $this->endPage() ?>
