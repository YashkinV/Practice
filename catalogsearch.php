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
<h1>Результаты поиска</h1>

<?

$name = $_POST["search"];
$sort = "WHERE name LIKE '%".$name."%'";
?> 
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
$goods = selectP($sort);
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