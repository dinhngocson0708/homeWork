<?php 
    $mysqli= mysqli_connect("localhost","root","","");
    $sql="CREATE DATABASE SANPHAM";
    if($mysqli->query($sql)){
        echo "Tạo database thành công!";
    }else{
        echo "Tạo chưa thành công##";
    }
?>