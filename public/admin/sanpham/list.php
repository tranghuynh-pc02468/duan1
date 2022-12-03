<div class="row">
        <div class="mb10 titlead">
            <h2>DANH SÁCH SẢN PHẨM</h2>   
        </div>

        <div class="row  form-admin">
            <div class="row mb10 dsloai">
                <table >
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ</th>
                        <th>HÌNH ẢNH</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach($listsp as $sanpham){
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&masp=".$masp;
                        $xoasp = "index.php?act=xoasp&masp=".$masp;
                        $img = "../upload/".$hinhanh;
                        if(is_file($img)){
                            $hinhanh = "<img src='".$img."' height='50'>";
                        }else{
                            $hinhanh = "hình không tồn tại";
                        }

                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$maloai.'</td>
                        <td>'.$masp.'</td>
                        <td>'.$tensp.'</td>
                        <td>'.$gia.'</td>
                        <td>'.$hinhanh.'</td>
                        <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                        <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>

                </table>
            </div>



            <div class="row mb10">
                <input type="button" name="" id="" value="Chọn tất cả">
                <input type="button" name="" id="" value="Bỏ Chọn tất cả">
                <input type="button" name="" id="" value="Xóa các mục đã chọn">    
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
                
        </div>
                </div>