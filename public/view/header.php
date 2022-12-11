<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Store - Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="./css/style1.css">
<link rel="stylesheet" href="./css/chitiet.css">
</head>
<body>
    <div class="container ">

    <!-- menu -->
        <div class="menu ">
            <div class="logo">
                <img src="./image/logo.png" alt="">
            </div>
            <div class="menu1">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=sanpham">Sản phẩm</a>
                        <!-- <ul>
                             <li><a href="">Air Force 1</a></li>
                            <li><a href="">Bóng đá</a></li>
                            <li><a href="">Bóng rổ</a></li>
                            <li><a href="">Jordan</a></li>
                            <li><a href="">Khác</a></li> 
                        </ul> -->
                    </li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                </ul>
            </div>
            <div class="menu2">
                <i class="fa-solid fa-cart-shopping"></i>
                &nbsp;
                <i class="fa-solid fa-user"></i>
            </div>
            <form action="index.php?act=spcungloai" class="tkiem" method="post">
                <input type="text" placeholder="Tìm kiếm sản phẩm ..." name="kw" >
                <button type="submit" ><i class="fa fa-search"></i></button>
            </form>
        </div>