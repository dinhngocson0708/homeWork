<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/header.css">
    <style>
        img{
            width: 250px;
            height:300px
        }
        .buttons{
            display:flex;
            text-align: center;
        }
        .muangay{
            position: relative;
            left: 150px;
            top: 8px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
        <?php
            if(!empty($_SESSION["shopping_cart"])){
             $cart_count = count(array_keys($_SESSION["shopping_cart"]));
        ?>
        <div class="cart_div">
         <a href="cartPage.php"><ion-icon name="cart-outline" style="color: brown;width: 90px;height: 90px;"></ion-icon ></a>
        <span><?php echo $cart_count; ?></span>
        </div>
            <?php
        }
        ?>   
        <?php 
        include "connect.php";
        $sql="SELECT * from product";
        $result=$mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        ?>
            <div class="row mt-5"> 
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
               
                    <div class="buttons">
                        <div><a href="xulycart.php?id=<?php echo $row['idProduct']?>" ><ion-icon name="cart-outline" style="font-size: 50px"></ion-icon</a></div>
                        
                        <div class="muangay"><a href="checkout.php" class="btn btn-primary">Mua ngay</a></div>
                    </div>
                
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
