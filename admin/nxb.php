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
<th colspan="4">Quản lý nhà xuất bản</th>
</tr>
<tr>
<td>
<form action="themNXB.php" method='POST'>
  <input type="input" name="idnxb" placeholder="ID nhà xuất bản"  ><br>
  <input type="input" name="tennxb" placeholder="Tên nhà xuất bản" required><br>
  <input type="input" name="diachinxb" placeholder="Địa chỉ nhà xuất bản" required><br>
  <input type="input" name="sdtnxb" placeholder="Số điện thoại"  pattern = "[0-9]{10,}"><br>
  <input type='submit' name="submit" value="Thêm">
</form>
</td>
<td>
<form action="xoaNXB.php" method='POST'>
<input type="input" name="idxnxb" placeholder="ID nhà xuất bản" ><br>
<input type='submit' name="submit" value="Xóa">
</form>
</td>

<td>
<form action="suaNXB.php" method='POST'>
Nhập ID của nhà xuất bản cần sửa :
<input type="input" name="idsnxb" placeholder="ID nhà xuất bản"  ><br>
Thông tin cần thay đổi : <br>
  <input type="input" name="tennxbs" placeholder="Tên nhà xuất bản" ><br>
  <input type="input" name="diachinxbs" placeholder="Địa chỉ nhà xuất bản" ><br>
  <input type="input" name="sdtnxbs" placeholder="Số điện thoại"  pattern = "[0-9]{10,}"><br>
  <input type='submit' name="submit" value="Sửa">
  </form>
</td>
<td>
<form action="timNXB.php" method='POST'>
<input type="input" name="tennxbt" placeholder="Tên nhà xuất bản" required><br>
<input type='submit' name="submit" value="Tìm"><br>
</form>
</td>
</tr>
<tr><td>Thêm nhà xuất bản</td>
<td>Xóa nhà xuất bản</td>
<td>Sửa nhà xuất bản</td>
<td>Tìm nhà xuất bản</td>
</tr>

</div>
</table>


</body>
</html>