<?php
    session_start();
    ob_start();

    if(isset($_SESSION['cart'])) {
        if(isset($_GET['id'])){
            array_splice($_SESSION['cart'], $_GET['id'],1);
           // header('location: viewcart.php');
        }else{
            unset($_SESSION['cart']);
            header('location: sanpham.php');  
        }


 
        
        
        if(count($_SESSION['cart'])>0) {
            header('location: viewcart.php');
        }else  {
            header('location: sanpham.php');  
          }
       

    }
    


?>