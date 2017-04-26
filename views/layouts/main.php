<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\MenuWidget;
use yii\bootstrap\ActiveForm;
use yii\web\UrlManager;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language?>">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>МосСпецТранс</title>
<!--    <link href="../web/css/layout.css" rel="stylesheet" type="text/css" />-->
<!--    <link href="../web/css/menu.css" rel="stylesheet" type="text/css" />-->
    <link rel="shortcut icon"
          href="../web/favicon.ico"
          type="image/x-icon" />
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container">
    <div class="header row">
        <div class="head row">
            <div class="logoName row">
                <img src="../web/images/logo.png" alt="МосСпецТранс">
            </div>
            <div class="col-xs-12 col-md-8" id="header">
                <nav class="navbar navbar-default navbar-right">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="<?= Url::to(['/category/index'])?>">Главная</a>
                                </li>
                                <li>
                                    <a href="<?= Url::to(['/admin'])?>">Админка</a></li>
                                <li>
                                    <a href="<?= Url::to(['/site/login'])?>">Личный кабинет</a>
                                </li>
                                <?php if (!Yii::$app->user->isGuest):?>
                                    <li>
                                        <a href="<?= Url::to(['/site/logout'])?>">Выйти</a>
                                    </li>
                                <?php endif;?>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div class="clear"></div>
        <ul id="nav">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
        </ul>
        <div class="container-fluid">

            <div class="clear"></div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-md-8 centrBox">
            <?= $content ?>
        </div>
        <aside class="col-xs-6 col-md-4 hidden-xs">
            <h3>Сайд бар bgdf gt  gtrg g rr grg r</h3>
        </aside>

    </div>
    <div class="clear"></div>
    <footer>
        <p>Все права защищены 2017</p>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
