<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $connect=mysqli_connect("localhost","root","","SANPHAM");
    if(isset($_SESSION['userid'])){
        echo '<a href="xulydathang.php?id='.$row['id'].'">Đến trang thanh toán</a>';
    }else{
        $id_sp=$_GET['id'];
        $sql="SELECT * FROM sanphamadmin where id=$id_sp ";
        $kq=$connect->query($sql);
        if(!$kq){
            echo "Lỗi";
        }else{
            while($row=mysqli_fetch_array($kq)){
                echo $row['id'];
                echo $row['namesapham'];
                echo $row['danhmucsanpham'];
                echo $row['giasanpham'];
           
                echo $row['images'] ;
                echo $row['soluong'];
                echo $row['motasanpham'];
              
            }
        } 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<a href="xulydathang.php?id='.$id_sp.'">Đến trang thanh toán</a>';
        echo '<a href="login.php"> Đăng nhập</a>';
    }
?>
   
        
</body>
</html>
