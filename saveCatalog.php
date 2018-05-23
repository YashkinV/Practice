<?php
require "connect_db.php";
require "funcShop.php";
$artikul = clearData($_POST['artikul'], "i"); 
$name = clearData($_POST['name']);
$size = clearData($_POST['size'], "i"); 
$material = clearData($_POST['material']);
$status = clearData($_POST['status'], "i"); 
$price = clearData($_POST['price'], "i");
$img = clearData($_POST['img']);

save($artikul, $name, $size, $material, $status, $price, $img)	
 /*header('Refresh: 5; addCatalog.php');
  echo 'Успешно!';*/

?>