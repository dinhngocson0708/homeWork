<?php 
include "connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE idProduct=$id;";

// 3. Thực thi câu lệnh DELETE
$result =$mysqli->query($sql);

// 4. Đóng kết nối
mysqli_close($mysqli);

// Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
header('location:Pageadmin.php');
?>