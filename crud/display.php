<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include("conect.php");
?>

<table>
	<tr>
	<th>id</th>
	<th>username</th>
	<th>password</th>
	</tr>
<?php 
$fgr="SELECT * FROM sanjoy";
 $sd=mysqli_query($Data,$fgr);
 while($result=mysqli_fetch_assoc($sd)){
?>
<tr>
	<td><?php echo $result['id']; ?></td>
	<td><?php echo $result['username']; ?></td>
	<td><?php echo $result['password']; ?></td>
	<td>
		<button>
			<a href="update.php?id=<?php echo $result['id'] ?>">edite</a>
		</button>
	</td>
	<td>
		<button>
			<a href="delete.php?id=<?php echo $result['id'] ?>">delete</a>
		</button>
	</td>

</tr>
<?php }?>
</table>
</body>
</html>