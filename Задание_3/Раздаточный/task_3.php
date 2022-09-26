<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<body>
	<h1>Еще о формах</h1>
	
	<?php
		// подключаем файл с массивом заказа
		include "orders.php";

	?>
	
	<form action="server.php" method="post">
		Фамилия: <input type="text" name=""><p>
		Имя: <input type="text" name=""><p>
		E-mail: <input type="email" name=""><p>
		
		<!-- блок вывода скрытых полей заказа -->

		<input type="submit">
	</form>

</body>
</html>