<?php
    function loadall_sanpham_mausac($id_sanpham){
        $sql = "SELECT sanpham_mausac.id, sanpham.id as idsp ,sanpham_mausac.id_mausac,sanpham.ten ,hinh ,mota,xuatxu,phongcach,mausac,soluong ,gia,trangthai ,danhmuc.ten as tendm from sanpham_mausac
                join mausac on mausac.id = sanpham_mausac.id_mausac
                join sanpham on sanpham.id = sanpham_mausac.id_sanpham
                join danhmuc on danhmuc.id = sanpham.iddm
                where sanpham_mausac.id_sanpham = $id_sanpham ";
                $listchitiet = pdo_query($sql);
                return $listchitiet;
    }
    function loadall_sanpham_mausac_view($id_sanpham){
        $sql = "SELECT sanpham_mausac.id, sanpham.id as idsp ,sanpham_mausac.id_mausac,sanpham.ten ,hinh ,mausac,soluong ,gia,trangthai ,danhmuc.ten as tendm ,mota,xuatxu,phongcach from sanpham_mausac
                join mausac on mausac.id = sanpham_mausac.id_mausac
                join sanpham on sanpham.id = sanpham_mausac.id_sanpham
                join danhmuc on danhmuc.id = sanpham.iddm
                where sanpham_mausac.id_sanpham = $id_sanpham and trangthai =1";
                $listchitiet = pdo_query($sql);
                return $listchitiet;
    }
    function loadone_sanpham_mausac($id){
        $sql = "select *,sanpham_mausac.id as id_sp_tt,ten,mausac,gia from sanpham_mausac 
        join mausac on mausac.id = sanpham_mausac.id_mausac
        join sanpham on sanpham.id =sanpham_mausac.id_sanpham
        where sanpham_mausac.id = $id ";
        $sp_tt = pdo_query_one($sql);
        return $sp_tt;
    }
    function insert_sanpham_mausac($id_sanpham, $id_mausac, $gia , $soluong){
        $sql= "INSERT INTO sanpham_mausac(id_sanpham, id_mausac, gia, soluong) VALUES ($id_sanpham, $id_mausac, $gia , $soluong)";
        pdo_execute($sql); 
    }
    function update_sanpham_mausac($id,$id_sanpham, $id_mausac, $gia , $soluong){
        $sql ="update sanpham_mausac set id_sanpham = $id_sanpham , id_mausac= $id_mausac , gia = $gia , soluong = $soluong where id = $id";
        pdo_execute($sql);
    }
    function delete_sanpham_mausac($id){
        $sql ="update sanpham_mausac set trangthai = 2 where id = $id";
        pdo_execute($sql);
    }
    function restore_sanpham_mausac($id){
        $sql ="update sanpham_mausac set trangthai = 1 where id = $id";
        pdo_execute($sql);
    }
    function insert_sanpham($ten, $hinh, $xuatxu , $phongcach , $mota, $iddm){
        $sql= "INSERT INTO sanpham(ten,hinh,xuatxu,phongcach,mota,iddm) 
        VALUES ('$ten', '$hinh', '$xuatxu' , '$phongcach' , '$mota', $iddm)";
        pdo_execute($sql); 
    }
    function loadall_sanpham($kyw,$iddm =0){
        $sql = "SELECT sanpham.id,sanpham_mausac.id as id_bienthe ,sanpham.ten as tensp ,danhmuc.ten as tendm,hinh,xuatxu,phongcach,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_mausac on sanpham.id = sanpham_mausac.id_sanpham  
        left join mausac on mausac.id = sanpham_mausac.id_mausac
        join danhmuc on sanpham.iddm = danhmuc.id ";
        if($iddm>0){
            $sql .=" where iddm=$iddm";
        }
        if($kyw!=""){
           $sql .= " where sanpham.ten like '%$kyw%'";
        }
        $sql .= " group by sanpham.id order by sanpham.id asc ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id,$ten, $hinh, $xuatxu , $phongcach , $mota, $iddm){
        $sql= "update sanpham set ten = '$ten' , xuatxu = '$xuatxu', phongcach ='$phongcach', mota = '$mota', iddm = $iddm";
        if($hinh!=''){
           $sql.=",hinh = '$hinh'" ;
        }
        $sql.=" where id = $id ";
       
        pdo_execute($sql);
    }
    
    function top5_sanphamnew_in_danhmuc($iddm){
        $sql = "SELECT slogan,sanpham.id ,sanpham.ten as tensp ,danhmuc.ten as tendm,hinh,xuatxu,phongcach,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_mausac on sanpham.id = sanpham_mausac.id_sanpham  
        left join mausac on mausac.id = sanpham_mausac.id_mausac
        join danhmuc on sanpham.iddm = danhmuc.id
        where iddm = $iddm and trangthai = 1
        group by sanpham.id
        order by sanpham.id asc 
        limit 5 ";
        $spnew = pdo_query($sql);
        return $spnew;
    }
    function cac_sp_lienquan($iddm,$id_sanpham){
        $sql = "SELECT slogan,sanpham.id ,sanpham.ten as tensp ,danhmuc.ten as tendm,hinh,xuatxu,phongcach,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_mausac on sanpham.id = sanpham_mausac.id_sanpham  
        left join mausac on mausac.id = sanpham_mausac.id_mausac
        join danhmuc on sanpham.iddm = danhmuc.id
        where iddm = $iddm and trangthai = 1 and sanpham.id <> $id_sanpham
        group by sanpham.id
        order by sanpham.id asc ";
        $splq = pdo_query($sql);
        return $splq;
    }
    function load_mausac_in_sanpham($id){
        $sql = "select sanpham_mausac.id, mausac,gia from sanpham_mausac 
        join mausac on mausac.id = sanpham_mausac.id_mausac
        where id_sanpham = $id and trangthai =1";
        $mausac = pdo_query($sql);
        return $mausac; 
    }
    function hinhanh_sanpham($id_sanpham){
        $sql = "SELECT hinh FROM  sanpham 
        WHERE sanpham.id = $id_sanpham";
        $hinh = pdo_query_one($sql);
        return $hinh['hinh'];
    }
    function loadall_sanpham_mausac_chitiet($kyw, $iddm = 0, $loc = 0) {
        $sql = "SELECT 
                    slogan,
                    sanpham.id,
                    sanpham.ten as tensp,
                    danhmuc.ten as tendm,
                    hinh,
                    xuatxu,
                    phongcach,
                    mota,
                    soluong,
                    gia,
                    sum(soluong) as tongsoluong,
                    max(gia) as giamax,
                    min(gia) as giamin 
                FROM sanpham
                LEFT JOIN sanpham_mausac ON sanpham.id = sanpham_mausac.id_sanpham  
                LEFT JOIN mausac ON mausac.id = sanpham_mausac.id_mausac
                JOIN danhmuc ON sanpham.iddm = danhmuc.id
                WHERE trangthai = 1";
        
        // Thêm điều kiện lọc theo danh mục nếu $iddm > 0
        if ($iddm > 0) {
            $sql .= " AND iddm = $iddm";
        }
    
        // Thêm điều kiện tìm kiếm từ khóa nếu $kyw không rỗng
        if (!empty($kyw)) {
            $sql .= " AND sanpham.ten LIKE '%$kyw%'";
        }
    
        // Nhóm theo id sản phẩm
        $sql .= " GROUP BY sanpham.id";
    
        // Sắp xếp dữ liệu theo giá trị $loc
        switch ($loc) {
            case 'sap-xep-tang':
                $sql .= " ORDER BY sanpham.ten ASC";
                break;
            case 'sap-xep-giam':
                $sql .= " ORDER BY sanpham.ten DESC";
                break;
            case 'gia-tang-dan':
                $sql .= " ORDER BY giamin ASC";
                break;
            case 'gia-giam-dan':
                $sql .= " ORDER BY giamin DESC";
                break;
            default:
                $sql .= " ORDER BY sanpham.id ASC";
        }
    
        // Thực thi câu truy vấn
        $spnew = pdo_query($sql);
        return $spnew;
    }
    
    //tổng kho của 1 biến thể
    function check_tongkho($id_sanpham_mausac){
        $sql = "select soluong from sanpham_mausac";
        $tongkho = pdo_query_one($sql);
        return $tongkho['soluong'];  
    }function tongsanpham(){
        $sql = "select sum(soluong) as tongsp from sanpham_mausac";
        $tongsp = pdo_query_one($sql);
        return $tongsp['tongsp'];
    }
    function sanphamsaphet(){
        $sql = "select count(*) as tongspsaphet from sanpham_mausac
        where soluong <=10 ";
        $sp = pdo_query_one($sql);
        return $sp['tongspsaphet'];
    }
    function check_gia_ten_mausac_in_sp_tt($id_sanpham_mausac){
        $sql = "SELECT gia,ten,mausac from sanpham_mausac
        join sanpham on sanpham_mausac.id_sanpham = sanpham.id
        join mausac on sanpham_mausac.id_mausac =mausac.id
        where sanpham_mausac.id=$id_sanpham_mausac";
        $sptt = pdo_query_one($sql);
        return $sptt;
    }
    function check_mausac_in_sanpham($id_sanpham){
        $sql = "select count(*) tongmausac from sanpham_mausac
        where id_sanpham =$id_sanpham";
        $sp = pdo_query_one($sql);
        return $sp['tongmausac'];
    }
?>