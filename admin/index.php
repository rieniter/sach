<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="topmn">
<a href='http://localhost/sach/'>Trở về trang chủ</a>
<a href='index.php'>Sách</a>
<a href='tacgia.php'>Tác giả</a>
<a href='nxb.php'>Nhà xuất bản</a>
<a href='theloai.php'>Thể loại</a>
</div>

<?php session_start();
include("per/per.php");
include("include/include.php");
//echo "<a href='http://localhost/sach/'>Trở về trang chủ</a>";	
?>
<br><br>
<div class="container">
<table border="1" class="table-fill">
<tr>
<th colspan="4">Quản lý sách</th>
</tr>
<tr>
<td>
<form action="them.php" method='POST' enctype= "multipart/form-data">
  <input type="input" name="id" placeholder="ID"  ><br>
  <input type="input" name="tensach" placeholder="Tên sách" required><br>
  
  
  <select name="tacgia">
  <?php 
  //<input type="input" name="tacgia" placeholder="Tác giả" required><br>
  $sql = "select * from tacgia";
  mysqli_query($mysqli,"SET character_set_results=utf8");
  $result = $mysqli->query($sql);
  if($result->num_rows >0)
		while($row = $result->fetch_assoc()) 
		{
			echo "<option value='".$row['id_tacgia']."'>".$row['tenTG']."</option>";
			
		}
		
	echo "</select><br><select name='nxb'>";
	
	$sql1 = "select * from nxb";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result1 = $mysqli->query($sql1);
	if($result1->num_rows >0)
		while($row1 = $result1->fetch_assoc()) 
		{
			echo "<option value='".$row1['id_nxb']."'>".$row1['tenNXB']."</option>";
		}	
	echo "</select><br>";
		
  ?>

</select>
  <input type="number" name="gia" placeholder="Gíá"  ><br>
  <?php 
  echo "<select name='theloai'>";
  $sql2 = "select * from theloai";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result2 = $mysqli->query($sql2);
	if($result2->num_rows >0)
		while($row2 = $result2->fetch_assoc()) 
		{
			echo "<option value='".$row2['id_theloai']."'>".$row2['tentheloai']."</option>";
		}	
	echo "</select><br>";
  ?>
  <input type="file" name="hinh" ><br>
  <input type='submit' name="submit" value="Thêm">
</form>
</td>
<td>
<form action="xoa.php" method='POST' enctype= "multipart/form-data">
 <?php 
  echo "<select name='idx'>";
  $sql3 = "select * from books";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result3 = $mysqli->query($sql3);
	if($result3->num_rows >0)
		while($row3 = $result3->fetch_assoc()) 
		{
			echo "<option value='".$row3['id']."'>".$row3['tensach']."</option>";
		}	
	echo "</select><br>";
  ?>
<input type='submit' name="submit" value="Xóa">
</form>
</td>

<td>


<form action="sua.php" method='POST' enctype= "multipart/form-data">
Select book :

 <?php 
	if(isset($_SESSION['idsua']) && $_SESSION['idsua'] != "")
	{
		echo "<select name='ids'>";
  $sql3 = "select * from books";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result3 = $mysqli->query($sql3);
	if($result3->num_rows >0)
		while($row3 = $result3->fetch_assoc()) 
		{
			if($row3['id'] == $_SESSION['idsua'])
			echo "<option value='".$row3['id']."' selected>".$row3['tensach']."</option>";
			else
			echo "<option value='".$row3['id']."' >".$row3['tensach']."</option>";

		}	
	echo "</select><br>";
	}
	else
	{
		
  echo "<select name='ids'>";
  $sql3 = "select * from books";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result3 = $mysqli->query($sql3);
	if($result3->num_rows >0)
		while($row3 = $result3->fetch_assoc()) 
		{
			echo "<option value='".$row3['id']."'>".$row3['tensach']."</option>";

		}	
	echo "</select><br>";
	}
  ?>
  <input type='submit' name="sb" value="Load">

Thông tin cần thay đổi : <br>
<?php 
if(isset($_SESSION['idsua']) && $_SESSION['idsua'] != "")
	{
		echo "<input type ='text' name ='tensachs' value='".$_SESSION['tensachsua']."'>";
	}
	else
		echo "<input type='input' name='tensachs' placeholder='Tên sách'><br>";

