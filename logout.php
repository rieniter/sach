<?php
session_start();
session_destroy();

echo 'Bạn đã đăng xuất';
echo "<a href='http://localhost/sach/index.php'> Click để về lại trang chủ</a>";
?>