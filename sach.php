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


	$id = $_GET['id'];
	$sql = "select books.id,tensach,tacgia.tenTG,nxb.tenNXB,gia,theloai.tentheloai,hinhanh from books,tacgia,theloai,nxb where id = '$id' and books.tacgia = tacgia.id_tacgia and books.theloai = theloai.id_theloai and books.nxb = nxb.id_nxb";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sql);
	echo "<table style='padding : 20px 150px'><tr>";
	
	if($result->num_rows >0)
		while($row = $result->fetch_assoc()) 
			{
				
				echo "<td>";
				echo "<a href =''><img src='admin/".$row['hinhanh']."' width='500px' height='500px'></a>";
				echo "</td><td><table><tr><tH><strong style='font-size: 40px;'>".$row['tensach']."</strong></th></tr><tr><td><hr><strong style='font-size: 25px;'>Tác giả : ".$row['tenTG']."<br>Nhà xuất bản : ".$row['tenNXB']."<br>Thể loại : ".$row['tentheloai']."<br>Giá : ".$row['gia']." VNĐ</strong><br><hr><a href='acart.php?id=$id'>Thêm</a></td></tr></table></td>";

			}
			
	echo "</tr></table>";	

	echo "<table style='padding : 20px 150px'><tr>";
	$c=0;
	$sql1 = "select books.id,tensach,tacgia.tenTG,nxb.tenNXB,gia,theloai.tentheloai,hinhanh from books,tacgia,theloai,nxb where id != '$id' and books.tacgia = tacgia.id_tacgia and books.theloai = theloai.id_theloai and books.nxb = nxb.id_nxb and theloai = '".$_GET['tl']."'";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result1 = $mysqli->query($sql1);
	if($result1->num_rows >0)
	{
		echo "<tr>";
		while($row = $result1->fetch_assoc()) 
			{
				if($c <2)
				{
				echo "<td>";
				echo "<a href ='sach.php?id=".$row['id']."&tl=".$_GET['tl']."'><img src='admin/".$row['hinhanh']."' width='250px' height='250px'></a>";
				echo "</td><td><table><tr><tH><strong style='font-size: 40px;'>".$row['tensach']."</strong></th></tr><tr><td><hr><strong style='font-size: 25px;'>Tác giả : ".$row['tenTG']."<br>Nhà xuất bản : ".$row['tenNXB']."<br>Thể loại : ".$row['tentheloai']."<br>Giá : ".$row['gia']." VNĐ</strong><br><hr></td></tr></table></td>";
				echo "/<td>";
				$c++;
				}
				else if($c >=2)
				{
				echo "</tr><tr>";
				echo "<td>";
				echo "<a href ='sach.php?id=".$row['id']."&tl=".$_GET['tl']."'><img src='admin/".$row['hinhanh']."' width='250px' height='250px'></a>";
				echo "</td><td><table><tr><tH><strong style='font-size: 40px;'>".$row['tensach']."</strong></th></tr><tr><td><hr><strong style='font-size: 25px;'>Tác giả : ".$row['tenTG']."<br>Nhà xuất bản : ".$row['tenNXB']."<br>Thể loại : ".$row['tentheloai']."<br>Giá : ".$row['gia']." VNĐ</strong><br><hr></td></tr></table></td>";
				echo "/<td>";
				$c=0;
				}

			}
	}
	echo "</tr></table>";	
	
?>
</div>
		
</body>
</html>
