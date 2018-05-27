<?php
session_start();
require "connect_db.php";
require "funcShop.php";

$name = clearData($_POST["name"], "string_file");
$email = clearData($_POST["email"], "string_file");
$phone = clearData($_POST["phone"], "string_file");
$address = clearData($_POST["address"], "string_file");
$customer = session_id();

$datetime = time();

$order = "$name|$email|$phone|$address|$customer|$datetime\n";

if($name!=NULL&&$name!=NULL&&$phone!=NULL&&$address!=NULL){
file_put_contents(ORDERS_LOG, $order, FILE_APPEND);
saveOrder($datetime);
echo "Ваш заказ принят";
}
else {
	echo "Заполните все поля, вернитесь назад";
}
?>
<html>
<head>
	<title>Сохранение данных заказа</title>
</head>
<body>

	<p><a href="catalog.php">Каталог товаров</a></p>
	
</body>
</html>