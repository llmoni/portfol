<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Генератор случайных паролей</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">

			var uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
			var lowercase = 'abcdefghijklmnopqrstuvwxyz'; 
			var numbers = '0123456789'; 
			var symbols = '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~'; 
			var all = uppercase + lowercase + numbers + symbols; 		

		function readInt(){
			return +document.getElementById("userAnswer").value;			
		}

		function write(text){
			document.getElementById("passw").innerHTML = text
		}

		function getRandomNumder(max){
			return Math.round(Math.random() * max);
		}


		function generateText(all, length) { 
			var text = ''; 
		for (var i = 0; i < length; i++) { 
			var character = Math.floor(Math.random() * all.length); text += all.charAt(character); 
			} 
			return text; 
		} 
		function generate(){
			var length = readInt();
			var passw = generateText(all,length);
			write(passw);
		}
	</script>
</head>
<body>
<body>

<div class="content">

<?php 
	include	"menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор случайных паролей</h1>

			<div class="box">

				<p >Укажите длину пароля</p>
				<input type="text" id="userAnswer">
				<h3 id="passw"></h3>
				<a href="#" onClick="generate();">Результат</a>						
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