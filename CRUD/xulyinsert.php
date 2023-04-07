<?php 
    include "connect.php";

    if(isset($_POST['submit'])){
        $nameSP=$mysqli->real_escape_string($_POST['productName']);
        $DanhMuc=$mysqli->real_escape_string($_POST['danhmuc']);
        $Gia=$mysqli->real_escape_string($_POST['price']);
        $soluong=$mysqli->real_escape_string($_POST['sl']);
        $anh=$mysqli->real_escape_string($_POST['img']);
        $mota=$mysqli->real_escape_string($_POST['mota']);
    };
    $sqlInsert="INSERT into sanphamadmin (namesapham,danhmucsanpham,giasanpham,soluong,images,motasanpham) 
    VALUES('$nameSP','$DanhMuc','$Gia','$soluong','$anh','$mota')
    ";
    mysqli_query($mysqli,$sqlInsert);
    mysqli_close($mysqli);
    header('location:adminpage.php')
?>