<?php
include "model/pdo.php"; //kết nối database
include "view/header.php";
include "model/function_sanpham.php";
include "model/function_danhmuc.php";
$img = "upload/";

$spnew=list_sp_new(); //sp mới
$sp=list_sp();      //sp trang sp
$dsdm=listall_dm();

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'lienhe': 
            include "view/lienhe.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'sanpham':
            include "view/sanpham.php";
            break;
        case 'spchitiet':
            if(isset($_GET['masp'])){
                $listone=listone_sp($masp);
                include "view/spchitiet.php";
            }else{
                include "view/spchitiet.php";
            }

            
            break;   






        default:
        include "view/home.php";
            break;
    }








}else{
    include "view/home.php";
}

include "view/footer.php";


?>