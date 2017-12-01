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

$sql = "update books set tensach = '$tensachs', tacgia = '$tacgias', nxb ='$nxbs', gia = '$gias', theloai = '$theloais', hinhanh = '$hinhs' where id = '$ids'";
mysqli_query($mysqli,$sql);
$sqlb = "select * from books where id = '$ids'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sqlb);

if(isset($_POST["submit"]))
{
	if($result->num_rows >0)
	{
		while($row = $result->fetch_assoc()) 
			{
				echo "Thông tin vừa được sửa : <hr>";
				echo "ID : ".$row['id'];
				echo "<br>Tên sách : ".$row['tensach'];
				echo "<br>Tác giả : ".$row['tacgia'];
				echo "<br>Nhà xuất bản : ".$row['nxb'];
				echo "<br>Giá : ".$row['gia']." VNĐ";
				echo "<br>Thể loại : ".$row['theloai'];
				echo "<br>Hình ảnh : <img src='img/books/".$row['hinhanh']."'></img>";
			}
		echo "<a href='http://localhost/sach/admin/'>Trở về</a>";	
	}
	else
	{
	echo "Sửa thất bại";
	echo "<a href='http://localhost/sach/admin/'>Trở về</a>";
	}
	
}

?>