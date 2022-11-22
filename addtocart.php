<?php
    session_start();
    ob_start();//sd header

    if(isset($_POST['dathang'])){
        $img = $_POST['img'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $id = $_POST['id'];
        $sl= 1;
        $tam=0;
        $i=0;
// Tìm ss sp trong giỏ hàng(thêm sl)
        if (isset($_SESSION['cart']) && (count($_SESSION['cart'])>0)){
            foreach ($_SESSION['cart'] as $sp){
                if($sp[0] == $id){ //lấy thứ tự lúc tạo mảng
                    $sl = $sl + $sp[4];
                    $tam=1;
                    $_SESSION['cart'][$i][4]=$sl;
                    break;
                }
                $i++;   
            }
        }
 

        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();



        if($tam==0){
        //tạo mảng 
        $sp = array($id, $img, $tensp, $gia, $sl);
        //add vào giỏ hàng chọn 1 or 2        
        array_push($_SESSION['cart'],$sp);   //$_SESSION['cart'][] = $sp; 
        }

    header('location: viewcart.php');

    }
?>