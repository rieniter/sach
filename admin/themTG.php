
<?php
include("include/include.php");

$idtg = $_POST['idtg'];
$tentg = $_POST['tentg'];
$sdttg = $_POST['sdttg'];

$sql = "insert into tacgia values(N'$idtg',N'$tentg','$sdttg')";
$sqlb = "select * from tacgia where idtg = '$idtg'";
mysqli_query($mysqli,"SET character_set_results=utf8");
$result = $mysqli->query($sqlb);



if(isset($_POST["submit"]) && $idtg != "")
{
	if($result->num_rows >0)
	{
		echo "<br>Tác giả này đã tồn tại !!! Thông tin tác giả : <hr>";
		while($row = $result->fetch_assoc()) 
			{
				
				echo "ID : ".$row['id_tacgia'];
				echo "<br>Tên tác giả : ".$row['tenTG'];
				echo "<br>Số điện thoại : ".$row['sdt'];
			}
		echo "<a href='http://localhost/sach/admin/'>Trở về</a>";	
	}
	else 
	{
		$mysqli->query($sql);
			if($mysqli->affected_rows > 0)
				echo "<hr>Đã thêm ".$tentg." vào Database ! <a href='http://localhost/sach/admin/tacgia.php'>Trở về trang quản lý</a><br>";
			else
				echo "<br><br><hr>Thêm thất bại ! <a href='http://localhost/sach/admin/tacgia.php'>Trở về trang quản lý</a>";
			
		
	}
	
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