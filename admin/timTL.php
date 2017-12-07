<?php
include("include/include.php");


$tentlt = $_POST['tentlt'];



if(isset($_POST["submit"]) && $tentlt != "")
{
	$sqlb = "select * from theloai where tentheloai like N'%$tentlt%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
	if($result->num_rows >0)
	{
		echo "<br><br><br><a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a> <br><br><hr>Tìm kiếm thành công ";
		echo "<br><br>Thông tin thể loại tìm được : <hr>";
		
		while($row = $result->fetch_assoc()) 
			{
				
				echo "<hr>ID : ".$row['id_theloai'];
				echo "<br>Tên thể loại : ".$row['tentheloai'];

			}
		
	}
	else
		echo "<br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/theloai.php'>Trở về</a>";
	
}else
{
	echo "<br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/theloai.php'>Trở về</a>";
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