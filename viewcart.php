<?php
    session_start();
    include "myfun.php";
    if(isset($_SESSION['cart'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/giohang.css">
</head>
<body>
    <div class="container">
        <div class="menu ">
            <div class="logo">
                <img src="./image/logo.png" alt="">
            </div>
            <div class="menu1">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a>
                        <ul>
                            <li><a href="">Air Force 1</a></li>
                            <li><a href="">Bóng rổ</a></li>
                            <li><a href="">Bóng đá</a></li>
                            <li><a href="">Jordan</a></li>
                            <li><a href="">Khác</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="menu2">
                <i class="fa-solid fa-cart-shopping"></i>
                &nbsp;
                <i class="fa-solid fa-user"></i>
            </div>
            <form class="tkiem">
                <input type="text" placeholder="Tìm kiếm sản phẩm ..." name="search" >
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div class="box">
            <div class="title"><h2>Giỏ hàng</h2></div>
            <table border="1" class="tab1">
                <tr>
                    <th> STT</th>
                    <th colspan="2">Thông tin</th>
                    <th>đơn giá</th>
                    <th>số lượng</th>
                    <th>thành tiền</th>
                    <th></th>
                </tr>
                <tr>
                    <?php
                        echo showcart($_SESSION['cart']);
                    ?>
                </tr>
            </table>
            <p><a href="sanpham.php">Tiếp tục đặt hàng</a></p>
            <p><a href="delcart.php">làm trống giỏ hàng</a></p>
        </div>

    </div>
</body>
</html>


    <?php
   } else{
    echo 'Bạn chưa đặt hàng. <a href="sanpham.php">đặt hàng tiếp</a>';
}
?>




    