<?php
include("include/include.php");

$ids = $_POST['ids'];
$tensachs = $_POST['tensachs'];
$tacgias = $_POST['tacgias'];
$nxbs = $_POST['nxbs'];
$gias = $_POST['gias'];
$theloais = $_POST['theloais'];
$hinhs = $_POST['hinhs'];
$sb = $_POST['submit'];

$sql = "update books set tensach = N'$tensachs',tacgia = N'$tacgias',nxb = N'$nxbs', gia ='$gias', theloai=N'$theloais', hinhanh = '$hinhs' where id = '$ids'";

mysqli_query($mysqli,"SET character_set_results=utf8");

if(isset($_POST["submit"]) && $ids!= "")
{
		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
				echo "<br><br><hr>Đã sửa thông tin của sách có ID  : ".$ids."  ! <a href='http://localhost/sach/admin'>Trở về trang quản lý</a><br>";
			else
				echo "<br><br><hr>Sửa thất bại ! <a href='http://localhost/sach/admin'>Trở về trang quản lý</a>";
	
}
else
	echo "<br><br><hr>Sửa thất bại ! <a href='http://localhost/sach/admin'>Trở về trang quản lý</a>";
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