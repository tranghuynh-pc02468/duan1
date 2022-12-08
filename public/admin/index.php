<?php 
include "../model/pdo.php";
include "../model/function_danhmuc.php";
include "../model/function_sanpham.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    add_dm($tenloai); //gọi hàm bên funtion_danhmuc
                   $thongbao="thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'list':
             //   $sql="SELECT * FROM loaihang order by maloai";
                $listdm=listall_dm(); 
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['maloai'])){
                  //  $sql="delete FROM loaihang where maloai= ".$_GET['maloai'];
                  //  pdo_execute($sql);
                  delete_dm($_GET['maloai']);
                }
                $listdm=listall_dm();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['maloai'])){
                // $sql = "SELECT * FROM loaihang where maloai= ".$_GET['maloai'];
                // $updatedm = pdo_query_one($sql);
                $updatedm=listone_dm($_GET['maloai']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $maloai = $_POST['maloai'];
                //    $sql = "UPDATE loaihang SET tenloai='".$tenloai."' WHERE maloai=" .$maloai;
                //    pdo_execute($sql);
                update_dm($maloai,$tenloai);
                   $thongbao="cập nhật thành công";
                }
                $listdm = listall_dm();
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
                        //gọi hàm function 
                   add_sp($tensp, $gia, $hinhanh, $mota, $maloai);
                   $thongbao="thành công";
                }
                $listdm = listall_dm();
                include "sanpham/add.php";
                break;
            
            case 'listsp':
                $listsp = listall_sp();
                include "sanpham/list.php";
                break;
                
                case 'xoasp':
                    if(isset($_GET['masp'])){
                        delete_sp($_GET['masp']);
                    }
                    $listsp = listall_sp();
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                        if(isset($_GET['masp'])){
                            // $sql = "SELECT * FROM sanpham where masp= ".$_GET['masp'];
                            // $updatesp = pdo_query_one($sql);
                            $updatesp = listone_sp($_GET['masp']);
                        }
                        $listdm = listall_dm();//gọi hiễn thị dm
                        include "sanpham/update.php";
                        break;
                case 'updatesp':
                        if(isset($_POST['capnhat'])){
                            $maloai = $_POST['maloai'];
                            $masp = $_POST['masp'];
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
        
                            update_sp($maloai,$masp,$tensp,$gia,$mota,$hinhanh);
                            $thongbao="cập nhật thành công";
                        }
                        $listsp = listall_sp();
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