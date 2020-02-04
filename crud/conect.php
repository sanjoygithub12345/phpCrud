<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$servername="localhost";
$username="root";
$password="";
$databasename="practice";
$Data=mysqli_connect($servername,$username,$password,$databasename);
if($Data){
	echo "conection ok";
}
?>
</body>
</html>