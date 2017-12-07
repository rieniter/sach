
<?php
include("include/include.php");

$idnxb = $_POST['idnxb'];
$tennxb = $_POST['tennxb'];
$diachinxb = $_POST['diachinxb'];
$sdtnxb = $_POST['sdtnxb'];

$sql = "insert into nxb values(N'$idnxb',N'$tennxb',N'$diachinxb','$sdttg')";
$sqlb = "select * from nxb where id_nxb = '$idnxb'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sqlb);



if(isset($_POST["submit"]) && $idnxb != "")
{
	if($result->num_rows >0)
	{
		echo "<br>Nhà xuất bản này đã tồn tại !!! Thông tin nhà xuất bản : <hr>";
		while($row = $result->fetch_assoc()) 
			{
				
				echo "ID : ".$row['id_nxb'];
				echo "<br>Tên nhà xuất bản : ".$row['tenNXB'];
				echo "<br>Địa chỉ nhà xuất bản : ".$row['diachi'];
				echo "<br>Số điện thoại : ".$row['sdt'];
			}
		echo "<a href='http://localhost/sach/admin/'>Trở về</a>";	
	}
	else 
	{
		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
				echo "<hr>Đã thêm ".$tennxb." vào Database ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a><br>";
			else
				echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a>";
			
		
	}
	
}
else
	echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a>";

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