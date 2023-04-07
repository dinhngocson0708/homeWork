<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   
    <title>Document</title>
</head>
<body>
    <center>
    <h1>DANH SÁCH SẢN PHẨM</h1>
    <a href="formAddSanpham.php"><button>Thêm sản phẩm +</button></a> <br> <br>
    <?php
        include "connect.php";
        $sql="SELECT * FROM sanphamadmin";
        if($kq=$mysqli->query($sql)){
    ?>
        <table border="1">
        <tr> 
            <th>ID</th>
            <th>TÊN SP</th>
            <th>DANH MỤC</th>
            <th>GIÁ</th>
            <th>ẢNH</th>
            <th>SỐ LƯỢNG</th>
            <th>MÔ TẢ</th>
            <th>HÀNH ĐỘNG</th>
        </tr>
        <?php while($row=$kq->fetch_array()){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['namesapham']?></td>
            <td><?php echo $row['danhmucsanpham']?></td>
            <td><?php echo $row['giasanpham']?></td>
            <td><img src="<?php echo $row['images']?>" alt="" width=100px height=100px></td>
            <td><?php  echo $row['soluong']?></td>
            <td><?php echo $row['motasanpham']?></td>
            <td>
                            <!-- Button XÓA -->
                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                <ion-icon name="trash-outline"></ion-icon>
                </a>

                            <!-- Button SỬA -->
                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <ion-icon name="create-outline"></ion-icon>
                </a>
                <!-- <a href="muahang.php?id=<?php echo $row['id']?>">MUA NGAY</a> -->
             </td>
        </tr>

        <?php
        }
        ?>

        </table>
    <?php
        }
    ?>
    </center>
  
</body>
</html>