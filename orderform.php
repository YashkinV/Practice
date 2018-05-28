<html>
<head>
	<title>Форма оформления заказа</title>
</head>
<body>
	<h1>Форма оформления заказа:</h1>
	<form action="saveOrder.php" method="post">
		<p>Заказчик: <input type="text" name="name" size="50">
		<p>Email заказчика: <input type="text" name="email" 
					size="50">
		<p>Телефон для связи: <input type="text" name="phone" 
						size="50">
		<p>Адрес доставки: <br><input type="text"textarea name="address" 
                                     cols="50" rows="5"></textarea>
		<p><input type="submit" value="Заказать">
	</form>
	<p>Вернуться в <a href="basket.php">корзину</a></p>
</body>
</html>