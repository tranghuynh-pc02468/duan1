<?php
include "model/pdo.php"; //kết nối database
include "view/header.php";
include "model/function_sanpham.php";
$img = "upload/";

$spnew=list_sp_new();

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'lienhe': 
            include "view/lienhe.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
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