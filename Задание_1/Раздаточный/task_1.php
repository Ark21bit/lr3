<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8">
<body>
	<h1>Еще о формах</h1>

	<h2>Редактируем данные пользователя</h2>

	<?php
		require "user.php";

	?>


	<form action="example_8.php" method="post">
		
		Имя: <input type="text" name="name"><p>
		E-mail: <input type="email" name="email"><p>
		
		<h3>Выберите интересующий вас курс:</h3>


		<h3>Выберите форму обучения:</h3>


		<h3>Какие направления ИТ вас могли бы заинтересовать:</h3>


		<input type="submit">
	</form>

</body>
</html>