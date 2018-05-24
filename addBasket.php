<?php
/*Запускаем сессию*/
session_start();
require "connect_db.php";
require "funcShop.php";

/*Получаем идентификатор пользователя*/
$customer =session_id();

$goodsid = clearData($_GET["id"], "i");
$quantity = 1;
$date = time();

addBasket($customer, $goodsid, $quantity, $date);

header("Location: catalog.php");
?>