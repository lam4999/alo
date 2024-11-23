<?php

// load tất cả các danh mục của sản phẩm
function load_category(){
    $sql = "select * from loaihang order by ma_loai desc";
    $listCategory = pdo_query($sql);
    return $listCategory;
}

// load 1 danh mục của sản phẩm
function loadOne_category($id){
    $sql = "SELECT * FROM loaihang WHERE ma_loai = $id";
    $one_category = pdo_query_one($sql);
    return $one_category;
}


// load tất cả các danh mục của sản phẩm
function load_products(){
    $sql = "select * from hang_hoa order by ma_hh desc";
    $listProducts = pdo_query($sql);
    return $listProducts;
}

// load 1 danh mục của sản phẩm
function loadOne_products($id){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh = ?";
    $one_products = pdo_query_one($sql, $id);
    return $one_products;
}


// load sản phẩm cùng loại 
function load_related_products($id, $ma_loai){
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = $ma_loai and ma_hh <> $id";
    $related_product = pdo_query($sql);
    return $related_product;
}

// load Các Khách hàng Cả Admin
function load_users() {
    $sql = "SELECT * FROM khach_hang order by ma_kh desc";
    $list_users = pdo_query($sql);
    return $list_users;
}

function loadOne_user($id){
    $sql = "SELECT * FROM khach_hang WHERE ma_kh = ?";
    $list_one_user = pdo_query_one($sql, $id);
    return $list_one_user;
}


function loadEmailUser($email){
    $sql = "SELECT * FROM khach_hang where email = '$email'";
    $email = pdo_query_one($sql);
    return $email;
}

function listComment($id){
    $sql = "SELECT * FROM binh_luan WHERE ma_hh = $id order by ma_bl desc";
    $blhh = pdo_query($sql);
    return $blhh;
}

function listCommentAll(){
    $sql = "SELECT * FROM binh_luan";
    $listComment = pdo_query($sql);
    return $listComment;
}
?>