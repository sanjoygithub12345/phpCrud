<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include("conect.php");
$val=$_GET['id'];
$de="DELETE FROM `sanjoy` WHERE id=$val";
mysqli_query($Data,$de);
header("location:display.php");
?>
</body>
</html>