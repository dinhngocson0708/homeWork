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
                        $sql="SELECT * 
                        FROM shopping_cart";
                        if($kq=$mysqli->query($sql)){
                        ?>
                        <thead>
                            <th>ID Sản PHẨM</th>
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
                                    <td><?php echo $row['idProduct']?></td>
                                    <td><?php echo $row['idDanhmuc']?></td>
                                    <td><?php echo $row['nameProduct']?></td>
                                    
                                    <td><?php echo $row['Price']?></td>
                                    <td><?php echo $row['Mota']?></td>
                                    <td><?php echo $row['soluong'] ?></td>
                                    <td><img src="<?php echo $row['image']?>" alt="" width=100px height=100px></td>
                                    <td>Tổng tiền:</td>
                                    <td>
                                                    <!-- Button XÓA -->
                                        <a href="delete.php?id=<?php echo $row['idProduct']?>" class="btn btn-primary">
                                        <ion-icon name="trash-outline"></ion-icon>
                                        </a>

                        
                                        <!-- <a href="muahang.php?id=">MUA NGAY</a> -->
                                    </td>
                                </tr>
                    

                        </tbody>
                        <?php
                                }
                            ?>
                            <tr>
                                <td>Tổng tất cả</td>
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