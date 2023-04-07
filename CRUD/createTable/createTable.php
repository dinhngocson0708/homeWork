<?php 
 $mysqli= mysqli_connect("localhost","root","","SANPHAM");
 $sql="CREATE TABLE danhmucsanpham(
        id int not null primary key auto_increment,
        namedanhmuc varchar(100) not null
 )";
 if($mysqli->query($sql)){
    echo "tạo bảng thành công";
 }else{
    echo "không thành công!";
 }
?>