
<?php
include("include/include.php");

$id = $_POST['id'];
$tensach = $_POST['tensach'];
$tacgia = $_POST['tacgia'];
$nxb = $_POST['nxb'];
$gia = $_POST['gia'];
$theloai = $_POST['theloai'];
$sb = $_POST['submit'];
$image = $_FILES['hinh']['name'];



$sqlb = "select * from books where id = '$id'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sqlb);



if(isset($_POST["submit"]) && $id!= "")
{

	if($result->num_rows >0)
	{
		echo "<br><br>Sách có ID này đã tồn tại !!! Thông tin sách : <hr>";
		while($row = $result->fetch_assoc()) 
			{
				
				echo "ID : ".$row['id'];
				echo "<br>Tên sách : ".$row['tensach'];
				echo "<br>Tác giả : ".$row['tacgia'];
				echo "<br>Nhà xuất bản : ".$row['nxb'];
				echo "<br>Giá : ".$row['gia']." VNĐ";
				echo "<br>Thể loại : ".$row['theloai'];
				echo "<br>Hình ảnh : <img src='$tp'></img>";

			}
		echo "<a href='http://localhost/sach/admin/'>Trở về</a>";	
	}
	else 
	{
	$tp = "image/".basename($image);
	if(move_uploaded_file($_FILES['hinh']['tmp_name'],$tp))
	{
		$sql = "insert into books values(N'$id',N'$tensach',N'$tacgia',N'$nxb',N'$gia',N'$theloai',N'$tp')";
		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
			{
				echo "<br><br><hr>Đã thêm ".$tensach." vào Database !<br> <a href='http://localhost/sach/admin'>Trở về trang quản lý</a><br>";
				
			}
			else
				echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin/'>Trở về trang quản lý</a>";
			
	}
	else echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin/'>Trở về trang quản lý</a>";
		
	}

}
else
	echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin'>Trở về trang quản lý</a>";

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