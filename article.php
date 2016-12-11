<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<script type="text/javascript" src="js/jquery-3.1.1.js">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">

<header>
<h2>Тут можна створювати статті</h2>
<div id="menu"><a href="index.php">Переглянути усі статті</a></div>
</header>

<div id="content">
<?php

$host="localhost";
$user="root";
$pass="1706"; 
$db_name="dz";
$link = mysqli_connect($host,$user,$pass,$db_name);

if (isset($_POST["name"])) {
    $sql = mysqli_query($link, "INSERT INTO `articles` (`name`, `article`) 
                        VALUES ('".$_POST['name']."','".$_POST['article']."')");
    
    if ($sql) {
        echo "<p>Дані успішно добавлені в таблицю.</p>";
    } else {
        echo "<p>Виникла помилка.</p>";
    }

}
?>

<form action="" method="post">
    <h4>Назва статті</h4>
    <input name="name" type="text" size="80">
    
    <h4>Текст статті</h4>
   <textarea name="article" cols="80" rows="10"></textarea>
  <input type="submit" value="Зберегти статтю">
</form>

</div>

<footer>
<div id="copyright">
<p>Усі права захищені. © 2016</p>
</div> 
</footer>
</div>
</body>

</html>
