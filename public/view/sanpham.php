<div class="article">
    <?php 
    foreach ($sp as $sanpham) {
        extract($sanpham);
        $linksp="index.php?act=spchitiet&masp=".$masp;
        $hinh = $img.$hinhanh;
        echo '<div class="col-25 ">
        <div class="prod">
            <img class="image" src="'.$hinh.'" alt="IMG">
            <div class="name">'.$tensp.'</div>
            <div class="price">'.$gia.'</div>
            <a href="'.$linksp.'"><input type="button" value="Chi tiết"></a>
        </div>
    </div>';
    }
    ?>
            <!-- <div class="col-25 ">
                <div class="prod">
                    <img class="image" src="./image/af3.png" alt="IMG">
                    <div class="name">Air force 1</div>
                    <div class="price">1.300.000</div>
                    <input type="submit" value="Chi tiết">
                </div>
            </div>
            <div class="col-25 ">
                <div class="prod">
                    <img class="image" src="./image/af3.png" alt="IMG">
                    <div class="name">Air force 1</div>
                    <div class="price">1.300.000</div>
                    <input type="submit" value="Chi tiết">
                </div>
            </div>
            <div class="col-25 ">
                <div class="prod">
                    <img class="image" src="./image/af3.png" alt="IMG">
                    <div class="name">Air force 1</div>
                    <div class="price">1.300.000</div>
                    <input type="submit" value="Chi tiết">
                </div>
            </div>
            <div class="col-25 ">
                <div class="prod">
                    <img class="image" src="./image/af3.png" alt="IMG">
                    <div class="name">Air force 1</div>
                    <div class="price">1.300.000</div>
                    <input type="submit" value="Chi tiết">
                </div>
            </div>
            <div class="col-25 ">
                <div class="prod">
                    <img class="image" src="./image/af3.png" alt="IMG">
                    <div class="name">Air force 1</div>
                    <div class="price">1.300.000</div>
                    <input type="submit" value="Chi tiết">
                </div>
            </div>
            <div class="col-25 ">
                <div class="prod">
                    <img class="image" src="./image/af3.png" alt="IMG">
                    <div class="name">Air force 1</div>
                    <div class="price">1.300.000</div>
                    <input type="submit" value="Chi tiết">
                </div>
            </div> -->
        </div>

        <div class="aside">
            <h2>SẢN PHẨM</h2>
            <hr>
            <ul class="vmenu">
                <?php
                    foreach ($dsdm as $danhmuc) {
                       extract($danhmuc);
                        $linkdm = "index.php?act=sanpham&maloai=".$maloai;
                       echo '<li><a href="'.$linkdm.'">'.$tenloai.'</a></li>';

                    }

                ?>
                <!-- <li><a href="">Air Force 1</a></li>
                <li><a href="">Bóng rổ</a></li>
                <li><a href="">Bóng đá</a></li>
                <li><a href="">Jordan</a></li>
                <li><a href="">Khác</a></li> -->


            </ul>
        </div>