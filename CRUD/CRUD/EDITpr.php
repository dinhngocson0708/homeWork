<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Chỉnh sửa sản phẩm
                        <a href="PageAdmin.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                 <?php 
                  include "connect.php";
                  $id=$_GET['id'];
                  $sql="SELECT*FROM product where idPoduct=$id";
                  $kq=$mysqli->query($sql);
                  if($kq){
                    while($row=mysqli_fetch_assoc($kq)){
                  ?>
                  <form action="xulyinsert.php" method="post">
                    <div class="mb-3">
                      <label>Tên sản phẩm</label>
                      <input type="text" class="form-control" name="productName" value="<?php echo $row['nameProduct']?>">
                    </div>
                    <div class="mb-3">
                      <label>Danh mục sản phẩm</label>
                      <select name="danhmuc" class="form-control">
                               <option value="">--Vui lòng chọn danh mục!--</option>
                          <?php 
                              include "connect.php";
                              $sql="SELECT * FROM danhmuc";
                              $kq=$mysqli->query($sql);
                    
                              while($row=mysqli_fetch_array($kq)){
                          ?>
                                      <option value="<?php echo $row['idDanhmuc'];?>">
                                          <?php echo $row['nameDanhmuc'];?>
                                      </option>
                          <?php
                                  }
                          ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label>Gía sản phẩm</label>
                      <input type="text" class="form-control" name="price" value="<?php echo $row['Price']?>" >
                    </div>
                    <div class="mb-3">
                      <label>Số lượng</label>
                      <input type="number" class="form-control" name="sl" value="<?php echo $row['soluong']?>" >
                    </div>
                    <div class="mb-3">
                      <label>Hình ảnh sản phẩm</label>
                      <input type="text" class="form-control" name="img" value="<?php echo $row['image']?>">
                    </div>
                    <div class="mb-3">
                      <label>Mô tả sản phẩm</label>
                      <input type="text" class="form-control" name="mota" value="<?php echo $row['Mota']?>">
                    </div>
                    <div class="mb-3">
                      <button name="submit" class="btn btn-primary" type="submit">Lưu</button>
                    </div>
                  </form>
                  <?php
            }}
          ?>
                </div>
            </div>
        </div>
    </div>
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>