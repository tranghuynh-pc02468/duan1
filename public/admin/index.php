<?php
    include "../model/pdo.php";

    include "header.php"; 

    //controller
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                //kt có click 
                if(isset($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    $sql = "INSERT INTO danhmuc(name) 
                            values('$tenloai')";
                   return pdo_execute($sql);
                    $thongbao = "thêm thành công";
                }
                                
                include "danhmuc/add.php";
                break;
            case 'addsp':
                include "sanpham/add.php";
                break;


            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }




   

    include "footer.php";


?>