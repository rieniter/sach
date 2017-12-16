<?php
include("include/include.php");

$tensacht = $_POST['tensacht'];
$tacgiat = $_POST['tacgiat'];
$theloait = $_POST['theloait'];


if($tacgiat == "" && $theloait == "")
{
	$sqlb = "select * from books where tensach like N'%$tensacht%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($tensacht == "" && $theloait == "")
{
	$sqlb = "select id,tensach,books.tacgia,nxb,gia,theloai,hinhanh from books,tacgia where books.tacgia = tacgia.id_tacgia and  tenTG like N'%$tacgiat%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($tensacht == "" && $tacgiat == "")
{
	$sqlb = "select id,tensach,tacgia,nxb,gia,books.theloai,hinhanh from books,theloai where theloai.id_theloai = books.theloai and tentheloai like N'%$theloait%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($theloait == "" && $tensacht != "" && $tacgiat != "")
{
	$sqlb = "select * from books where tensach like N'%$tensacht%' and tacgia like N'%$tacgiat%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($theloait != "" && $tensacht == "" && $tacgiat != "")
{
	$sqlb = "select id,tensach,books.tacgia,nxb,gia,books.theloai,hinhanh from books,tacgia,theloai where books.theloai = theloai.id_theloai and books.tacgia = tacgia.id_tacgia and tentheloai like N'%$theloait%' and tenTG like N'%$tacgiat%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if($theloait != "" && $tensacht != "" && $tacgiat == "")
{
	$sqlb = "select id,tensach,tacgia,nxb,gia,books.theloai,hinhanh from books,theloai where books.theloai = theloai.id_theloai and tentheloai like N'%$theloait%' and tensach like N'%$tensacht%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if($theloait != "" && $tensacht != "" && $tacgiat != "")
{
	$sqlb = "select id,tensach,books.tacgia,nxb,gia,books.theloai,hinhanh from books,tacgia,theloai where books.theloai = theloai.id_theloai and books.tacgia = tacgia.id_tacgia and tentheloai like N'%$theloait%' and tensach like N'%$tensacht%' and tenTG like N'%$tacgiat%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}

echo "<a href='http://localhost/sach/admin/'>Trở về</a><br>";
if(isset($_POST["submit"]))
{
	if($result->num_rows >0)
	{
		echo "Thông tin sách tìm được : <hr>";
		while($row = $result->fetch_assoc()) 
			{
				
				echo "ID : ".$row['id'];
				echo "<br>Tên sách : ".$row['tensach'];
				echo "<br>Tác giả : ".$row['tacgia'];
				echo "<br>Nhà xuất bản : ".$row['nxb'];
				echo "<br>Giá : ".$row['gia']." VNĐ";
				echo "<br>Thể loại : ".$row['theloai'];
				echo "<br>Hình ảnh : <img src='".$row['hinhanh']."' width ='300px' height ='300px'></img><hr>";
			}
		echo "<br><br><br><hr><a href='http://localhost/sach/admin/'>Trở về</a>";	
	}
	else
	{
	echo "<br><br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/'>Trở về</a>";
	}
	
}
else 
	echo "<br><br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/'>Trở về</a>";

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