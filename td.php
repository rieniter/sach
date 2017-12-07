<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Cửa hàng sách</title>
<link rel="stylesheet" href="css/styles.css">
<script type="text/javascript" src="script/new.js"></script>
</head>
<body onload="newjv()">
<?php
	 include("admin/include/include.php");
	 session_start();
?>

<div class="topmn">


<?php
if(isset($_SESSION['username']))
{
	echo "<a href='admin/index.php'>".$_SESSION['username']."</a>";
	echo "<a href='logout.php'>Thoát</a>";
	echo "<a href=''>Giỏ hàng</a>";
}
else
{
	echo "<a href='dangky.html'>Đăng kí</a>";
	echo "<a href='dangnhap.html'>Đăng nhập</a>";
}
?>

</div>
	<div class ="leftmn">
		<ul>
		<li><a href="http://localhost/sach">Trang chủ</a></li>
		<li><a href="http://localhost/sach">Thông tin</a></li>
		<li><a href="http://localhost/sach">Giới thiệu</a></li>
		<li><a href="http://localhost/sach">Địa chỉ</a></li>
		</ul>
	</div>
	
	<div class="bgimg">
		<img class="imgs" src="admin\img\books\book1.jpg" style ="width:100%; height:300px"></img>
		<img class="imgs" src="admin\img\books\book2.jpg" style ="width:100%; height:300px"></img>
		<img class="imgs" src="admin\img\books\book3.jpg" style ="width:100%; height:300px"></img>
	</div>
	
<div class="mainmnb">
		<ul class="ulmainmnb">
		<li><a href="sgk.php">Sách giáo khoa</a></li>
		<li><a href="snn.php">Sách ngoại ngữ</a></li>
		<li><a href="skn.php">Sách kĩ năng</a></li>
		<li><a href="td.php">Từ điển</a></li>

		
		</ul>	
</div>
<div class="content">
<br><br><br>
<?php


	
	$sql = "select * from books where theloai = 'TL2'";
	$result = $mysqli->query($sql);
	echo "<table><tr>";
	if($result->num_rows >0)
		while($row = $result->fetch_assoc()) 
			{
				$i = $row['id'];
				echo "<td>";
				echo "<a href ='sach.php?id=$i'><img src='admin/img/books/".$row['hinhanh']."' width='250px' height='250px'></a>";
				echo "</td>";
			}
	else echo "0 results";
	$result->free();
	$result = $mysqli->query($sql);
	echo "</tr><tr>";
	
	if($result->num_rows >0)
		while($row1 = $result->fetch_assoc()) 
			{
				echo "<td align='center'>";
				echo $row1['gia']." VNĐ";
				echo "</td>";
			}
	else echo "0 results";
	$result->free();
	echo "</tr></table>";
	
	
?>
</div>
		
</body>
</html>
