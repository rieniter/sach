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
<th colspan="4">Tác giả</th>
</tr>
<tr>
<td>
<form action="themTG.php" method='POST'>
  <input type="input" name="idtg" placeholder="ID tác giả"  ><br>
  <input type="input" name="tentg" placeholder="Tên tác giả" required><br>
  <input type="input" name="sdttg" placeholder="Số điện thoại"  pattern = "[0-9]{10,}"><br>
  <input type='submit' name="submit" value="Thêm">
</form>
</td>
<td>
<form action="xoaTG.php" method='POST'>
<input type="input" name="idtgx" placeholder="ID tác giả" ><br>
<input type='submit' name="submit" value="Xóa">
</form>
</td>

<td>
<form action="suaTG.php" method='POST'>
Nhập ID của tác giả cần sửa :
  <input type="input" name="idtg" placeholder="ID tác giả"  ><br>
Thông tin cần thay đổi : <br>
  <input type="input" name="tentgs" placeholder="Tên tác giả" ><br>
  <input type="input" name="sdttgs" placeholder="Số điện thoại"  pattern = "[0-9]{10,}"><br>
  <input type='submit' name="submit" value="Sửa">
  </form>
</td>
<td>
<form action="timTG.php" method='POST'>
<input type="input" name="tentgt" placeholder="Tên tác giả" required><br>
<input type='submit' name="submit" value="Tìm"><br>
</form>
</td>
</tr>
<tr><td>Thêm tác giả</td>
<td>Xóa tác giả</td>
<td>Sửa tác giả</td>
<td>Tìm tác giả</td>
</tr>

</div>
</table>


</body>
</html>