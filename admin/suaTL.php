<?php
include("include/include.php");

$idtls = $_POST['idtls'];
$tentls = $_POST['tentls'];


$sql = "update theloai set tentheloai = '$tentls' where id_theloai = '$idtls'";

mysqli_query($mysqli,"SET character_set_results=utf8");

if(isset($_POST["submit"]) && $idtls!= "")
{
		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
				echo "<br><br><hr>Đã sửa thông tin của thể loại có ID  : ".$idtls."  ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a><br>";
			else
				echo "<br><br><hr>Sửa thất bại ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a>";
	
}
else
	echo "<br><br><hr>Sửa thất bại ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a>";
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