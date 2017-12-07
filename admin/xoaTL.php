<?php
include("include/include.php");

$idtlx = $_POST['idtlx'];


mysqli_query($mysqli,"SET character_set_results=utf8");

$sql = "delete from theloai where id_theloai ='$idtlx'";


if(isset($_POST["submit"]) && $idtlx!= "")
{
	$mysqli->query($sql);
	if($mysqli->affected_rows > 0)
	{
		echo "<br><br><br>";
			echo "<br><br><hr>Đã xóa ".$idtlx." khỏi Database ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a><br>";
	}
	else
	{
	
		echo "<br><br><hr>Xóa thất bại ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a>";
	}
	
}
else
	echo "<br><br><hr>Xóa thất bại ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a>";
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