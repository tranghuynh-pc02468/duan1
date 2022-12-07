<?php
    function add_sp($tensp, $gia, $hinhanh, $mota, $maloai){
        $sql = "INSERT INTO sanpham(tensp, gia, hinhanh, mota, maloai) 
                VALUES('$tensp','$gia','$hinhanh','$mota','$maloai')";
                   pdo_execute($sql);
    }

    function listall_sp(){
        $sql="SELECT * FROM sanpham order by masp";
        $listsp=pdo_query($sql);
        return $listsp;
    }

    function listone_sp($masp){
        $sql = "SELECT * FROM sanpham where masp= ".$masp;
        $updatesp = pdo_query_one($sql);
        return $updatesp;
    }

    function delete_sp($masp){
        $sql="delete FROM sanpham where masp= ".$masp;
        pdo_execute($sql);
    }

    function update_sp($maloai,$masp,$tensp,$gia,$mota,$hinhanh){
        if($hinhanh == ""){
            $sql = "UPDATE sanpham 
            SET maloai='".$maloai."', tensp='".$tensp."', gia='".$gia."', mota='".$mota."'
            WHERE masp=" .$masp;
        }else{
            $sql = "UPDATE sanpham 
            SET maloai='".$maloai."',tensp='".$tensp."', gia='".$gia."', mota='".$mota."', hinhanh='".$hinhanh."'
            WHERE masp=" .$masp;
        }
        pdo_execute($sql);
    }




    function list_sp_new(){
        $sql= "SELECT * FROM sanpham where 1 order by masp desc limit 0,6";
        $listsp=pdo_query($sql);
        return $listsp;
    }
?>