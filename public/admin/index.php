<?php 
include "../model/pdo.php";

    include "header.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                   $sql = "INSERT INTO loaihang(tenloai) VALUES('$tenloai')";
                   pdo_execute($sql);
                   $thongbao="thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'list':
                $sql="SELECT * FROM loaihang order by maloai";
                $listdm=pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['maloai'])){
                    $sql="delete FROM loaihang where maloai= ".$_GET['maloai'];
                    pdo_query($sql);
                }
                $sql="SELECT * FROM loaihang order by maloai";
                $listdm=pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['maloai'])){
                $sql = "SELECT * FROM loaihang where maloai= ".$_GET['maloai'];
                $updatedm = pdo_query_one($sql);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $maloai = $_POST['maloai'];
                   $sql = "UPDATE loaihang SET tenloai='".$tenloai."' WHERE maloai=" .$maloai;
                   pdo_execute($sql);
                   $thongbao="cập nhật thành công";
                }
                $sql="SELECT * FROM loaihang order by maloai";
                $listdm=pdo_query($sql);
                include "danhmuc/list.php";
                break;


            case 'addsp':
                if(isset($_POST['themmoi'])){
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $hinhanh = $_POST['hinhanh'];
                    $mota = $_POST['mota'];
                   $sql = "INSERT INTO sanpham(tensp, gia, hinhanh, mota) VALUES('$tensp,$gia,$hinhanh,$mota')";
                   pdo_execute($sql);
                   $thongbao="thành công";
                }
                include "sanpham/add.php";
                break;


            default:
                include "home.php";
                break;
        }
    }
else{
    include "home.php";
}


    include "footer.php";


?>