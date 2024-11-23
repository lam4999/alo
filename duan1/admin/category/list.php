<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI DANH MỤC</h1>
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
                                                    <th scope="col">IMAGES</th>
                                                    <th scope="col">STATUS</th>
                                                    <th scope="col">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $listCategory = load_category();
                                                if (!isset($listCategory) || !is_array($listCategory)) {
                                                    $listCategory = array();
                                                }
                                                foreach ($listCategory as $key => $category) :
                                                ?>
                                                    <tr class="text-center">
                                                        <td scope="row"><?php echo $key + 1 ?></td>
                                                        <td><?php echo $category['ten_loai'] ?></td>
                                                        <td class="tuan_handsome"><img src="../upload/<?php echo $category['hinh_anh'] ?>" alt="" width="100%" height="auto"></td>
                                                        <td><?php echo $category['trang_thai'] ?></td>
                                                        <td>
                                                            <a href="index.php?act=suadm&id=<?php echo $category['ma_loai']; ?>"><button class="btn btn-light">Sửa</button></a>
                                                            <a href="index.php?act=xoadm&id=<?php echo $category['ma_loai']; ?>">
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