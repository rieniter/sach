
<?php
session_start();
if (isset($_SESSION['username']) == false) 
{
	header('Location: http://localhost/sach/index.php');
}
else 
{
	if (isset($_SESSION['vaitro'])) {

		$vaitro = $_SESSION['vaitro'];

		if ($vaitro == '0') {

			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='http://localhost/sach/index.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}
}
?>