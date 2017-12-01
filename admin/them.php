<?php
include("include/include.php");

$id = $_POST['id'];
$tensach = $_POST['tensach'];
$tacgia = $_POST['tacgia'];
$nxb = $_POST['nxb'];
$gia = $_POST['gia'];
$theloai = $_POST['theloai'];
$hinh = $_POST['hinh'];
$sb = $_POST['submit'];

$sql = "insert into books values(N'$id',N'$tensach',N'$tacgia',N'$nxb',N'$gia',N'$theloai',N'$hinh')";
$mysqli->query($sql);
$sqlb = "select * from books where id = '$id'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sqlb);

if(isset($_POST["submit"]))
{
	if($result->num_rows >0)
	{
		while($row = $result->fetch_assoc()) 
			{
				echo "Thông tin vừa thêm vào : <hr>";
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
	echo "Thêm thất bại";
	echo "<a href='http://localhost/sach/admin/'>Trở về</a>";
	}
	
}

?>