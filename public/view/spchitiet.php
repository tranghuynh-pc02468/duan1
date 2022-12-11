 <div class="box">
             <div class="boxtrai">
                <?php
                    extract($listone);
                    $hinh=$img.$hinhanh;
                    echo '<img src="'.$hinh.'" alt="">';
                ?>
                <!-- <img src="./image/af5-1.png" alt="">
                <img src="./image/af5-2.png" alt="">
                <img src="./image/af5-3.png" alt="">
                <img src="./image/af5-4.png" alt="">
                <img src="./image/af5-5.png" alt="">
                <img src="./image/af5-6.png" alt=""> -->
             </div>
             <div class="boxphai">
               <div class="name"><?=$tensp?></div>
               <div class="gia"><?=$gia?></div>
               <div class="size">
                    <p>Size</p>
                    <input type="button" value="36">
                    <input type="button" value="37">
                    <input type="button" value="38">
                    <input type="button" value="39">
                    <input type="button" value="40">
               </div>
               <div class="mota"><?=$mota?></div>
               <div class="cart">
                <input type="submit" value="Thêm vào giỏ hàng">
               </div>
             </div>
        </div>

        <div class="box2">
            <h2>Sản phẩm liên quan</h2>
            <div class="row">  
                <?php
                    foreach ($splienquan as $splq) {
                        extract($splq);
                        $hinh=$img.$hinhanh;   
                        
                            echo '<div class="prod-ct">
                            <img class="image" src="'.$hinh.'" alt="IMG">
                            <div class="name">'.$tensp.'</div>
                            <div class="price">'.$gia.'</div> 
                        </div>';
                       
                        
                    }
                
                ?>            
                    <!-- <div class="prod-ct">
                         <img class="image" src="./image/af3.png" alt="IMG">
                        <div class="name">Air force 1</div>
                        <div class="price">1.300.000</div> 
                    </div>
                    <div class="prod-ct">
                        <img class="image" src="./image/af3.png" alt="IMG">
                        <div class="name">Air force 1</div>
                        <div class="price">1.300.000</div>
                    </div>
                    <div class="prod-ct">
                        <img class="image" src="./image/af3.png" alt="IMG">
                        <div class="name">Air force 1</div>
                        <div class="price">1.300.000</div>
                    </div>
                    <div class="prod-ct">
                        <img class="image" src="./image/af3.png" alt="IMG">
                        <div class="name">Air force 1</div>
                        <div class="price">1.300.000</div>
                    </div> -->
                    
                     
            </div>

        </div> 