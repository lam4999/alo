<?php
session_start();
    include "./model/pdo.php";
    include "./model/insert.php";
    include "./model/select.php";
    include "./model/update.php";
    include "./model/delete.php";

    include "view/header.php";

    if(isset($_GET['act']) && $_GET['act']){
        $act = $_GET['act'];
        switch($act){
            case 'login':
                include "view/login.php";
                break;
            case 'addLogin':
                include "view/addlogin.php";
                break;
            case 'ct': 
                if(isset($_SESSION['email'])){
                    $acc = $_SESSION['email'];
                    $user = loadEmailUser($acc);
                }
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                $sp = loadOne_products($id);
                $dm = loadOne_category($sp['ma_loai']);
                $blhh = listComment($sp['ma_hh']);
                $related_product = load_related_products($id, $sp['ma_loai']);
                include "view/sanpham/chitietsp.php";
                break;
            default: 
            include "view/home.php";
            break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
    
?>