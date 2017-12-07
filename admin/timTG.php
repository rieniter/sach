<?php
include("include/include.php");


$tentgt = $_POST['tentgt'];



if(isset($_POST["submit"]) && $tentgt != "")
{
	$sqlb = "select * from tacgia where tenTG like N'%$tentgt%'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sqlb);
	if($result->num_rows >0)
	{
		echo "<br><br><a href='http://localhost/sach/admin/tacgia.php'>Trở về trang quản lý</a> <br><br><hr>Tìm kiếm thành công ";
		echo "<br>Thông tin tác giả tìm được : <hr>";
		
		while($row = $result->fetch_assoc()) 
			{
				
				echo "<hr>ID : ".$row['id_tacgia'];
				echo "<br>Tác giả : ".$row['tenTG'];

			}
		
	}
	else
		echo "<br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/'>Trở về</a>";
	
}else
{
	echo "<br><br><hr>Tìm kiếm thất bại <a href='http://localhost/sach/admin/'>Trở về</a>";
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