<?php
include("include/include.php");

$ids = $_POST['ids'];
$tensachs = $_POST['tensachs'];
$tacgias = $_POST['tacgias'];
$nxbs = $_POST['nxbs'];
$gias = $_POST['gias'];
$theloais = $_POST['theloais'];
$sb = $_POST['submit'];
$image = $_FILES['hinhs']['name'];

if(isset($_POST["submit"]) && $ids!= "")
{
	$tp = "image/".basename($image);
	if(move_uploaded_file($_FILES['hinhs']['tmp_name'],$tp))
	{
	$sql = "update books set tensach = N'$tensachs',tacgia = N'$tacgias',nxb = N'$nxbs', gia ='$gias', theloai=N'$theloais', hinhanh = '$tp' where id = '$ids'";
	}
	else 
	echo "<br><br><hr>Sửa thất bại ! <a href='http://localhost/sach/admin'>Trở về trang quản lý</a>";
	mysqli_query($mysqli,"SET character_set_results=utf8");

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