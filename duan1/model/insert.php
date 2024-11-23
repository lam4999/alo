<?php
    
    // Thêm mới danh mục cho sản phẩm
    function insert_category($ten_loai, $hinh_anh ,$trang_thai){
        $sql = "INSERT INTO loaihang(ten_loai, hinh_anh ,trang_thai) VALUES('$ten_loai', '$hinh_anh' ,'$trang_thai')";
        pdo_execute($sql);
    }
    // Thêm Mới Sản Phẩm
    function addProcuts($ten_loai, $gia_New, $gia_Sale, $hinh, $mota, $dacBiet, $maHang){
        $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, mo_ta, ngay_nhap,dac_biet, ma_loai) 
        VALUES('$ten_loai', '$gia_New', '$gia_Sale', '$hinh', '$mota', NOW(), '$dacBiet' ,$maHang)";
        pdo_execute($sql);
    }

    function addAccount($pass, $ten_khach, $hinh, $email, $phone, $adrees){
        $sql = "INSERT INTO khach_hang(mat_khau,ho_ten , hinh ,email ,phone, adress)
        VALUES('$pass', '$ten_khach', '$hinh', '$email', '$phone', '$adrees')";
        pdo_execute($sql);
    }

    function addUser($name, $pass, $email, $adress){
        $sql = "INSERT INTO khach_hang(ho_ten, mat_khau, email, adress) VALUES('$name', '$pass', '$email', '$adress')";
        pdo_execute($sql);
    }

    function addComment($content, $id, $idUser, $date){
        $sql = "INSERT INTO binh_luan VALUES(null , '$content', '$id', '$idUser', '$date')";
        pdo_execute($sql);
    }
?>