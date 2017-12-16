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


	$idtl = $_GET['id'];
	$sql = "select * from books where theloai='$idtl'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sql);
	echo "<table style='padding : 20px 150px'>";
	$t ="";
	$c=0;
	if($result->num_rows >0)
	{

			echo "<tr>";
				while($row = $result->fetch_assoc()) 
				{
					if($c <3)
					{
					$ids = $row['id'];
					echo "<td><a href ='sach.php?id=$ids&tl=$idtl'><img src='admin/".$row['hinhanh']."' width='400px' height='400px'></a></td>";
					$c++;
					}
					else if($c >=3)
					{
					echo "</tr><tr>";
					$ids = $row['id'];
					echo "<td><a href ='sach.php?id=$ids&tl=$idtl'><img src='admin/".$row['hinhanh']."' width='400px' height='400px'></a></td>";
					$c = 0;
					}
				}
			
	}
	echo "</table>";	

	
	
?>
</div>
		
</body>
</html>
