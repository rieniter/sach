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
	echo "<a href='cart.php'>Giỏ hàng</a>";
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
		<?php
		$menu = "select * from theloai";
		mysqli_query($mysqli,"SET character_set_results=utf8");
		$r = $mysqli->query($menu);
		
		if($r->num_rows >0)
			while($row = $r->fetch_assoc()) 
			{
				
				$itl = $row['id_theloai'];
				echo "<li>";
				echo "<a href ='menu.php?id=$itl'>".$row['tentheloai']."</a>";
				echo "</li>";
			}
	else echo "0 results";
		?>
	
		</ul>	
</div>
<div class="content">
<br><br><br>
<?php


	
	$sql = "select * from books";
	$result = $mysqli->query($sql);
	$c=0;
	echo "<table>";
	if($result->num_rows >0)
	{
		echo "<tr>";
		while($row = $result->fetch_assoc()) 
			{
				if($c <=5)
				{
				$i = $row['id'];
				echo "<td align='center'>";
				echo "<a href ='sach.php?id=$i&tl=".$row['theloai']."'><img src='admin/".$row['hinhanh']."' width='250px' height='250px'></a><br>".$row['gia']." VNĐ";
				echo "</td>";
				$c++;
				}
				else if($c >5)
				{
				$i = $row['id'];
				echo "</tr><tr>";
				echo "<td align='center'>";
				echo "<a href ='sach.php?id=$i&tl=".$row['theloai']."'><img src='admin/".$row['hinhanh']."' width='250px' height='250px'></a><br>".$row['gia']." VNĐ";
				echo "</td>";
				$c = 0;
				}
			}
	}
	else echo "0 results";

	echo "</tr></table>";
	
	
?>
</div>
		
</body>
</html>
