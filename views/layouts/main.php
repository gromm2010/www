
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
<!DOCTYPE html>
<html lang="ru">
	<head>

		<title>Урок 6 </title>
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
                    <?= Html::a('Главная страница', ['my/index'])?>
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
								<td><input formmethod="post" placeholder="Введите емейл"></td>
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
						<li><a href=""><span class="link down">Грузовая техника</span></a>
							<ul class="submenu">
								<li><a href="">Бензовозы</a></li>
								<li><a href="">Вахтовые автобусы</a></li>
								<li><a href="">Водовозы</a></li>
								<li><a href="">Грузовики</a></li>
								<li><a href="">Длинномеры</a></li>
								<li><a href="">Зерновозы</a></li>
								<li><a href="">Лесовозы</a></li>
								<li><a href="">Ломовозы</a></li>
								<li><a href="">Панелевозы</a></li>
								<li><a href="">Самосвалы</a></li>
								<li><a href="">Тралы</a></li>
								<li><a href="">Трубовозы</a></li>
								<li><a href="">Тягачи</a></li>
								<li><a href="">Эвакуаторы</a></li>
							</ul>
						</li>
						<li><a href=""><span class="link down">Дорожная техника</span></a>
							<ul class="submenu">
								<li><a href="">Бензовозы</a></li>
								<li><a href="">Вахтовые автобусы</a></li>
								<li><a href="">Водовозы</a></li>
								<li><a href="">Грузовики</a></li>
								<li><a href="">Длинномеры</a></li>
								<li><a href="">Зерновозы</a></li>
								<li><a href="">Лесовозы</a></li>
								<li><a href="">Ломовозы</a></li>
								<li><a href="">Панелевозы</a></li>
								<li><a href="">Самосвалы</a></li>
								<li><a href="">Тралы</a></li>
								<li><a href="">Трубовозы</a></li>
								<li><a href="">Тягачи</a></li>
								<li><a href="">Эвакуаторы</a></li>
							</ul>
						</li>
						<li><a href=""><span class="link down">Землеройная техника</span></a>
							<ul class="submenu">
								<li><a href="">Бензовозы</a></li>
								<li><a href="">Вахтовые автобусы</a></li>
								<li><a href="">Водовозы</a></li>
								<li><a href="">Грузовики</a></li>
								<li><a href="">Длинномеры</a></li>
								<li><a href="">Зерновозы</a></li>
								<li><a href="">Лесовозы</a></li>
								<li><a href="">Ломовозы</a></li>
								<li><a href="">Панелевозы</a></li>
								<li><a href="">Самосвалы</a></li>
								<li><a href="">Тралы</a></li>
								<li><a href="">Трубовозы</a></li>
								<li><a href="">Тягачи</a></li>
								<li><a href="">Эвакуаторы</a></li>
							</ul>
						</li>
						<li><a href=""><span class="link down">Комунальная техника</span></a>
							<ul class="submenu">
								<li><a href="">Бензовозы</a></li>
								<li><a href="">Вахтовые автобусы</a></li>
								<li><a href="">Водовозы</a></li>
								<li><a href="">Грузовики</a></li>
								<li><a href="">Длинномеры</a></li>
								<li><a href="">Зерновозы</a></li>
								<li><a href="">Лесовозы</a></li>
								<li><a href="">Ломовозы</a></li>
								<li><a href="">Панелевозы</a></li>
								<li><a href="">Самосвалы</a></li>
								<li><a href="">Тралы</a></li>
								<li><a href="">Трубовозы</a></li>
								<li><a href="">Тягачи</a></li>
								<li><a href="">Эвакуаторы</a></li>
							</ul>
						</li>
						<li><a href=""><span class="link down">Подьемная техника</span></a>
							<ul class="submenu">
								<li><a href="">Бензовозы</a></li>
								<li><a href="">Вахтовые автобусы</a></li>
								<li><a href="">Водовозы</a></li>
								<li><a href="">Грузовики</a></li>
								<li><a href="">Длинномеры</a></li>
								<li><a href="">Зерновозы</a></li>
								<li><a href="">Лесовозы</a></li>
								<li><a href="">Ломовозы</a></li>
								<li><a href="">Панелевозы</a></li>
								<li><a href="">Самосвалы</a></li>
								<li><a href="">Тралы</a></li>
								<li><a href="">Трубовозы</a></li>
								<li><a href="">Тягачи</a></li>
								<li><a href="">Эвакуаторы</a></li>
							</ul>
						</li>
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