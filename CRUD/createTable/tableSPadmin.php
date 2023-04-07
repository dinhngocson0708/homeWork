<?php 
    include "connect.php";
    $sql="CREATE TABLE sanphamadmin(
        id int not null primary key auto_increment,
        namesapham varchar(100) not null,
        danhmucsanpham varchar(100) not null,
        giasanpham decimal(15,2) not null,
        images varchar(100) not null,
        motasanpham varchar(100) not null

    )";
    if($mysqli->query($sql)){
        echo "thành công";
    }else{
        echo "ko thành công";
    }
?>