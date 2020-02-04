<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<label>username</label>
		<input type="text" name="username" placeholder="username"><br><br>
		<label>password</label>
		<input type="password" name="password" placeholder="password"><br><br>
		<input type="submit" name="submit">
	</form>
<?php
include("conect.php");

if(isset($_POST['submit'])){
$user=$_POST['username'];
$pass=$_POST['password'];

$ans="INSERT INTO `sanjoy`(username,password) VALUES ('$user','$pass')";
$ans=mysqli_query($Data,$ans);

if($ans){
	echo "data inserted";
}
else{
	echo "data not inserted";
}

}
 ?>
</body>
</html>