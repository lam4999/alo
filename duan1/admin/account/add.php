<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI NGƯỜI DÙNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addkh" method="POST" enctype="multipart/form-data">
            <div class="form-group form_content_container">
                <label>Họ Tên Người Dùng</label> <br>
                <input type="text" name="tenkhach" placeholder="nhập vào tên người dùng">
                <p style="coler: red;"><?php if(isset($thongBao)&& $thongBao!="") echo $thongBao ?></p>
            </div>

            

            <div class="form-group form_content_container">
                <label>Mật Khẩu Người Dùng</label> <br>
                <input type="text" name="passWord" placeholder="nhập vào mật khẩu">
                <p style="coler: red;"><?php if(isset($thongBao2)&& $thongBao2!="") echo $thongBao2 ?></p>
            </div>

            <div class="form-group form_content_container">
                <label>Email Người Dùng</label> <br>
                <input type="email" name="email" placeholder="nhập email">
                <p style="coler: red;"><?php if(isset($thongBao3)&& $thongBao3!="") echo $thongBao3 ?></p>
            </div>

            <div class="form-group form_content_container">
                <label>Adress Người Dùng</label> <br>
                <input type="text" name="adress" placeholder="nhập adress">
                <p style="coler: red;"><?php if(isset($thongBao4)&& $thongBao4!="") echo $thongBao4 ?></p>
            </div>

            <div class="form-group mt-3">
                <label for="exampleFormControlFile1">Chọn hình ảnh</label>
                <input type="file" class="form-control-file" name="hinhanh">
                <p style="coler: red;"><?php if(isset($thongBao5)&& $thongBao5!="") echo $thongBao5 ?></p>
            </div>

            <div class="form-group mt-4">
                <label>Số điện Thoại người Dùng</label> <br>
                <input type="text" name="phone" placeholder="nhập số điện thoại">
            </div>
            
            <?php
            if (isset($thongBao6) && ($thongBao6 != "")) echo $thongBao6;
            ?>
            <div class="t">
                <input class="d" type="submit" name="themmoi" value="THÊM MỚI">
                <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>

<!-- END HEADER -->