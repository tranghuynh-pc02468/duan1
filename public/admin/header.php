<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Store - admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="../css/style.css">
<!-- <link rel="stylesheet" href="./css/admin.css"> -->
</head>
<body>
    <div class="container ">
        
    <!--thanh menu -->
        <div class="menu ">
            <div class="logo">
                <img src="../image/logo.png" alt="">
            </div>
            <div class="menu1">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=adddm">Danh mục</a></li>
                    <li><a href="index.php?act=addsp">Sản phẩm</a></li>
                    <li><a href="index.php?act=dskh">Khách hàng</a></li>
                    <li><a href="index.php?act=thongke">Thống kê</a></li>
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