<?php 
    function loadall_mausac(){
        $sql = "SELECT * from mausac where 1";
        $listmausac = pdo_query($sql);
        return $listmausac;
    }
    function check_mausac($id_sanpham){
       $sql = "SELECT id_mausac from sanpham_mausac
        where id_sanpham = $id_sanpham";
        $check_mausac = pdo_query($sql);
        return $check_mausac;
    }
?>