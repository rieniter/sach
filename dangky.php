
<?php
	include("admin/include/include.php");
	
	session_start();

	if(empty($_POST['username']))

    {

        $this->HandleError("UserName is empty!");

        return false;

    }

     

    if(empty($_POST['password']))

    {

        $this->HandleError("Password is empty!");

        return false;

    }

	
	$username 	= $_POST['username'];
	$password	= $_POST['password'];
	$name = $_POST['name'];
	
	echo $username." - ".$password." - ".$name;
	
	$sql = "insert into thanhvien values('$username','$password',0,'$name')";	
	$result = $mysqli->query($sql);
	

	header("location:index.php");


	
	


?>


