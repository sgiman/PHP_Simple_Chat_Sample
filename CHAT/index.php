<?php 
include 'book.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Готовый скрипт гостевой книги без MySQL</title>
<meta name="description" content="Пишем свою гостевую книгу на php">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
	<?foreach($gb as $text) {?>
		<?=($text)?><br><br>
	<?}?>
	<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST" id="form">
		<input type="text" name="name" placeholder="Имя" id="name">
		<textarea name="text" placeholder="Текст"></textarea><br>
		<input type="submit" name="add" value="Добавить запись">
	</form>
</div>

<script>
	var i2 = document.querySelector('#name');
	i2.value = localStorage.getItem('names');
	i2.oninput = function() {
		localStorage.setItem('names', i2.value);
	}
</script>
	

</body>
</html>
