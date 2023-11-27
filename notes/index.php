<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<title>Заметки</title>
</head>
<body>
<h1>Добавить Заметку</h1>
<form method="post" action="display_notes.php">
<label for="name">Название:</label>
<input type="text" id="name" name="name" required><br>
<label for="category">Категория:</label>
<select id="category" name="category" required>
<option value="Книга">Книга</option>
<option value="Мультфильм">Мультфильм</option>
<option value="Фильм">Фильм</option>
</select><br>
<input type="submit" value="Добавить">
</form>
<h2>Заметки</h2>
<table border="1">
<tr>
<th>Название</th>
<th>Категория</th>
</tr>
<?php include 'display_notes.php'; ?>
</table>
<?php 
$host = "localhost";
$username = "root";
$password = "mysql";
$datebase = "rest";

$mysqli = new mysqli($host, $username, $password, $datebase);
if($mysqli->connect_error){
    die("Ошибка подключения:" . $mvsali->connect_error);
}
?>
</body>
</html>
