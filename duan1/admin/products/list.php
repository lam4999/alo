<?php 

    if(!isset($_GET['page'])){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }

    $pa = ($page-1) * 4;
    $kt = $page + 4;
    $sql = "SELECT * FROM hang_hoa order by ma_hh desc limit $pa, $kt";
    $listProducts = pdo_query($sql);
?>

<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH SẢN PHẨM</h1>
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
                                                    <th scope="col">ID</th>
                                                    <th scope="col">NAME</th>
                                                    <th scope="col">PRICE</th>
                                                    <th scope="col">SALE PRICE</th>
                                                    <th scope="col">IMAGE</th>
                                                    <th scope="col">DATE</th>
                                                    <th scope="col">SPECIAL</th>
                                                    <th scope="col">VIEW</th>
                                                    <th scope="col">ID CATEGORY</th>
                                                    <th scope="col">CLICK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($listProducts as $key => $products) :
                                                ?>
                                                    <tr class="text-center">
                                                        <td scope="row"><?php echo $key + 1 ?></td>
                                                        <td><?php echo $products['ten_hh'] ?></td>
                                                        <td><?php echo number_format($products['don_gia']) ?></td>
                                                        <td><?php echo number_format($products['giam_gia']) ?></td>
                                                        <td><img src="../uploadProducts/<?php echo $products['hinh'] ?>" alt="" width="70px" height="80px"></td>
                                                        <td><?php echo $products['ngay_nhap'] ?></td>
                                                        <td><?php echo $products['dac_biet'] ?></td>
                                                        <td><?php echo $products['so_luot_xem'] ?></td>
                                                        <td><?php echo $products['ma_loai'] ?></td>
                                                        <td>
                                                            <a href="index.php?act=suasp&id=<?php echo $products['ma_hh']; ?>"><button class="btn btn-light">Sửa</button></a>
                                                            <a href="index.php?act=xoasp&id=<?php echo $products['ma_hh']; ?>">
                                                                <button class="btn btn-light" onclick="return confirm('Do you really want to delete this product?')">Xóa</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <div class="pagination mt-3">
                                            <?php for ($i = 1; $i <= ceil(count($listProducts) / 4); $i++) : ?>
                                                <a href="index.php?act=listProducts&page=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
                                            <?php endfor ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center mt-2">
                <button type="button" class="btn btn-primary">Chọn Tất Cả</button>
                <a href="index.php?act=addhh"><button class="btn btn-primary" type="button">NHẬP THÊM</button></a>
            </div>
        </div>

    </div>
</div>