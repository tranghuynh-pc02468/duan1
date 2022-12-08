<div class="row">
    <div class="mb10 titlead">
        <h2>THÊM MỚI SẢN PHẨM</h2>
    </div>

    <div class="row  form-admin">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class=" mb10">
                Mã sản phẩm <br>
                <input type="text" name="masp" id="" disabled>
            </div>
            <div class=" mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" id="">
            </div>
            <div class=" mb10">
                Giá <br>
                <input type="text" name="gia" id="">
            </div>
            <div class=" mb10">
                Hình ảnh <br>
                <input type="file" name="hinhanh" id="">
            </div>
            <div class=" mb10">
                Mô tả <br>
                <textarea name="mota" cols="50" rows="10"></textarea>
            </div>
            <div class=" mb10">
                Mã loại <br>
                <select name="maloai" >
                    <?php 
                    foreach($listdm as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$maloai.'">'.$tenloai.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class=" mb10" >
                <input type="submit" value="Thêm mới" name="themmoi">
                <input type="reset" value="Nhập lại">

                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
    <?php
    if(isset($thongbao) && ($thongbao!="")){
        echo $thongbao;
    }
       
    ?>

        </form>
    </div>
</div>