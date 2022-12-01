<div class="row mb10 titlead">
            <h2>QUẢN LÝ LOẠI HÀNG</h2>   
        </div>

        <div class="row  form-admin">
            <div class="row mb10 dsloai">
                <table >
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach($listdm as $danhmuc){
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm".$maloai;
                        $xoadm = "index.php?act=xoadm&maloai=".$maloai;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$maloai.'</td>
                        <td>'.$tenloai.'</td>
                        <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                        <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>

                </table>
            </div>



            <div class="row mb10">
                <input type="button" name="" id="" value="Chọn tất cả">
                <input type="button" name="" id="" value="Bỏ Chọn tất cả">
                <input type="button" name="" id="" value="Xóa các mục đã chọn">    
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
            </div>