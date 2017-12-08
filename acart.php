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
		<li><a href="sgk.php">Sách giáo khoa</a></li>
		<li><a href="snn.php">Sách ngoại ngữ</a></li>
		<li><a href="skn.php">Sách kĩ năng</a></li>
		<li><a href="td.php">Từ điển</a></li>

		
		</ul>	
</div>
<div class="content">
<br><br><br>
<?php

if($_GET['id']!= "")
{
	$id = $_GET['id'];
	$sql = "select books.id,tensach,tacgia.tenTG,nxb.tenNXB,gia,theloai.tentheloai,hinhanh from books,tacgia,theloai,nxb where id = '$id' and books.tacgia = tacgia.id_tacgia and books.theloai = theloai.id_theloai and books.nxb = nxb.id_nxb";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result = $mysqli->query($sql);
	echo "<table style='padding : 20px 150px'><tr><td>";
	if(!isset($_SESSION['cart']))
		$_SESSION['cart'] = array();
	if($result->num_rows >0)
		while($row = $result->fetch_assoc()) 
			{
				if(array_key_exists($id, $_SESSION['cart']))
				{
					echo "Giỏ hàng đã tồn tại sản phẩm này";
					
				}
				else
				{
					$_SESSION['cart'][$id]=$id;
					echo "Đã thêm ".$row['tensach']." vào giỏ hàng ";
				}

			}

	echo "</td></tr></table>";
}
else
	echo "Thêm thất bại !";
?>
</div>
		
</body>
</html>
