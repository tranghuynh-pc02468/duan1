<?php
    if(is_array($updatesp)){
        extract($updatesp);
    }

    $img = "../upload/".$hinhanh;
    if(is_file($img)){
        $hinhanh = "<img src='".$img."' height='50'>";
    }else{
        $hinhanh = "hình không tồn tại";
    }
?>

<div class="row">
    <div class="mb10 titlead">
        <h2>CẬP NHẬT SẢN PHẨM</h2>
    </div>

    <div class="row  form-admin">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class=" mb10">
                Mã sản phẩm <br>
                <input type="text" name="masp" id="" disabled>
            </div>
            <div class=" mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" id="" value="<?=$tensp?>">
            </div>
            <div class=" mb10">
                Giá <br>
                <input type="number" name="gia" id="" value="<?=$gia?>">
            </div>
            <div class=" mb10">
                Hình ảnh <br>
                <input type="file" name="hinhanh" id="">
                <?=$hinhanh?>
            </div>
            <div class=" mb10">
                Mô tả <br>
                <textarea name="mota" cols="50" rows="10"><?=$mota ?></textarea>
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
                <!--input:hidden lưu mã sp -->
                <input type="hidden" name="masp" value="<?=$masp?>"> 
                <input type="submit" value="Cập nhật" name="capnhat">
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
