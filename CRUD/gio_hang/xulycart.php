<?php
    include "connect.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM shopping_cart where idProduct=$id";
    $kq=mysqli_query($mysqli,$sql)
    if($kq->num_rows > 0){
        
    }
    $sql="SELECT * from product where idProduct=$id";
    $kq=mysqli_query($mysqli,$sql);
    $row=mysqli_fetch_assoc($kq);
    if(empty($_SESSION['shopping_cart'])){
        $_SESSION['shopping_cart']=$cart_array;
        $message="<div class='box'>Sản phẩm đã được thêm thành công!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($id,$array_keys)) {
        $message = "<div class='box' style='color:red;'>Sản phẩm đã tồn tại trong giỏ hàng!</div>";	
        } else {
        $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cart_array);
        $message = "<div class='box'>Sản phẩm đã được thêm thành công!</div>";
        }

    }
?>
