<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт Максимова В.А.</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php 
	include	"menu.php";
?>

	<h1>Личный сайт Максимова В.А.</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">
			<p>Добрый день! Меня зовут Виталий Максимов. Я совсем недавно начал изучать програмирование.</p>

			<p>Я обучался по материалу IT - портала <a href="https://geekbrains.ru/"> GeekBrains</a>.</p>

			<p>На этом сайте вы можете сыграть несколько игр которые я написа: <br>
			<a href="index.php">Главная</a>
			<a href="puzzle.php">Загадки</a>
			<a href="guess.php">Угадайка</a>
			<a href="guess1x1.php">Угадайка мульплеер</a>
			</p>
		</div>
	</div>
</div>

<div class="footer">
	Copyright &copy; 2021- <?php echo date("Y");?> Maksimov Vitaliy
<div>
</body>
</html>