?>
  
 
<?php 
	if(isset($_SESSION['idsua']) && $_SESSION['idsua'] != "")
	{
		echo "<select name='tacgias'>";
  $sql3 = "select * from tacgia";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result3 = $mysqli->query($sql3);
	if($result3->num_rows >0)
		while($row3 = $result3->fetch_assoc()) 
		{
			if($row3['id_tacgia'] == $_SESSION['idtacgiasua'])
			echo "<option value='".$row3['id_tacgia']."' selected>".$row3['tenTG']."</option>";
			else
			echo "<option value='".$row3['id_tacgia']."' >".$row3['tenTG']."</option>";

		}	
	echo "</select><br>";
	}
	else
	{
		echo "<select name='tacgias'>"; // select
 $sql = "select * from tacgia";
  mysqli_query($mysqli,"SET character_set_results=utf8");
  $result = $mysqli->query($sql);
  if($result->num_rows >0)
		while($row = $result->fetch_assoc()) 
		{
			echo "<option value='".$row['id_tacgia']."'>".$row['tenTG']."</option>";
		}
		
	echo "</select>";				// end select
	}
	if(isset($_SESSION['idsua']) && $_SESSION['idsua'] != "")
	{
		echo "<select name='nxbs'>";
  $sql3 = "select * from nxb";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result3 = $mysqli->query($sql3);
	if($result3->num_rows >0)
		while($row3 = $result3->fetch_assoc()) 
		{
			if($row3['id_nxb'] == $_SESSION['idnxbsua'])
			echo "<option value='".$row3['id_nxb']."' selected>".$row3['tenNXB']."</option>";
			else
			echo "<option value='".$row3['id_nxb']."' >".$row3['tenNXB']."</option>";

		}	
	echo "</select><br>";
	}
	else
	{
	echo "<br><select name='nxbs'>";
	$sql1 = "select * from nxb";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result1 = $mysqli->query($sql1);
	if($result1->num_rows >0)
		while($row1 = $result1->fetch_assoc()) 
		{
			echo "<option value='".$row1['id_nxb']."'>".$row1['tenNXB']."</option>";
		}	
	echo "</select><br>";
	}
	

?>
<?php
	if(isset($_SESSION['idsua']) && $_SESSION['idsua'] != "")
		echo "<input type ='text' name ='gias' value='".$_SESSION['giasua']."'>";
	else
  echo "<input type='number' name='gias' placeholder='Gíá'  ><br>";
  ?>
   <?php 
   if(isset($_SESSION['idsua']) && $_SESSION['idsua'] != "")
	{
		echo "<select name='theloais'>";
  $sql3 = "select * from theloai";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result3 = $mysqli->query($sql3);
	if($result3->num_rows >0)
		while($row3 = $result3->fetch_assoc()) 
		{
			if($row3['id_theloai'] == $_SESSION['idtheloaisua'])
			echo "<option value='".$row3['id_theloai']."' selected>".$row3['tentheloai']."</option>";
			else
			echo "<option value='".$row3['id_theloai']."' >".$row3['tentheloai']."</option>";

		}	
	echo "</select><br>";
	}
	else
	{
   
  echo "<select name='theloais'>";
  $sql2 = "select * from theloai";
	mysqli_query($mysqli,"SET character_set_results=utf8");
	$result2 = $mysqli->query($sql2);
	if($result2->num_rows >0)
		while($row2 = $result2->fetch_assoc()) 
		{
			echo "<option value='".$row2['id_theloai']."'>".$row2['tentheloai']."</option>";
		}	
	echo "</select><br>";
	}
  ?>
  <input type="file" name="hinhs"><br>
  <input type='submit' name="submit" value="Sửa">
  </form>
</td>
<td>
<form action="tim.php" method='POST' enctype= "multipart/form-data">
<input type="input" name="tensacht" placeholder="Tên sách" ><br>
  <input type="input" name="tacgiat" placeholder="Tác giả" ><br>
  <input type="input" name="theloait" placeholder="Thể loại" ><br>
<input type='submit' name="submit" value="Tìm"><br>
</form>
</td>
</tr>
<tr><td>Thêm sách</td>
<td>Xóa sách</td>
<td>Sửa sách</td>
<td>Tìm kiếm sách</td>
</tr>

</div>
</table>


</body>
</html>