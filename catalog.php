<?php
/*Запускаем сессию*/
session_start();
require "connect_db.php";
require "funcShop.php";
?>
<html>
<head>
	<title>Каталог товаров</title>
</head>
<body>
<p>Товаров в <a href="basket.php">корзине</a>: <?=$count?></p>
<h1>Каталог товаров</h1>
<form action="catalogsearch.php" method="post">
<input type="text" name="search" size="50" value=""><input type="submit" value="Поиск"></form>
<a href="catalogsort.php?sort=ORDER BY `price` DESC">по убыванию</a>
<a href="catalogsort.php?sort=ORDER BY `price` ASC">по возрастанию</a>
<a href="catalogsort.php?sort=WHERE material='бязь'">Бязь</a>
<a href="catalogsort.php?sort=WHERE material='поплин'">Поплин</a>
<a href="catalogsort.php?sort=WHERE ='перкаль'">Перкаль</a>
<a href="catalogsort.php?sort=WHERE size='1'">1,5 спальный</a>
<a href="catalogsort.php?sort=WHERE size='2'">2 спальный</a>
<a href="catalogsort.php?sort=WHERE size='3'">2 спальный c евр</a>
<a href="catalogsort.php?sort=WHERE size='4'">Евро</a>
<a href="catalogsort.php?sort=WHERE size='5'">Семейный</a>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Вид</th>
	<th>Название</th>
	<th>Размер</th>
	<th>Материал</th>
	<th>Цена, руб.</th>
	<th>В корзину</th>
</tr>
<?php
$goods = selectAll();
foreach($goods as $item){

?>
	<tr>
		<td><img src="<?=$item["img"]?>" alt="<?=$item["name"]?>" width="150"></td>
		<td><?=$item["name"]?></td>
		<td><?=$item["size"]?></td>
		<td><?=$item["material"]?></td>
		<td><?=$item["price"]?></td>
		<td><a href="addBasket.php?id=<?=$item["id"]?>">В корзину</td>
	</tr>
<?php
}
?>
</table>
</body>
</html>