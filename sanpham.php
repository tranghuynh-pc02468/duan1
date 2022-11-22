<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaker Store - Sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container ">

        <!-- menu -->
        <div class="menu ">
            <div class="logo">
                <img src="image/logo.png" alt="">
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
                <a href="view.php"><i class="fa-solid fa-cart-shopping"></i></a>
                &nbsp;
                <i class="fa-solid fa-user"></i>
            </div>
            <form class="tkiem">
                <input type="text" placeholder="Tìm kiếm sản phẩm ..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <div class="article">
            <div class="col-25 ">
                <div class="prod">
                    <form action="addtocart.php" method="post">
                        <img class="image" src="image/af3.png" alt="IMG">
                        <div class="name">Air force 1</div>
                        <div class="price">1.300.000</div>
                        <input type="hidden" name="img" value="image/af3.png">
                        <input type="hidden" name="tensp" value="Air force 1">
                        <input type="hidden" name="gia" value="1300000">
                        <input type="hidden" name="id" value="1">
                        <input type="submit" value="Đặt hàng" name="dathang">
                    </form>
                    
                </div>
            </div>
            <div class="col-25 ">
                <div class="prod">
                <form action="addtocart.php" method="post">
                        <img class="image" src="image/fb1.png" alt="IMG">
                        <div class="name">Giày Bóng đá</div>
                        <div class="price">1.500.000</div>
                        <input type="hidden" name="img" value="image/fb1.png">
                        <input type="hidden" name="tensp" value="Giày Bóng đá">
                        <input type="hidden" name="gia" value="1500000">
                        <input type="hidden" name="id" value="2">
                        <input type="submit" value="Đặt hàng" name="dathang">
                    </form>
                </div>
            </div>
            <div class="col-25 ">
                <div class="prod">
                <form action="addtocart.php" method="post">
                        <img class="image" src="image/jd1.png" alt="IMG">
                        <div class="name">Jordan 1</div>
                        <div class="price">1.400.000</div>
                        <input type="hidden" name="img" value="image/af1.png">
                        <input type="hidden" name="tensp" value="Jordan 1">
                        <input type="hidden" name="gia" value="1400000">
                        <input type="hidden" name="id" value="3">
                        <input type="submit" value="Đặt hàng" name="dathang">
                    </form>
                </div>
            </div>
        </div>

        <div class="aside">
            <h2>SẢN PHẨM</h2>
            <hr>
            <ul class="vmenu">
                <li><a href="">Air Force 1</a></li>
                <li><a href="">Bóng rổ</a></li>
                <li><a href="">Bóng đá</a></li>
                <li><a href="">Jordan</a></li>
                <li><a href="">Khác</a></li>


            </ul>
        </div>


    </div>
</body>

</html>