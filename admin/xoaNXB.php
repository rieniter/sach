<?php
include("include/include.php");

$idxnxb = $_POST['idxnxb'];


mysqli_query($mysqli,"SET character_set_results=utf8");

$sql = "delete from nxb where id_nxb ='$idxnxb'";


if(isset($_POST["submit"]) && $idxnxb!= "")
{
	$mysqli->query($sql);
	if($mysqli->affected_rows > 0)
	{
		echo "<br><br><br>";
			echo "<br><br><hr>Đã xóa ".$idxnxb." khỏi Database ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a><br>";
	}
	else
	{
	
		echo "<br><br><hr>Xóa thất bại ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a>";
	}
	
}
else
	echo "<br><br><hr>Xóa thất bại ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a>";

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/styles.css">
</head>
<body text = "white">
<div class="topmn">
<a href='http://localhost/sach/'>Trở về trang chủ</a>
</div>
<br><br><br>
</body>
</html>