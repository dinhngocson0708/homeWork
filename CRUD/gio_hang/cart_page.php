<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title></title>
  </head>
  <body>
    <div class="container">
        <a href="showProduct.php">Trang chủ</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>THÔNG TIN GIỎ HÀNG
                    </h4>
                </div>
                
                <div class="card-body">
                
                    <table class="table table-bordered table-striped">
                        <?php
                            include "connect.php";
                            $sql="SELECT product.idProduct,nameProduct,Mota,Price,image,sl from product, shopping_cart where product.idProduct=shopping_cart.idProduct";
                            if($kq=$mysqli->query($sql)){
                        ?>
                        <thead>
                            <th>TÊN SP</th>
                            <th>MÔ TẢ</th>
                            <th>GIÁ</th>
                            <th>SỐ LƯỢNG</th>
                            <th>HÌNH ẢNH</th>
                            <th>TỔNG TIỀN</th>
                            <th>HÀNH ĐỘNG</th>
                        </thead>
                            
                        <tbody>
                            <?php while($row=$kq->fetch_array()){
                            ?>
                                <tr>

                                    <td><?php echo $row['nameProduct']?></td>
                                    <td><?php echo $row['Mota']?></td>
                                    <td><?php echo $row['Price']?></td>
                                    <td><input type="number" name="sl" value="<?php echo $row['sl'] ?>"></td>
                                     <select name="" id=""></select>
                                    <td><img src="<?php echo $row['image']?>" alt="" width=100px height=100px></td>
                                    <td>Tổng tiền:  <?php echo $row['sl']* $row['Price'] ?></td>
                                    <td>
                                                    <!-- Button XÓA -->
                                        <a href="deleteCart.php?id=<?php echo $row['idProduct']?>" class="btn btn-primary">
                                        <ion-icon name="trash-outline"></ion-icon>
                                        </a>

                        
                                        <!-- <a href="muahang.php?id=">MUA NGAY</a> -->
                                    </td>
                                    <?php $total_price += ($row["Price"]*$row["sl"]) ?>
                                </tr>
                    

                        </tbody>
                        <?php
                                }
                            ?>
                            <tr>
                            
                                <td>Tổng tất cả: <?php echo $total_price ?></td>
                            </tr>
                        <?php
                            }
                        
                            ?>
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>