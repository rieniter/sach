<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>sách hot</title>
<link rel="stylesheet" href="css/styles.css">
<script type="text/javascript" src="script/new.js"></script>
</head>
<body onload="newjv()">
<?php
	 include("admin/include/include.php");
	 session_start();
?>

<div class="topmn">
<a href="dangky.html">Đăng kí</a>
<a href="dangnhap.html">Đăng nhập</a>
<a href="">Giỏ hàng</a>

<?php
if(isset($_SESSION['username']))
{
	echo "<a href='admin/index.php'>".$_SESSION['username']."</a>";
	echo "<a href='logout.php'>Thoát</a>";
}
?>

</div>
	<div class ="leftmn">
		<ul>
		<li><a href="#home">Trang chủ</a></li>
		<li><a href="#news">Thông tin</a></li>
		<li><a href="#contact">Giới thiệu</a></li>
		<li><a href="#about">Địa chỉ</a></li>
		</ul>
	</div>
	
	<div class="bgimg">
		<img class="imgs" src="img\books\tieu thuyet\tiki-summer-sale-1.jpg" style ="width:100%; height:300px"></img>
		<img class="imgs" src="img\books\tieu thuyet\2017-09-13_103955.jpg" style ="width:100%; height:300px"></img>
		<img class="imgs" src="img\books\tieu thuyet\104203_34a202a9525e30d1d5ebf7bded919a8c(1).jpg" style ="width:100%; height:300px"></img>
	</div>
	
<div class="mainmnb">
		<ul class="ulmainmnb">
		<li><a href="#home">Tiểu thuyết</a></li>
		<li><a href="#news">Sách giáo khoa</a></li>
		<li><a href="#contact">Sách tham khảo</a></li>
		<li><a href="#about">Sách ngoại ngữ</a></li>
		<li><a href="#about">Sách văn học</a></li>
		<li><a href="#about">Sách tôn giáo</a></li>
		<li><a href="#about">Sách lịch sử</a></li>
		<li class="s"><form><input type="text" name="ts" size = 60 placeholder="Tên sách"></input></li>
		<li class="ss"><input type="submit" value="ok"></input></form></li>
		
		</ul>	
</div>
<div class="content">
<br><br><br>
<?php


	
	$sql = "select * from books";
	$result = $mysqli->query($sql);
	echo "<table><tr>";
	if($result->num_rows >0)
		while($row = $result->fetch_assoc()) 
			{
				echo "<td>";
				echo "<a href =''><img src='img/books/".$row['hinhanh']."' width='250px' height='250px'></a>";
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

<?php
/*if ($sm !="")
{

	
		echo "<script>
		alert('Đăng kí thành công');
		</script>";
		
	//	header("location:index.php");
	//	exit;

		echo "<script>
		alert('Thất bại');
		</script>";
}*/
?>