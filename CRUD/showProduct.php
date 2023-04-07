<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
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
        $sql="SELECT * from sanphamadmin";
        $result=$mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
            // Hiển thị sản phẩm
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-3">';
                echo '<div class="card">';
                echo '<img src="' . $row['images'] . '" class="card-img-top">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['namesapham'] . '</h5>';
                echo '<p class="card-text">' . $row['motasanpham'] . '</p>';
                echo '<p class="card-text">' . $row['giasanpham'] . '</p>';
                echo '<a href="xulythemgiohang" class="btn btn-primary">Thêm vào giỏ hàng</a>';
                echo '</div></div></div>';
            }
            echo '</div>';
        } else {
            echo 'Không có sản phẩm nào';
        }
        
        // Đóng kết nối
        mysqli_close($mysqli);
        
    ?>
    
    
</body>
</html>
