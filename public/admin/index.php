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
                    pdo_execute($sql);
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

//sản phẩm
            case 'addsp':
                if(isset($_POST['themmoi'])){
                    $maloai = $_POST['maloai'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $hinhanh = $_FILES['hinhanh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                    if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["hinhanh"]["name"])). " has been uploaded.";
                       } //else {
                    //     echo "Sorry, there was an error uploading your file.";
                    //   }

                   $sql = "INSERT INTO sanpham(tensp, gia, hinhanh, mota, maloai) 
                            VALUES('$tensp','$gia','$hinhanh','$mota','$maloai')";
                   pdo_execute($sql);
                   $thongbao="thành công";
                }
                $sql="SELECT * FROM loaihang order by maloai";
                $listdm=pdo_query($sql);
                include "sanpham/add.php";
                break;
            
                case 'listsp':
                    $sql="SELECT * FROM sanpham order by masp";
                    $listsp=pdo_query($sql);
                    include "sanpham/list.php";
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