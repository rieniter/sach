<?php
session_start();
include("include/include.php");
if(isset($_POST['sb']))
{
$ids = $_POST['ids'];
//$_SESSION['idsua'] = $ids;
$sql111 = "select id,tensach,books.tacgia,tacgia.tenTG,books.nxb,nxb.tenNXB,gia,books.theloai,theloai.tentheloai from books,theloai,tacgia,nxb where id = '$ids' and books.theloai = theloai.id_theloai and books.tacgia = tacgia.id_tacgia and books.nxb = nxb.id_nxb";
//$sql112 = "select * from books where id = '$ids'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sql111);
	if($result->num_rows >0)
	{
	while($row = $result->fetch_assoc()) 
		{
			$_SESSION['idsua'] = $row['id'];
			$_SESSION['tensachsua'] = $row['tensach'];
			$_SESSION['idtacgiasua'] = $row['tacgia'];
			$_SESSION['tacgiasua'] = $row['tenTG'];
			$_SESSION['idnxbsua'] = $row['nxb'];
			$_SESSION['nxbsua'] = $row['tenNXB'];
			$_SESSION['giasua'] = $row['gia'];
			$_SESSION['idtheloaisua'] = $row['theloai'];
			$_SESSION['theloaisua'] = $row['tentheloai'];
		}
	}
	//else
	//	echo "<br><br><br><br>Không load được ";
	//echo "<br><br><br><br>id sua : ".$_SESSION['idsua'];
header('Location: index.php');
}
else
{
$ids = $_POST['ids'];	
$tensachs = $_POST['tensachs'];
$tacgias = $_POST['tacgias'];
$nxbs = $_POST['nxbs'];
$gias = $_POST['gias'];
$theloais = $_POST['theloais'];
$sb = $_POST['submit'];
$image = $_FILES['hinhs']['name'];
}

if(isset($_POST["submit"]) && $ids!= "")
{
	$tp = "image/".basename($image);
	if(move_uploaded_file($_FILES['hinhs']['tmp_name'],$tp))
	{
	$sql = "update books set tensach = N'$tensachs',tacgia = N'$tacgias',nxb = N'$nxbs', gia ='$gias', theloai=N'$theloais', hinhanh = '$tp' where id = '$ids'";
	mysqli_query($mysqli,"SET character_set_results=utf8");

		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
				echo "<br><br><hr>Đã sửa thông tin của sách có ID  : ".$ids."  ! <a href='http://localhost/sach/admin'>Trở về trang quản lý</a><br>";
			else
				echo "<br><br><hr>Sửa thất bại 1 ! <a href='http://localhost/sach/admin'>Trở về trang quản lý</a>";
	
	}
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