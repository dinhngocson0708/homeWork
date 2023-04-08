<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="your-custom-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
    <style>
        img{
            width: 300px;
            height:300px
        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" placehoder="Tìm kiếm sản phẩm" name="tukhoa">
        <input type="submit" name="timkiem" value="Tìm kiếm">
    </form>

    <?php 
       if(isset($_POST['timkiem'])){
        $connect=mysqli_connect("localhost","root","","webaoquan");
        $key=$_POST['tukhoa'];
        $query_search="SELECT * from product where nameProduct like '%$key%'";
        $kq=$connect->query($query_search);
        if ($kq !== FALSE) {
            // Hiển thị sản phẩm
            echo '<div class="row">';
            while ($row = mysqli_fetch_assoc($kq)) {
                echo '<div class="col-md-3">';
                echo '<div class="card">';
                echo '<img src="' . $row['image'] . '" class="card-img-top">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['nameProduct'] . '</h5>';
                echo '<p class="card-text">' . $row['Mota'] . '</p>';
                echo '<p class="card-text">' . $row['Price'] . '</p>';
                echo '<a href="xulythemgiohang" class="btn btn-primary">Thêm vào giỏ hàng</a>';
                echo '</div></div></div>';
                
            }
            echo '</div>';
        } else {
            echo 'Không có sản phẩm nào';
        }
       }
       
    ?>
</body>
</html>