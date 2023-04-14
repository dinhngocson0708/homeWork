<?php
    include "connect.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM shopping_cart where idProduct=$id";
    
    $kq=mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_assoc($kq);
    if(mysqli_num_rows($kq) > 0){
        $sl=1+$row["sl"];
        $updateSL="UPDATE shopping_cart set sl=$sl where idProduct='$id'";
        $kqUpdateSL=mysqli_query($mysqli,$updateSL);
    }else{
        $insert="INSERT into shopping_cart (idProduct,idUser,sl) value($id,0,1)";
        $kqinsert=mysqli_query($mysqli,$insert);
    }
    header("location:showProduct.php")
?>
