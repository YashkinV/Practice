
<html>
<head>
	<title>Форма добавления товара в каталог</title>
</head>
<body>
<h1>Добавить товары в каталог:</h1>
	<form action="saveCatalog.php" method="post">
		<p>Артикул___________:<input type="text" name="artikul" size="50"></p>
		<p>Название__________:<input type="text" name="name" size="50"></p>
		<p>Размер____________:<input type="text" name="size" size="50"></p>
		<p>Материал__________:<input type="text" name="material" size="50"></p>
		<p>Статус____________:<input type="text" name="status" size="50"></p>
		<p>Цена_____________:<input type="text" name="price" size="50"></p>
		<p>Ссылка на картинку:<input type="text" name="img" size="50"></p>
		<p><input type="submit" value="Добавить"></p>
	</form>
<p>Посмотреть <a href="catalog.php">Каталог</a></p>
</body>
</html>