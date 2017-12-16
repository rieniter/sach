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
if(isset($_SESSION['cart']))
{
if($_SESSION['cart']!= "")
{
	$ids = array();
	foreach($_SESSION['cart'] as $id=>$value)
		array_push($ids, $id);
	echo "<table style='padding : 20px 150px' border='1' bordercolor='green'><tr><th>Tên sách</th><th>Số lượng</th><th>Đơn giá</th>";
	foreach($ids as $id=>$value)
	{
		$sql = "select books.id,tensach,tacgia.tenTG,nxb.tenNXB,gia,theloai.tentheloai,hinhanh from books,tacgia,theloai,nxb where id ='$value' and books.tacgia = tacgia.id_tacgia and books.theloai = theloai.id_theloai and books.nxb = nxb.id_nxb";
		mysqli_query($mysqli,"SET character_set_results=utf8");
		$result = $mysqli->query($sql);
	if($result->num_rows >0)
		while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row['tensach']."</td><td><form action='check.php' method ='POST'><input type='text' name ='slg' value='1' size='1' pattern = '[1-9]' required ></td><td>".$row['gia']."</td>";

			}
	}
	

	echo "</tr></table><input type='submit' name='submit' value='Xác nhận'></form>";

}
}
else
	echo "???????????????";
?>
</div>
		
</body>
</html>
