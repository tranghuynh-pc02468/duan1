<?php
    function add_dm($tenloai){
        $sql = "INSERT INTO loaihang(tenloai) VALUES('$tenloai')";
        pdo_execute($sql);
    }

    function listall_dm(){
        $sql="SELECT * FROM loaihang order by maloai desc";
        $listdm=pdo_query($sql);
        return $listdm;
    }

    function listone_dm($maloai){
        $sql = "SELECT * FROM loaihang where maloai= ".$maloai;
        $updatedm = pdo_query_one($sql);
        return $updatedm;
    }

    function delete_dm($maloai){
        $sql="delete FROM loaihang where maloai= ".$maloai;
        pdo_execute($sql);
    }

    function update_dm($maloai,$tenloai){
        $sql = "UPDATE loaihang SET tenloai='".$tenloai."' WHERE maloai=" .$maloai;
        pdo_execute($sql);
    }
?>