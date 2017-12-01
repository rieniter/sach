<?php
include("include/include.php");

$tensacht = $_POST['tensacht'];
$tacgiat = $_POST['tacgiat'];
$theloait = $_POST['theloait'];
$sb = $_POST['submit'];

if($tacgiat == "" && $theloait == "")
{
	$sqlb = "select * from books where tensach like '%$tensacht%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($tensacht == "" && $theloait == "")
{
	$sqlb = "select * from books where tacgia like '%$tacgiat%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($tensacht == "" && $tacgiat == "")
{
	$sqlb = "select * from books where theloai like '%$theloait%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($theloait == "" && $tensacht != "" && $tacgiat != "")
{
	$sqlb = "select * from books where tensach like '%$tensacht%' and tacgia like '%$tacgiat%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if ($theloait != "" && $tensacht == "" && $tacgiat != "")
{
	$sqlb = "select * from books where theloai like '%$theloait%' and tacgia like '%$tacgiat%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if($theloait != "" && $tensacht != "" && $tacgiat == "")
{
	$sqlb = "select * from books where theloai like '%$theloait%' and tensach like '%$tensacht%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
}else if($theloait != "" && $tensacht != "" && $tacgiat != "")
{
	$sqlb = "select * from books where theloai like '%$theloait%' and tensach like '%$tensacht%' and tacgia like '%$tacgiat%'";
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
				echo "<br>Hình ảnh : <img src='img/books/".$row['hinhanh']."' width ='300px' height ='300px'></img><hr>";
			}
		echo "<a href='http://localhost/sach/admin/'>Trở về</a>";	
	}
	else
	{
	echo "Tìm kiếm thất bại";
	}
	
}

?>