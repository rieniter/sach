<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="topmn">
<a href='http://localhost/sach/'>Trở về trang chủ</a>
</div>

<?php include("per/per.php");
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


<form action="them.php" method='POST'>
  <input type="input" name="id" placeholder="ID"  ><br>
  <input type="input" name="tensach" placeholder="Tên sách" required><br>
  <input type="input" name="tacgia" placeholder="Tác giả" required><br>
  <input type="input" name="nxb" placeholder="NXB" required><br>
  <input type="number" name="gia" placeholder="Gíá"  ><br>
  <input type="input" name="theloai" placeholder="Thể loại" required><br>
  <input type="file" name="hinh"><br>
  <input type='submit' name="submit" value="Thêm">
</form>
</td>
<td>
<form action="xoa.php" method='POST'>
<input type="input" name="idx" placeholder="ID" ><br>
<input type='submit' name="submit" value="Xóa">
</form>
</td>

<td>
<form action="sua.php" method='POST'>
Nhập ID của sách cần sửa :
<input type="input" name="ids" placeholder="ID"  ><br>
Thông tin cần thay đổi : <br>
  <input type="input" name="tensachs" placeholder="Tên sách" required><br>
  <input type="input" name="tacgias" placeholder="Tác giả" required><br>
  <input type="input" name="nxbs" placeholder="NXB" required><br>
  <input type="number" name="gias" placeholder="Gíá"  ><br>
  <input type="input" name="theloais" placeholder="Thể loại" required><br>
  <input type="file" name="hinhs"><br>
  <input type='submit' name="submit" value="Sửa">
  </form>
</td>
<td>
<form action="tim.php" method='POST'>
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