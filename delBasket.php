<?php
/*Запускаем сессии*/
session_start();
require "connect_db.php";
require "funcShop.php";
$id = clearData($_GET["id"], "i");
delBasket($id);

header("Location: basket.php");
?>