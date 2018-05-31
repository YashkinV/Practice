<?php
/*Запускаем сессию*/
session_start();
require "connect_db.php";
require "funcShop.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="js/fancybox/fancybox.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon"/>
        <title>Добро пожаловать!</title>
        <script type="text/javascript" src="js/jquery.js"></script>
	
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.2.1.pack.js"></script>

	<script type="text/javascript">
	$(document).ready(function() { 
	$("a.first").fancybox(); 
	});
</script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
			<div id="logo"></div>
                <div id="nav"> 
                    <a href="#prtfl" class="styletxt">ГЛАВНАЯ</a> 
                    <a href="#uslug" class="styletxt">КАТАЛОГ</a>
                    <a href="#mail" class="styletxt">ОТЗЫВЫ</a>
                    
                    <a href="#contact" class="styletxt"> КОНТАКТЫ</a>

                </div>
				<div id="basket">
					<div id="logobasket">  </div>
					<div id="textbasket">
				    <a href="basket.php">Корзина</a>:<?=$count?></div></div>
            </div>
            <div id="info">
			
			<div id="content">
			<div id="panel">
	

<p><a href="catalog.php?sort=WHERE material='бязь'">Бязь</a></p>
<p><a href="catalog.php?sort=WHERE material='поплин'">Поплин</a></p>
<p><a href="catalog.php?sort=WHERE material='перкаль'">Перкаль</a></p>
<p><a href="catalog.php?sort=WHERE size='1'">1,5 спальный</a></p>
<p><a href="catalog.php?sort=WHERE size='2'">2 спальный</a></p>
<p><a href="catalog.php?sort=WHERE size='3'">2 спальный c евр</a></p>
<p><a href="catalog.php?sort=WHERE size='4'">Евро</a></p>
<p><a href="catalog.php?sort=WHERE size='5'">Семейный</a></p>

			</div>
<div id="search">
<form action="catalogsearch.php" method="post">
<input type="text" name="search" size="20" value="">

<input type="submit" value="Поиск"></form>
</div>

<h1>Форма оформления заказа:</h1>
	<form action="saveOrder.php" method="post">
		<p>Заказчик: <input type="text" name="name" size="50">
		<p>Email заказчика: <input type="text" name="email" 
					size="50">
		<p>Телефон для связи: <input type="text" name="phone" 
						size="50">
		<p>Адрес доставки:<input type="text" name="address" 
                                 size="50"></textarea>
		<p><input type="submit" value="Заказать">
	</form>

            </div>
                                    </div>



</body>
</html>
