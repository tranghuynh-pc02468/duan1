   <!-- sản phẩm mới -->
   <div class="row">
            <div class="new">
                <h2>Mới nhất</h2>
                <?php
            
            foreach ($spnew as $sanpham) {
                extract($sanpham);
                $hinh=$img.$hinhanh;
                echo '
                <div class="col-25 ">
                    <div class="prod">
                        <img class="image" src="'.$hinh.'" alt="IMG">
                        <div class="name">'.$tensp.'</div>
                        <input type="submit" value="Chi tiết ">
                        <div class="price">'.$gia.'</div>
                    </div>
                </div>
                ';
            }

        ?>
            

                
            </div>
        </div>

    <!-- banner 2 -->
    
        <div class="banner2 mb20">
            <div class="baner">
                <img  src="./image/banner1.jpg" alt="">
            </div>
            <div class="baner">
                <img  src="./image/banner2.jpg" alt="">
            </div>
            <div class="baner">
                <img  src="./image/banner3.jpg" alt="">
            </div>
            
        
    </div>
           
        
    <!-- sản phẩm best seller -->
    <div class="row">
        <div class="best">
            <h2>Bán chạy</h2>
            <?php
            
            foreach ($spnew as $sanpham) {
                extract($sanpham);
                $hinh=$img.$hinhanh;
                echo '
                <div class="col-25 ">
                    <div class="prod">
                        <img class="image" src="'.$hinh.'" alt="IMG">
                        <div class="name">'.$tensp.'</div>
                        <input type="submit" value="Chi tiết ">
                        <div class="price">'.$gia.'</div>
                    </div>
                </div>
                ';
            }

        ?>
        </div>
    </div>