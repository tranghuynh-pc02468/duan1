<div class="row">
    <div class="mb10 titlead">
        <h2>THÊM MỚI LOẠI HÀNG HÓA</h2>
    </div>

    <div class="row  form-admin">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="" disabled>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai" id="">
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