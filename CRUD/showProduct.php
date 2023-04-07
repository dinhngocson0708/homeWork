<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/img/css/showSp.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include "connect.php";
        $sql="SELECT * from sanphamadmin";
        if($kq=$mysqli->query($sql)){
        while($row=$kq->fetch_array()){
            echo '<div class="product_list">';
                echo '<div class="card" style="width: 18rem;">';
                    echo '<img class="card-img-top" src="' . $row['images'] . '">';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row['namesapham'] . '</h5>';
                        echo '<p class="card-text">' . $row['motasanpham'] . '</p>';
                        echo '<p class="card-text"><small class="text-muted">' . $row['giasanpham'] . '</small></p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            
    
        }
    
        }
    ?>
</body>
</html>