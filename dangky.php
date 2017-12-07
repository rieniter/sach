
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
	
	//echo $username." - ".$password." - ".$name;
	
	$sql = "insert into thanhvien values('$username','$password',0,'$name')";
	$sql1 = "select * from thanhvien where username ='$username'";
	$result = $mysqli->query($sql1);
	
	
	if($result->num_rows >0)
	{
		echo "<hr>Người dùng này đã tồn tại ! Đăng kí thất bại <br><a href = 'http://localhost/sach/dangky.html'> Quay lại trang đăng nhập </a> ";
	}
	else
	{
		$add = $mysqli->query($sql);
		echo "<hr>Đăng kí thành công ! Chào mừng thành viên : ".$name."<hr><a href = 'http://localhost/sach'> Trở về trang chủ </a>";

	}
		


	
	


?>


