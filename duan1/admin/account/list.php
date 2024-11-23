<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH NGƯỜI DÙNG</h1>
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
                                                    <th scope="col">PASS</th>
                                                    <th scope="col">STATUS</th>
                                                    <th scope="col">IMAGE</th>
                                                    <th scope="col">EMAIL</th>
                                                    <th scope="col">ROLE</th>
                                                    <th scope="col">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($list_users as $key => $user) :
                                                ?>
                                                    <tr class="text-center">
                                                        <td scope="row"><?php echo $key + 1 ?></td>
                                                        <td><?php echo $user['ho_ten'] ?></td>
                                                        <td><?php echo $user['mat_khau'] ?></td>
                                                        <td><?php echo $user['kich_hoat'] ?></td>
                                                        <td><img src="../uploadaccount/<?php echo $user['hinh'] ?>" alt="" width="70px" height="80px"></td>
                                                        <td><?php echo $user['email'] ?></td>
                                                        <td><?php echo $user['vai_tro'] ?></td>
                                                        <!-- <td><label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </td> -->
                                                        <td>
                                                            <a href="index.php?act=suakh&id=<?php echo $user['ma_kh']; ?>"><button class="btn btn-light">Sửa</button></a>
                                                            <a href="index.php?act=xoakh&id=<?php echo $user['ma_kh']; ?>">
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
                <a href="index.php?act=addkh"><button class="btn btn-primary" type="button">NHẬP THÊM</button></a>
            </div>
        </div>

    </div>
</div>