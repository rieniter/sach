
<?php
include("include/include.php");

$idtl = $_POST['idtl'];
$tentl = $_POST['tentl'];

$sql = "insert into theloai values(N'$idtl',N'$tentl')";
$sqlb = "select * from theloai where idtl = '$idtl'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sqlb);



if(isset($_POST["submit"]) && $idtl != "")
{
	if($result->num_rows >0)
	{
		echo "<br>Thể loại này đã tồn tại !!! Thông tin thể loại : <hr>";
		while($row = $result->fetch_assoc()) 
			{
				
				echo "ID : ".$row['idtl'];
				echo "<br>Tên thể loại : ".$row['tentl'];
			}
		echo "<a href='http://localhost/sach/admin/'>Trở về</a>";	
	}
	else 
	{
		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
				echo "<hr>Đã thêm ".$tentl." vào Database ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a><br>";
			else
				echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a>";
			
		
	}
	
}
else
	echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin/theloai.php'>Trở về trang quản lý</a>";

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