<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8" />
<script type="text/javascript" src="js/jquery-3.1.1.js">
<script type="text/javascript" src="js/bootstrap.min.js"></script>    
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</script>
 

</head>
<body>
<div class="wrapper">
<header>
	<h2>Тут можна створювати статті</h2>
    <div id="menu"><a href="article.php">Додати нову статтю</a></div>
</header>
<div id="content">

<?php

$host="localhost";
$user="root";
$pass="1706"; 
$db_name="dz";
$link = mysqli_connect($host,$user,$pass,$db_name);
$db_table_to_show = 'articles';

$qr_result = mysqli_query($link, "select * from " . $db_table_to_show)
    or die(mysql_error());

for($j=1; $data = mysqli_fetch_array($qr_result); ++$j){ 
   
?>   
<script type="text/javascript">

$(document).ready(function(){
	var i = '<?php echo $j;?>';
	$("#link"+i+"").click(function(){
	$("#article"+i+"").toggle("slow");
		
		if($("#link"+i+"").text()=="Показати текст статті"){
			$("#link"+i+"").text("Приховати текст статті");
		}
		else{
			$("#link"+i+"").text("Показати текст статті");
		}
	});
});

</script>

<?php  
   
    echo '<h3>' . $data['name'] . '</h3>';
    echo '<div id="article' . $j . '" style="display:none;">' . $data['article'] . '</div>';
    echo '<p></p><a href="javascript:void(0);" id="link' . $j . '">Показати текст статті</a></p>';
}
?>
</div>
 
<footer>
<div id="copyright">
<p>Усі права захищені. © 2016</p>
</div> 
</footer> 
  
</body>

</html>
