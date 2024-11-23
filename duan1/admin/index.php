<?php
ob_start();
session_start();
    include "../model/pdo.php";
    include "../model/insert.php";
    include "../model/select.php";
    
    include "../model/update.php";
    include "../model/delete.php";

    include "header.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'listdm': 
               $listCategory = load_category();
               include "category/list.php";
               break; 
            case 'adddm':
                // Kiểm tra người dùng có click thêm không 
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $ten_loai = $_POST['tenloai'];
                    $hinh_anh = $_FILES['hinhanh']['name'];
                    $trang_thai = $_POST['trangthai'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinhanh']['name']);

                    if(move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file)){

                    }else{

                    }
                    insert_category($ten_loai, $hinh_anh ,$trang_thai);
                    $thong_bao = "Thêm Thành Công Rồi Ní Ơi!!";
                    header("location:index.php?act=listdm");
                }
                include "category/add.php";
                break;
                
            case "xoadm":
                if(isset($_GET['id']) && ($_GET['id']) > 0){
                    $id = $_GET['id'];
                    delete_category($id);
                    include "category/list.php";
                }
                $listCategory = load_category();
                break;

            case 'suadm':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $one_category = loadOne_category($id);
                }
                include "category/update.php";
                break;

            case 'updatedm':
                // Kiểm tra người dùng có click thêm không 
                $id = isset($_POST['id']) ? $_POST['id'] : null;
                if(isset($_POST['capnhat'])){
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinhanh']['name']);

                    $ten_loai = $_POST['tenloai'];
                    $trang_thai = $_POST['trangthai'];
                    if(!empty($_POST['tenloai']) && !empty($_POST['trangthai'])){
                        $hinh_anh = $_FILES['hinhanh']['name'];
                        move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
                        update_category($id, $ten_loai, $hinh_anh ,$trang_thai);
                    }else{
                        $one_category = loadOne_category($id);
                        $hinh_anh = $one_category('hinhanh');
                    }
                    
                    
                    $thong_bao = "Thêm Thành Công Rồi Ní Ơi!!";
                }
                $one_category = loadOne_category($id);
                include "category/list.php";
                break;
            
            case 'listProducts':
                $listProducts = load_products();
                include 'products/list.php';
                break;
            
            case 'addhh':
                $thongBao = $thongBao1 = $thongBao2 = $thongBao3 = $thongBao4 = "";
                if(isset($_POST['themmoi'])){
                    $target_dir = "../uploadProducts/";
                    $target_file = $target_dir .basename($_FILES['hinhanh']['name']);
                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                    if(empty($_POST['tenloai'])){
                        $thong_bao = "Vui Lòng Nhập Tên Sản Phẩm";
                    }else if(empty($_POST['priceNew'])){
                        $thongBao1 = "Vui Lòng Nhập Giá Sản Phẩm";
                    }else if(empty($_POST['priceSale'])){
                        $thongBao2 = "Vui Lòng Nhập Giá Sản Phẩm";
                    }else if($_FILES["hinhanh"]["size"] > 5000000){
                        $thongBao3 = "Vui Lòng Nhập Đúng Size Của Hình Ảnh";
                    }else if(empty($_POST['mHang'])){
                        $thongBao4 = "Vui Lòng Chọn Danh Mục";
                    }else{
                        if(!empty($_POST['tenloai']) && !empty($_POST['priceNew']) && !empty($_POST['mHang'])){
                            move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
                            $ten_sp = check($_POST['tenloai']);
                            $gia_New = check($_POST['priceNew']); 
                            $gia_Sale = check($_POST['priceSale']);
                            $mHang = check($_POST['mHang']);
                            $dacbiet = check($_POST['dacbiet']); 
                            $mota = check($_POST['mota']); 
                            $hinh = check($_FILES['hinhanh']['name']);
                            addProcuts($ten_sp, $gia_New, $gia_Sale,$hinh , $mota, $dacbiet,$mHang);
                            $thongBao6 = "Thêm Thành Công";
                            header("location:index.php?act=listProducts");
                        }else{
                            echo "Loi";
                        }
                    }

                }
                
                $listCategory = load_category();
                include 'products/add.php';
                break;

            case 'xoasp':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete_products($id);
                    $listProducts = load_products();
                    include "products/list.php";
                }
                break;
            case 'suasp':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $category = loadOne_category($id);
                    $load_one_products = loadOne_products($id);
                }
                include "products/update.php";
                break;
            case 'update':
                if (isset($_POST['capnhat'])) {
                    $target_dir = "../uploadProducts/";
                    $target_file = $target_dir . basename($_FILES['hinhanh']['name']);
                    $id = isset($_POST['id']) ? $_POST['id'] : null;
            
                    if (!empty($_POST['tenloai']) && !empty($_POST['priceNew']) && !empty($_POST['mHang'])) {
                        $ten_sp = $_POST['tenloai'];
                        $gia_New = $_POST['priceNew']; 
                        $gia_Sale = $_POST['priceSale'];
                        $mHang = $_POST['mHang'];
                        $dacbiet = $_POST['dacbiet']; 
                        $mota = $_POST['mota']; 
                        
                        // Kiểm tra hình ảnh đã được tải lên chưa 
                        if (!empty($_FILES['hinhanh']['name'])) {
                            $hinh = $_FILES['hinhanh']['name'];
                            move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
                        } else {
                            // Nếu không tải được hình ảnh thì giữ nguyên ảnh cũ 
                            $load_one_products = loadOne_products($id);
                            $hinh = $load_one_products['hinh'];
                        }
                        // Gọi hàm cập nhật 
                        update_products($ten_sp, $gia_New, $gia_Sale, $mHang, $dacbiet, $hinh, $mota, $id);
                        $thong_bao = "Cập Nhật Thành Công Rồi Cưng Nhé";
                    } else {
                        $thong_bao = "Vui Lòng Nhập Đầy Đủ Thông Tin Bắt Buộc: Tên, Giá, Mã Loại...";
                    }
                }
                $listProducts = load_products();
                include "products/list.php";
                break;

                
                case 'dskh':
                    $list_users = load_users();
                    include "account/list.php";
                    break;
                case 'addkh': 
                    $thongBao = $thongBao1 = $thongBao2 = $thongBao3 = $thongBao4 = "";
                    if(isset($_POST['themmoi'])){
                        $target_dir = "../uploadaccount/";
                        $target_file = $target_dir .basename($_FILES['hinhanh']['name']);
                        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                        if(empty($_POST['tenkhach'])){
                            $thongBao = "Vui Lòng nhập họ tên nguời dùng";
                        }else if(empty($_POST['passWord'])){
                            $thongBao2 = "Vui lòng nhập mật khẩu";
                        }else if(empty($_POST['email'])){
                            $thongBao3 = "Vui lòng nhập email người dùng";
                        }else if(empty($_POST['adress'])){
                            $thongBao4 = "Vui lòng nhập địa chỉ người dùng";
                        }else if($_FILES['hinhanh']['size'] > 5000000){
                            $thongBao5 = "Vui lòng nhập đúng định dạng ảnh";
                        }else{
                            if(!empty($_POST['tenkhach']) && !empty($_POST['passWord'])){
                                move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
                                $ten_khach = checkk($_POST['tenkhach']);
                                $pass = checkk($_POST['passWord']);
                                $email = checkk($_POST['email']);
                                $adrees = checkk($_POST['adress']);
                                $hinh = checkk($_FILES['hinhanh']['name']);
                                $phone = checkk($_POST['phone']);
                                addAccount($pass, $ten_khach,  $hinh, $email, $phone, $adrees);
                                $thongBao6 = "Thêm thành công rồi!!";
                            }else{
                                echo "Loi them";
                            }
                        }
                    }
                    include "account/add.php";
                    break;
                case 'suakh':
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $listOneUser = loadOne_user($id); 
                    }
                    include "account/update.php";
                    break;
                case 'updatekh':
                    if (isset($_POST['themmoi'])) {
                        $target_dir = "../uploadaccount/";
                        $target_file = $target_dir . basename($_FILES['hinhanh']['name']);
                        $id = isset($_POST['id']) ? $_POST['id'] : null;

                        if(!empty($_POST['tenkhach']) && !empty($_POST['passWord'])){
                                $ten_khach = $_POST['tenkhach'];
                                $pass = $_POST['passWord'];
                                $email = $_POST['email'];
                                $adrees = $_POST['adress'];
                                $phone = $_POST['phone'];

                                if(!empty($_FILES['hinhanh']['name'])){
                                    // Kiểm tra tải hình ảnh lên chưa
                                    $hinh = $_FILES['hinhanh']['name'];
                                    move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
                                }else{
                                    // Nếu chưa thì giữ nguyên ảnh
                                    $listOneUser = loadOne_user($id); 
                                    $hinh = $listOneUser['hinh'];
                                }
                                update_account($pass, $ten_khach, $hinh, $email, $phone, $adrees, $id);
                                $thong_bao = "Cập Nhật Thành Công Rồi Cưng Nhé";
                        }else {
                            $thong_bao = "Vui Lòng Nhập Đầy Đủ Thông Tin Bắt Buộc: Tên, Mật Khẩu, Tên Đăng Nhập";
                        }
                    }
                    $list_users = load_users();
                    include "account/list.php";
                    break;
                case 'xoakh':
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        delete_account($id);
                        $list_users = load_users();
                        include 'account/list.php';
                    }
                    
                    break;
            case 'listComment':
                $listComment = listCommentAll();
                include "comment/listComment.php";
                break;
            case 'deleteCm':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delete_comment($id);
                    $listComment = listCommentAll();

                    include "comment/listComment.php";
                }
            default:
                include "home.php";
                break;
        }
    }
    include "footer.php"
?>