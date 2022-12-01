<div class="row">
    <div class="mb10 titlead">
        <h2>THÊM MỚI SẢN PHẨM</h2>
    </div>

    <div class="row  form-admin">
        <form action="index.php?act=addsp" method="post">
            <div class="row mb10">
                Mã sản phẩm <br>
                <input type="text" name="masp" id="" disabled>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" id="">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="number" name="gia" id="">
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <input type="file" name="hinhanh" id="">
            </div>
            <div class="row mb10">
                Mô tả <br>
                <input type="text" name="mota" id="">
            </div>
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="">
            </div>
            <div class="row mb10">
                <input type="submit" value="Thêm mới" name="themmoi">
                <input type="reset" value="Nhập lại">

                <a href="index.php?act=list"><input type="button" value="Danh sách"></a>
            </div>
    <?php
    if(isset($thongbao) && ($thongbao!="")){
        echo $thongbao;
    }
       
    ?>

        </form>
    </div>
</div>
</div>