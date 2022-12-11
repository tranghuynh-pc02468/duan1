<div class="article">
    <?php 
    foreach ($listsp as $sanpham) {
        extract($sanpham);
        $linksp="index.php?act=spchitiet&masp=".$masp;
        $hinh = $img.$hinhanh;
        echo '<div class="col-25 ">
        <div class="prod">
        <a href="'.$linksp.'"><img class="image" src="'.$hinh.'" alt="IMG"></a>
        <a href="'.$linksp.'"><div class="name">'.$tensp.'</div></a>
        <a href="'.$linksp.'"><div class="price">'.$gia.'</div></a>
            
            
        </div>
    </div>';
    }
    ?>
  </div>



  <div class="aside">
            <h2>SẢN PHẨM</h2>
            <hr>
            <ul class="vmenu">
                <?php
                    foreach ($dsdm as $danhmuc) {
                       extract($danhmuc);
                        $linkdm = "index.php?act=spcungloai&maloai=".$maloai;
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