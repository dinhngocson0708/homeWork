<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="xulyinsert.php" method="post" enctype="multipart/form-data">
        <table>
           <tr>
                <td>Tên sản phẩm:</td>
                <td><input type="text" name="productName"></td>
           </tr>
           <tr>
                <td>Danh mục sản phẩm</td>
                <td> 
                 <select name="danhmuc" class="form-control">
                    <?php 
                        include "connect.php";
                        $sql="SELECT * FROM danhmucsanpham";
                        $kq=$mysqli->query($sql);
                        if($kq){
                            while($row=mysqli_fetch_array($kq)){
                    ?>
                                <option value="<?php echo $row['namedanhmuc'];?>">
                                    <?php echo " " ?>
                                    <?php echo $row['namedanhmuc'];?>
                                </option>
                    <?php
                            }
                        }
                    ?>
                 </select>
                </td>
            </tr>
           <tr>
            <td>Gía sản phẩm:</td>
            <td><input type="number" name="price"></td>
           </tr>
           <tr>
            <td>Số lượng sản phẩm
            </td>
            <td><input type="number" name="sl"></td>
           </tr>
           <tr>
            <td>Hình ảnh sản phẩm:</td>
            <td><input type="text" name="img"></td>
           </tr>
           <tr>
            <td>Mô tả sản phẩm</td>
            <td><input type="text" name="mota" id=""></td>
           </tr>
           <tr>
               <td><button name="submit">Lưu</button></td>
           </tr>
        </table>
    </form>
</body>
</html>