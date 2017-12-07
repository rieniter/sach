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

<?php include("per/per.php");
//echo "<a href='http://localhost/sach/'>Trở về trang chủ</a>";	
?>
<br><br>
<div class="container">
<table border="1" class="table-fill">
<tr>
<th colspan="4">Thể loại</th>
</tr>
<tr>
<td>
<form action="themTL.php" method='POST'>
  <input type="input" name="idtl" placeholder="ID thể loại"  ><br>
  <input type="input" name="tentl" placeholder="Tên thể loại" required><br>
  <input type='submit' name="submit" value="Thêm">
</form>
</td>
<td>
<form action="xoaTL.php" method='POST'>
<input type="input" name="idtlx" placeholder="ID thể loại">
<input type="submit" name="submit" value="Xóa">
</form>
</td>

<td>
<form action="suaTL.php" method='POST'>
Nhập ID của thể loại cần sửa :
  <input type="input" name="idtls" placeholder="ID thể loại"  ><br>
Thông tin cần thay đổi : <br>
  <input type="input" name="tentls" placeholder="Tên thể loại" required><br>
  <input type='submit' name="submit" value="Sửa">
  </form>
</td>
<td>
<form action="timTL.php" method='POST'>
<input type="input" name="tentlt" placeholder="Tên thể loại" required><br>
<input type='submit' name="submit" value="Tìm"><br>
</form>
</td>
</tr>
<tr><td>Thêm thể loại</td>
<td>Xóa thể loại</td>
<td>Sửa thể loại</td>
<td>Tìm thể loại</td>
</tr>

</div>
</table>


</body>
</html>