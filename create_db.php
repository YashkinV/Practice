<?php
define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "password");
define("DB_NAME", "shopDB");

mysql_connect(DB_HOST, DB_LOGIN) or die(mysql_error());

$sql = 'CREATE DATABASE '.DB_NAME;
mysql_query($sql) or die(mysql_error());

mysql_select_db(DB_NAME) or die(mysql_error());

$sql = "
CREATE TABLE catalog (
	id int(11) NOT NULL auto_increment,
	artikul int(8) NOT NULL default 0,
	name varchar(32) NOT NULL default '',
	size int(4) NOT NULL default 0,
	material varchar(32) NOT NULL default '',
	status int(4) NOT NULL default 0,
	price int(11) NOT NULL default 0,
	img varchar(64) NOT NULL default '',
	PRIMARY KEY (id)
)";

mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE basket (
	id int(11) NOT NULL auto_increment,
	customer varchar(32) NOT NULL default '',
	goodsid int(11) NOT NULL default 0,
	quantity int(4) NOT NULL default 0,
	datetime int(11) NOT NULL default 0,
	PRIMARY KEY (id)
)";

mysql_query($sql) or die(mysql_error());

$sql = "
CREATE TABLE orders (
	id int(11) NOT NULL auto_increment,
	name varchar(32) NOT NULL default '',
	size int(4) NOT NULL default 0,
	material varchar(32) NOT NULL default '',
	price int(11) NOT NULL default 0,
	customer varchar(32) NOT NULL default '',
	quantity int(4) NOT NULL default 0,
	status int(4) NOT NULL default 0,
	datetime int(11) NOT NULL default 0,
	PRIMARY KEY (id)
)";

mysql_query($sql) or die(mysql_error());

mysql_close();

echo '<p>Структура базы данных успешно создана!</p>';
?>