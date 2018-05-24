<?php
/*Запускаем сессию*/
session_start();
require "connect_db.php";
require "funcShop.php";
?>
<html>
<head>
	<title>Корзина пользователя</title>
</head>
<body>
<?php
if($count){
	echo "<p>Вернуться в <a href='catalog.php'>каталог</a></p>";
}else{
	echo "<p>Корзина пуста. Вернитесь в <a href='catalog.php'>каталог</a></p>";
}
?>
<h1>Корзина</h1>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Вид</th>
	<th>Название</th>
	<th>Размер</th>
	<th>Материал</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
/*Получаем товары*/
$goods = myBasket();
/*Порядковый номер*/
$i = 1;
/*Сумма*/
$sum = 0;
foreach($goods as $item){
?>
	<tr>
		<td><?=$i?></td>
		<td><img src="<?=$item["img"]?>" alt="<?=$item["name"]?>" width="50"></td>
		<td><?=$item["name"]?></td>
		<td><?=$item["size"]?></td>
		<td><?=$item["material"]?></td>
		<td><?=$item["price"]?></td>
		<td><?=$item["quantity"]?></td>
		<td><a href="delBasket.php?id=<?=$item["id"]?>">Удалить</td>?
	</tr>
<?php
/*Общая сумма товаров в корзине*/
	$i++;
	$sum += $item["price"]*$item["quantity"]; 
}
?>
</table>

<p>Всего товаров в корзине на сумму: <?=$sum?> руб.

<div align="center">
   <input type="button" value="Оформить заказ!"
    onClick="location.href='orderform.php'">
	
</div>

</body>
</html>