<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    <?php $this->head()?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="conteiner">
            <div class="header">
                <div class="NameSite">
                <h1>МосСпецТранс </h1>
                </div>
                <div class="menu">
                    <?php
                    NavBar::begin([
                        'brandLabel' => 'МосСпецТранс',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-inverse navbar-fixed-top',
                        ],
                    ]);
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => [
                            ['label' => 'О нас', 'url' => ['/site/autor']],
                            ['label' => 'Главная', 'url' => ['/site/index']],
                            ['label' => 'Контакты', 'url' => ['/site/contact']],
                            Yii::$app->user->isGuest ? (
                            ['label' => 'Login', 'url' => ['/site/login']]
                            ) : (
                                '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>'
                            )
                        ],
                    ]);
                    NavBar::end();
                    ?>
                </div>
            </div>
            <div class="content">

            </div>
            <div class="footer">

            </div>
        </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>