<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        img{
            width: 300px;
            height:300px
        }
    </style>
</head>
<body>

        <?php 
        include "connect.php";
        $sql="SELECT * from product";
        $result=$mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <div class="row">
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="col-md-3">
                <div class="card">
                <img src="<?php echo $row['image'] ?>" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['nameProduct'] ?></h5>
                <p class="card-text"><?php echo $row['Mota'] ?></p>
                <p class="card-text"><?php echo $row['Price']?></p>
                <a href="detail.php?id=<?php echo $row['idProduct']?>">Chi tiết sản phẩm</a>
                <br>

                <span><a href="xulythemgiohang.php" class="btn btn-primary"><ion-icon name="cart-outline"></ion-icon</a></span>
                <span><a href="checkout.php" class="btn btn-primary">Mua ngay</a></span>
                </div></div></div>
        <?php     
            }
        ?>
            </div>
        <?php
        } else {
            echo 'Không có sản phẩm nào';
        }
        
        // Đóng kết nối
        mysqli_close($mysqli);
        
    ?>
    
    
</body>
</html>
