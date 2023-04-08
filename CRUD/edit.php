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
        include "connect.php";
        $id=$_GET['id'];
        $sql="SELECT * FROM product where id=$id";
        $kq=$mysqli->query($sql);
        if(!$kq){
            echo "Lỗi";
        }else{
            while($row=mysqli_fetch_array($kq)){
        ?>
                <form action="xulyinsert.php" method="post">
                <table>
                   <tr>
                        <td>ID</td>
                        <td><input type="text" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
                   </tr>
                   <tr>
                        <td>Tên sản phẩm:</td>
                        <td><input type="text" name="productName" value="<?php echo $row['namesapham'] ?>"></td>
                   </tr>
                   <tr>
                        <td>Danh mục sản phẩm</td>
                        <td> 
                         <select name="danhmuc" class="form-control">
                            <?php 
                                $sql="SELECT * FROM danhmucsanpham";
                                $kq=$mysqli->query($sql);
                                if($kq){
                                    while($rowedit=mysqli_fetch_array($kq)){
                            ?>
                                        <option value="<?php echo $rowedit['namedanhmuc'];?>">
                                            <?php echo " " ?>
                                            <?php echo $rowedit['namedanhmuc'];?>
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
                    <td><input type="number" name="price"  value="<?php echo $row['giasanpham'] ?>"></td>
                   </tr>
                   <tr>
                    <td>Số lượng sản phẩm
                    </td>
                    <td><input type="number" name="sl"  value="<?php echo $row['soluong'] ?>"></td>
                   </tr>
                   <tr>
                    <td>Hình ảnh sản phẩm:</td>
                    <td><input type="text" name="img"  value="<?php echo $row['images'] ?>"></td>
                   </tr>
                   <tr>
                    <td>Mô tả sản phẩm</td>
                    <td><input type="text" name="mota" id=""  value="<?php echo $row['motasanpham'] ?>"></td>
                   </tr>
                   <tr>
                       <td><button name="submit">CẬP NHẬT</button></td>
                   </tr>
                </table>
            </form>
    <?php
        if(isset($_POST['submit'])){
            $nameSP=$mysqli->real_escape_string($_POST['productName']);
            $DanhMuc=$mysqli->real_escape_string($_POST['danhmuc']);
            $Gia=$mysqli->real_escape_string($_POST['price']);
            $soluong=$mysqli->real_escape_string($_POST['sl']);
            $anh=$mysqli->real_escape_string($_POST['img']);
            $mota=$mysqli->real_escape_string($_POST['mota']);

            $sqledit="UPDATE sanphamadmin set namesapham='$nameSP',danhmucsanpham='$DanhMuc',giasanpham='$Gia',soluong='$soluong'
            ,images='$anh',motasanpham='$mota' where id=$id";

            $mysqli->query($sqledit);
            mysqli_close($mysqli);
            header('location:adminpage.php');
        }; 


            }
        }
    ?>
    
</body>
</html>