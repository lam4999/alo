<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT NGƯỜI DÙNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatekh" method="POST" enctype="multipart/form-data">
            <div class="form-group form_content_container">
                <label>Họ Tên Người Dùng</label> <br>
                <input type="text" name="tenkhach" value="<?php echo $listOneUser['ho_ten'] ?>">
                <p style="coler: red;"><?php if(isset($thongBao)&& $thongBao!="") echo $thongBao ?></p>
            </div>

            
            <div class="form-group form_content_container">
                <label>Mật Khẩu Người Dùng</label> <br>
                <input type="text" name="passWord" value="<?php echo $listOneUser['mat_khau'] ?>">
                <p style="coler: red;"><?php if(isset($thongBao2)&& $thongBao2!="") echo $thongBao2 ?></p>
            </div>

            <div class="form-group form_content_container">
                <label>Email Người Dùng</label> <br>
                <input type="email" name="email" value="<?php echo $listOneUser['email'] ?>">
                <p style="coler: red;"><?php if(isset($thongBao3)&& $thongBao3!="") echo $thongBao3 ?></p>
            </div>

            <div class="form-group form_content_container">
                <label>Adress Người Dùng</label> <br>
                <input type="text" name="adress" value="<?php echo $listOneUser['adress'] ?>">
                <p style="coler: red;"><?php if(isset($thongBao4)&& $thongBao4!="") echo $thongBao4 ?></p>
            </div>

            <div class="form-group mt-3">
                <label for="exampleFormControlFile1">Chọn hình ảnh</label>
                <img src="../uploadaccount/<?php echo $listOneUser['hinh'] ?>" alt="" width="70px" height="80px">
                <input type="file" class="form-control-file" name="hinhanh">
                <p style="coler: red;"><?php if(isset($thongBao5)&& $thongBao5!="") echo $thongBao5 ?></p>
            </div>

            <div class="form-group mt-4">
                <label>Số điện Thoại người Dùng</label> <br>
                <input type="text" name="phone" value="<?php echo $listOneUser['phone'] ?>">
            </div>
            
            <?php
            if (isset($thongBao6) && ($thongBao6 != "")) echo $thongBao6;
            ?>
            <div class="t">
                <input type="hidden" name="id" value="<?php echo $listOneUser['ma_kh'] ?>">
                <input class="d" type="submit" name="themmoi" value="CẬP NHẬT">
                <a href="index.php?act=dskh"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>

<!-- END HEADER -->