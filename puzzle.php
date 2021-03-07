<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Загадки</title>
	<link rel="stylesheet" href="style.css"> 

</head>
<body>

<div class="content">
<?php 
	include	"menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php
                
				if (isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) && isset($_GET['userAnswer4'])) {
                    
					$userAnswer = mb_strtolower ($_GET["userAnswer1"]);
					$score = 0;
					if ($userAnswer == "водопровод" || $userAnswer == "вода в доме") {
						$score++;
					}
					$userAnswer = mb_strtolower ($_GET["userAnswer2"]);
					if ($userAnswer == "водопроводный кран" || $userAnswer == "кран") {
						$score++;
					}	
					$userAnswer = mb_strtolower ($_GET["userAnswer3"]);
					if ($userAnswer == "шахматный" || $userAnswer == "мертвый") {
						$score++;
					}
					$userAnswer = mb_strtolower ($_GET["userAnswer4"]);
					if ($userAnswer == "календарь" || $userAnswer == "календарик") {
						$score++;
					}
					echo "Вы угадали " . $score . " загадок";

				}
				?>

				<form method="GET" >
				<p>Речка спятила с ума — по домам пошла сама.</p>
				<input type="text" name="userAnswer1" >

				<p>Из стены торчу, головой кручу, мою и пою целую семью.</p>
				<input type="text" name="userAnswer2" >

				<p>Какой конь не ест овса?</p>
				<input type="text" name="userAnswer3" >

                <p>На раскрашенных страницах много праздников хранится.</p>
                <input type="text" name="userAnswer4" >
				<br>
				<input type="submit" value="Ответить" name=""></a>
				</form>
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Maksimov Vitaliy
<div>


</body>
</html>