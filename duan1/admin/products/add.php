<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=addhh" method="POST" enctype="multipart/form-data">
            <div class="form-group form_content_container">
                <label> Tên loại </label> <br>
                <input type="text" name="tenloai" placeholder="nhập vào tên Sản Phẩm">
                <p style="color: red;"><?php if(isset($thongBao)&& $thongBao!="") echo $thongBao ?></p>
            </div>



            <div class="form-group mt-4">
                <label>Giá Sản Phẩm</label> <br>
                <input type="text" name="priceNew" placeholder="Nhập Giá Sản Phẩm">
                <p style="color: red;"><?php if(isset($thongBao1)&& $thongBao1!="") echo $thongBao1 ?></p>
            </div>

            <div class="form-group mt-4">
                <label>Giảm Giá</label> <br>
                <input type="text" name="priceSale" placeholder="Nhập Giá Sản Phẩm Đã Muốn Giảm">
                <p style="color: red;"><?php if(isset($thongBao2)&& $thongBao2!="") echo $thongBao2 ?></p>
            </div>

            <div class="form-group mt-3">
                <label for="exampleFormControlFile1">Chọn hình ảnh</label>
                <input type="file" class="form-control-file" name="hinhanh">
                <p style="color: red;"><?php if(isset($thongBao3)&& $thongBao3!="") echo $thongBao3 ?></p>
            </div>

            <div class="form-group mt-4">
                <label>Mô Tả</label> <br>
                <input type="text" name="mota" placeholder="Nhập Mô Tả Của Sản Phẩm">
            </div>


            <div class="form-group mt-4">   
                <label>Đặc Biệt</label> <br>
                <input type="text" name="dacbiet" placeholder="Nhập Đặc Biệt Của Sản Phẩm">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Danh Mục</label>
                <select class="form-control" id="exampleFormControlSelect1" name="mHang">
                    <option value="0">Chọn Danh Mục</option>
                    <?php foreach ($listCategory as $ddm) : ?>
                        <option value="<?php echo $ddm['ma_loai'] ?>"><?php echo $ddm['ten_loai'] ?></option>
                    <?php endforeach ?>
                </select></br>
                <p style="color: red;"><?php if (isset($thongBao4) && $thongBao4 != "") echo $thongBao4 ?></p>
            </div>

            
            <?php
            if (isset($thong_bao) && ($thong_bao != "")) echo $thong_bao;
            
            ?>
            <div class="t">
                <input class="d" type="submit" name="themmoi" value="THÊM MỚI">
                <a href="index.php?act=listProducts"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            

        </form>
    </div>
</div>