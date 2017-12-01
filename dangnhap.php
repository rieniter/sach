
<?php
	include("admin/include/include.php");
	
	session_start();

	function postIndex($index, $value="")
	{
		if (!isset($_POST[$index]))	return $value;
		return trim($_POST[$index]);
	}
	$username 	= postIndex("username");
	$password	= postIndex("password");
	echo $username.'<br>';
	echo $password.'<br>';
	
	$sql = "select * from thanhvien where username ='".$username."' and password ='".$password."'";	
	$result = $mysqli->query($sql);

	if($result->num_rows >0)
	{
		$row2 = $result->fetch_assoc();
		$_SESSION['vaitro'] = $row2['vaitro'];
		$_SESSION['username'] = $username;
		header("location:index.php");
		exit;
	}
	else
		echo "error";
	


?>


