<?php
    include "connect.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM shopping_cart where idProduct=$id";
    
    $kq=mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_assoc($kq);
    if($kq->num_rows > 0){
        $sl=1+$row["sl"];
        $updateSL="UPDATE shopping_cart set sl=$sl where idProduct='$id'";
        $kqUpdateSL=mysqli_query($mysqli,$updateSL);
    }else{
        $insert="INSERT into shopping_cart (idProduct,sl,idUser) value($id,1,0)";
        $kqinsert=mysqli_query($mysqli,$insert);
    }
?>
