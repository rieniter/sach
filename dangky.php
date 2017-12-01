
<?php
	include("admin/include/include.php");
	
	session_start();

	
	$username 	= $_POST['username'];
	$password	= $_POST['password'];
	$name = $_POST['name'];
	
	echo $username." - ".$password." - ".$name;
	
	$sql = "insert into thanhvien values('$username','$password',0,'$name')";	
	$result = $mysqli->query($sql);
	

	header("location:index.php");


	
	


?>


