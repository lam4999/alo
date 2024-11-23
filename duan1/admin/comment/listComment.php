<?php
if(!isset($_POST['page'])){
    $page = 1;
}else{
    $page = $_GET['page'];
}


$bd = ($page-1)*8;
$kt = $bd + 8;
$sql = "SELECT * FROM binh_luan limit $bd, $kt";
$bl = pdo_query($sql);
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH COMMENT</h1>
    </div>
    <div class="row2 font_title mt-2">
        <div class="form mt-3">
            <section class="intro">
                <div class="gradient-custom-2 h-100">
                    <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-dark table-bordered mb-0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Products</th>
                                                    <th scope="col">Comment</th>
                                                    <th scope="col">Start date</th>
                                                    <th scope="col">ACTIONS</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($listComment as $key => $comment) :
                                                ?>
                                                <?php $sp = loadOne_products($comment['ma_hh']);
                                                        $kh = loadOne_user($comment['ma_kh'])
                                                ?>
                                                    <tr class="text-center">
                                                        <td scope="row"><?php echo $kh['ho_ten'] ?></td>
                                                        <td scope="row"><img src="../uploadaccount/<?php echo $kh['hinh'] ?>" width="70px" height="80px"></td>
                                                        <td><?php echo $sp['ten_hh'] ?></td>
                                                        <td><?php echo $comment['noi_dung'] ?></td>
                                                        <td><?php echo $comment['ngay_bl'] ?></td>
                                                        <td>
                                                            <a href="index.php?act=deleteCm&id=<?php echo $comment['ma_bl'] ?>">
                                                                <button class="btn btn-light" onclick="return confirm('Do you really want to delete this product?')">Xóa</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center mt-2">
                <button type="button" class="btn btn-primary">Chọn Tất Cả</button>
                <a href="index.php?act=adddm"><button class="btn btn-primary" type="button">NHẬP THÊM</button></a>
            </div>
        </div>

    </div>
</div>