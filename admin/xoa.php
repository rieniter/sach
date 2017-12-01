<?php
include("include/include.php");

$idx = $_POST['idx'];



$sqlb = "select * from books where id = '$idx'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sqlb);
$sql = "delete from books where id ='$idx'";
$mysqli->query($sql);

if(isset($_POST["submit"]))
{
	if($result->num_rows >0)
	{
		while($row = $result->fetch_assoc()) 
			{
				echo "Thông tin vừa xóa đi : <hr>";
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