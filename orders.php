<?php
require "connect_db.php";
require "funcShop.php";
?>
<html>
<head>
	<title>Поступившие заказы</title>
</head>
<body>
<h2>Поступившие заказы:</h2>
<p>Вернуться в <a href="catalog.php">каталог</a></p>
<?php
$orders = getOrders();
/*проверяем, в переменную $orders пришел массив или нет*/
if(is_array($orders)){
	foreach($orders as $order){
?>
<hr>
<p><b>Заказчик</b>: <?=$order["name"]?></p>
<p><b>Email</b>: <?=$order["email"]?></p>
<p><b>Телефон</b>: <?=$order["phone"]?></p>
<p><b>Адрес доставки</b>: <?=$order["address"]?></p>
<p><b>Дата размещения заказа</b>: <?=date("d-m-Y H:i:s", $order["datetime"])?></p>
<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th></th>
	<th></th>
	<th></th>
	<th>Цена, руб.</th>
	<th>Количество</th>
	<th>Статус</th>
</tr>
<?php
$i = 1;
$sum = 0;
foreach($order["goods"] as $item){
?>
	<tr>
		<td><?=$i?></td>
		<td><?=$item["name"]?></td>
		<td><?=$item["size"]?></td>
		<td><?=$item["material"]?></td>
		<td><?=$item["price"]?></td>
		<td><?=$item["quantity"]?></td>
		<td><?if($item["status"]==0){echo "Заказ на обработке";}?></td>
	</tr>
<?php
	$i++;
	$sum += $item["price"] * $item["quantity"]; 
}
?>
</table>
<p>Всего товаров в заказе на сумму: <?=$sum?>руб.

<?php
	}
}
?>
</body>
</html>