<?php

function save($artikul, $name, $size, $material, $status, $price, $img){
	$sql = "INSERT INTO catalog(artikul, 
                                name, 
                                size, 
								material,
								status,
								price,
								img
								)
							VALUES(
								'$artikul', 
								'$name', 
								'$size',
								'$material',
								'$status',
								'$price',
								'$img'
								)";
	mysql_query($sql) or die(mysql_error());
}


function clearData($data, $type = "s"){
	switch($type){
	    case "s": 
		return mysql_real_escape_string(trim(strip_tags($data))); break;
	    case "i":
		return (int)$data;
	
	    case "string_file": return trim(strip_tags($data));
	}
}

//отображение всего каталога
function selectAll(){
	$sql = "SELECT * FROM catalog";
	$result = mysql_query($sql) or die(mysql_error());
	return dataBaseToArray($result);
}
//сортировка и фильтрация

function selectP(){
	
	$sql = "SELECT * FROM catalog WHERE id='$sort'";
	$result = mysql_query($sql) or die(mysql_error());
	return dataBaseToArray($result);
}

function dataBaseToArray($result){
	$array = array();
	while($row = mysql_fetch_assoc($result)){
		$array[] = $row;
	}
	return $array;
}


function addBasket($customer, $goodsid, $quantity, $datetime){
	$sql = "INSERT INTO basket(	customer, 
								goodsid, 
								quantity, 
								datetime)
							VALUES(
								'$customer', 
								'$goodsid', 
								'$quantity', 
								'$datetime'
								)";
	mysql_query($sql) or die(mysql_error());
}


function myBasket(){
	$sql = "SELECT 
				artikul, 
                name, 
                size, 
				material,
				price,
				img,
				basket.id, 
				goodsid, 
				customer, 
				quantity
			FROM catalog, basket
			WHERE customer='".session_id()."'
			AND catalog.id=basket.goodsid";
	$result = mysql_query($sql) or die(mysql_error());
	return dataBaseToArray($result);
}


function delBasket($id){
	$sql = "DELETE FROM basket WHERE id=$id";
	mysql_query($sql) or die(mysql_error());
}
/*
function clearBasket(){
	$sql = "DELETE FROM basket";
	mysql_query($sql) or die(mysql_error());
}
*/

function saveOrder($datetime){
	$goods = myBasket();
	foreach($goods as $item){
		$sql = "INSERT INTO orders(
							name,
							size,
							material,
							price,
							customer,
							quantity,
							
							datetime)
						 VALUES(
						  '{$item["name"]}',
						  {$item["size"]},
						   '{$item["material"]}',
						   {$item["price"]},
						  '{$item["customer"]}',
						   {$item["quantity"]},
						   
						   $datetime)";
			mysql_query($sql) or die(mysql_error());
	}
	/*Запрос на удаление товаров из корзины*/
	$sql = "DELETE FROM basket WHERE customer='".session_id()."'";
	mysql_query($sql) or die(mysql_error());
}

?>