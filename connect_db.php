<?php
define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "password");
define("DB_NAME", "shopDB"); 


$count = 0; //для корзины

mysql_connect(DB_HOST, DB_LOGIN) or die("Не могу соединиться с сервером базы данных!");

mysql_select_db(DB_NAME) or die(mysql_error());

?>