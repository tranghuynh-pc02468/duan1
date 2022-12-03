<?php
    if(is_array($updatedm)){
        extract($updatedm);
    }
?>

<div class="row">
    <div class="mb10 titlead">
        <h2>CẬP NHẬT LOẠI HÀNG</h2>
    </div>

    <div class="row  form-admin">
        <form action="index.php?act=updatedm" method="post">
            <div class="mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="" disabled>
            </div>
            <div class="mb10">
                Tên loại <br>
                <input type="text" name="tenloai" id="" value="<?php if(isset($tenloai) && ($tenloai!="")) echo $tenloai; ?>" >
            </div>
            <div class="mb10">
                <!-- lưu mã loại -->
                <input type="hidden" name="maloai" value="<?php if(isset($maloai) && ($maloai>0)) echo $maloai; ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
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
