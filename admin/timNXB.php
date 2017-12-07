<?php
include("include/include.php");


$tennxbt = $_POST['tennxbt'];



if(isset($_POST["submit"]) && $tennxbt != "")
{
	$sqlb = "select * from nxb where tenNXB like N'%$tennxbt%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
	if($result->num_rows >0)
	{
		echo "<br><br><br><a href='http://localhost/sach/admin/nxb.php'>Trở về trang quản lý</a> <br><br><hr>Tìm kiếm thành công ";
		echo "<br><br>Thông tin nhà xuất bản tìm được : <hr>";
		
		while($row = $result->fetch_assoc()) 
			{
				
				echo "<hr>ID : ".$row['id_nxb'];
				echo "<br>Tên nhà xuất bản : ".$row['tenNXB'];

			}
		
	}
	else
		echo "<br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/nxb.php'>Trở về</a>";
	
}else
{
	echo "<br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/nxb.php'>Trở về</a>";
}


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