<?php
include("include/include.php");

$idsnxb = $_POST['idsnxb'];
$tennxbs = $_POST['tennxbs'];
$diachinxbs = $_POST['diachinxbs'];
$sdtnxbs = $_POST['sdtnxbs'];


$sql = "update nxb set tenNXB = '$tennxbs', diachi = '$diachinxbs', sdt ='$sdtnxbs' where id_nxb = '$idsnxb'";

mysqli_query($mysqli,"SET character_set_results=utf8");

if(isset($_POST["submit"]) && $idsnxb!= "")
{
		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
				echo "<br><br><hr>Đã sửa thông tin của nhà xuất bản có ID  : ".$idsnxb."  ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a><br>";
			else
				echo "<br><br><hr>Sửa thất bại ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a>";
	
}
else
	echo "<br><br><hr>Sửa thất bại ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a>";
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