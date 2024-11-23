<?php

    // Cập Nhập lại danh mục của sản phẩm 
    function update_category($id ,$ten_loai, $hinh_anh ,$trang_thai){
        $sql = "UPDATE loaihang SET ten_loai = '$ten_loai', hinh_anh = '$hinh_anh' ,trang_thai = '$trang_thai' WHERE ma_loai = $id";
        pdo_execute($sql);
    }

    // Cập Nhật Lại Sản Phẩm
    function update_products($ten_sp, $gia_New, $gia_Sale, $mHang, $dacbiet, $hinh, $mota, $id){
        $sql = "UPDATE hang_hoa SET ten_hh = '$ten_sp', don_gia = '$gia_New', giam_gia = '$gia_Sale', hinh = '$hinh', mo_ta = '$mota', dac_biet = '$dacbiet', ma_loai = '$mHang' WHERE ma_hh = $id";
        pdo_execute($sql);
    }

    // Cập nhật lại người dùng
    function update_account($pass, $ten_khach, $hinh, $email, $phone, $adrees, $id){
        $sql = "UPDATE khach_hang SET mat_khau = '$pass', ho_ten = '$ten_khach', hinh = '$hinh',
        email = '$email', phone = '$phone', adress = '$adrees' WHERE ma_kh = $id";
        pdo_execute($sql); 
    } 
    
?>