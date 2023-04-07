<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>
<?php
    require 'xulylogin.php';
    if(isset($_SESSION['password'])){
        $user_id = $_SESSION['user_id'];
        $connect = mysqli_connect("localhost", "root", "", "USER");
        $sql = "SELECT Name, Email, Phone, Address FROM users WHERE id=$user_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['Name'];
        $email = $row['Email'];
        $phone = $row['Phone'];
        $address = $row['Address'];
        echo "<input type='hidden' id='name' name='name' value='$name'>";
        echo "<input type='hidden' id='email' name='email' value='$email'>";
        echo "<input type='hidden' id='phone' name='phone' value='$phone'>";
        echo "<input type='hidden' id='address' name='address' value='$address'>";
    }else{
        $connect=mysqli_connect("localhost","root","","SANPHAM");
        $idsp=$_GET['id'];
        $sql="SELECT * FROM sanphamadmin where id=$idsp";
        $kq=$connect->query($sql);
        if(!$kq){
            echo "Lỗi";
        }else{
            while($row=mysqli_fetch_array($kq)){
                echo $row['namesapham'];
                echo $row['giasanpham'];
                echo $row['images'] ;
              
            }
        } 
        echo "<form method='post' action='place_order.php'>";
        echo "<label for='address'>Họ tên:</label>";
        echo "<input type='text' id='name' name='name' required>";
        echo "<br>";
        echo "<label for='quantity'>Số lượng:</label>";
        echo "<input type='number' style='max:20;min:1' id='quantity' name='quantity' required>"; 
        echo "<br>";
        echo "<label for='address'>Địa chỉ giao hàng:</label>";
        echo "<input type='text' id='address' name='address' required>";
        echo "<br>";
        echo "<label for='pay'>Chọn phương thức thanh toán:</label>";

        echo  "<select id='PhuongThucTT'>";
        echo "<option value=''></option>";
        echo "<option value='Thẻ'>Thẻ ngân hàng</option>";
        echo "<option value='MOMO'>MOMO</option>";
        echo "<option value='khiNhanhang'>Khi nhận hàng</option>";
        echo "</select>";
        echo "<br>";
        echo "<button type='submit' name='order_submit'>Đặt hàng</button>";
        echo "</form>";
    //     
    //     <label for='product_name'>Tên sản phẩm:</label>
    //     
    //     <label for='quantity'>Số lượng:</label>
    //     <input type='number' id='quantity' name='quantity' required>
    //     <label for='address'>Địa chỉ giao hàng:</label>
    //     <input type='text' id='address' name='address' required>
    //     <button type='submit' name='order_submit'>Đặt hàng không đăng nhập</button>
    //   </form>
    }
?>
</body>
</html>
