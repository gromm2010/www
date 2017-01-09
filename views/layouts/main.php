
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
				</div>
				<div class="headCenter">
					<a href="#">Сдать в Аренду</a>
					<a href="#">Взять в аренду</a>

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
				<div class="categorii">
					<div class="NameCategori"><a href="#">Автокраны</a></div>
					<div class="ImgCategori"><img src="images/avtokran.png" alt="Автокран"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Экскаваторы</a></div>
					<div class="ImgCategori"><img src="images/ekskavator.png" alt="Экскаватор"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Компрессоры</a></div>
					<div class="ImgCategori"><img src="images/kompressor.png" alt="Компрессоры"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Самосвалы</a></div>
					<div class="ImgCategori"><img src="images/samosval.png" alt="Самосвалы"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Автовышки</a></div>
					<div class="ImgCategori"><img src="images/avtovyshka.png" alt="Автовышки"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Манипуляторы</a></div>
					<div class="ImgCategori"><img src="images/manipulyator.png" alt="Манипулятор"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Ямобуры</a></div>
					<div class="ImgCategori"><img src="images/yamobur.png" alt="Ямобур"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Бульдозеры</a></div>
					<div class="ImgCategori"><img src="images/buldozer.png" alt="Бульдозеры"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Бетононасосы</a></div>
					<div class="ImgCategori"><img src="images/avtobetononasos.png" alt="Бетононасос"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Эвакуаторы</a></div>
					<div class="ImgCategori"><img src="images/evakuator.png" alt="Эвакуатор"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Фронт погрузчики</a></div>
					<div class="ImgCategori"><img src="images/frontalnyj-pogruzchik.png" alt="Фронтальные погрузчики"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Грунторезы</a></div>
					<div class="ImgCategori"><img src="images/bara.png" alt="Грунторез"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Тралы</a></div>
					<div class="ImgCategori"><img src="images/tral.png" alt="трал"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Вилл погрузчики</a></div>
					<div class="ImgCategori"><img src="images/vilochnyj-pogruzchik.png" alt="Вилочный погрузчик"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Башенные краны</a></div>
					<div class="ImgCategori"><img src="images/bashennyj-kran.png" alt="Башенный кран"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Бензовозы</a></div>
					<div class="ImgCategori"><img src="images/benzovoz.png" alt="Бензовоз"></div>
				</div>
				<div class="categorii">
					<div class="NameCategori"><a href="#">Автогрейдеры</a></div>
					<div class="ImgCategori"><img src="images/avtogrejder.png" alt="Автогрейдер"></div>
				</div>


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