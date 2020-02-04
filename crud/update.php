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
	$dfe=$_GET['id'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$up="UPDATE `sanjoy` SET`username`='$user',`password`='$pass' WHERE id=$dfe";
	$fgt=mysqli_query($Data,$up);
	if($fgt){
		echo "data updated";
	}
	else{
		echo "data not updated";
	}
}

?>
</body>
</html>