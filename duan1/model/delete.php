<?php

    // Xóa Danh Mục Của Sản phẩm 
    function delete_category($id){
        $sql = "DELETE FROM loaihang where ma_loai= $id";
        pdo_execute($sql);
    }

    // Xóa Sản phẩm 
    function delete_products($id){
        $sql = "DELETE FROM hang_hoa where ma_hh= $id";
        pdo_execute($sql);
    }

    // Xóa Khách hàng

    function delete_account($id){
        $sql = "DELETE FROM khach_hang where ma_kh = $id";
        pdo_execute($sql);
    }

    // Xóa Comment không phù hợp

    function delete_comment($id){
        $sql = "DELETE FROM binh_luan where ma_bl = $id";
        pdo_execute($sql);
    }

?>