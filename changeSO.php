<?php
require "connect_db.php";
require "funcShop.php";
$sort=$_GET["sort"];
$customer=$_GET["s"];
changeStatusOrders($customer, $sort);
//header("Location: catalog.php");

?>