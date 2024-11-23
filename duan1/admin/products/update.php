<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="form-group form_content_container">
                <label> Tên loại </label> <br>
                <input type="text" name="tenloai" value="<?php echo $load_one_products['ten_hh'] ?>">
                <p style="coler: red;"><?php if(isset($thongBao)&& $thongBao!="") echo $thongBao ?></p>
            </div>



            <div class="form-group mt-4">
                <label>Giá Sản Phẩm</label> <br>
                <input type="text" name="priceNew" value="<?php echo $load_one_products['don_gia'] ?>">
                <p style="coler: red;"><?php if(isset($thongBao1)&& $thongBao1!="") echo $thongBao1 ?></p>
            </div>

            <div class="form-group mt-4">
                <label>Giảm Giá</label> <br>
                <input type="text" name="priceSale" value="<?php echo $load_one_products['giam_gia'] ?>">
                <p style="coler: red;"><?php if(isset($thongBao2)&& $thongBao2!="") echo $thongBao2 ?></p>
            </div>

            <div class="form-group mt-3">
                <label for="exampleFormControlFile1">Chọn hình ảnh</label>
                <img src="../uploadProducts/<?php echo $load_one_products['hinh'] ?>" alt="" width="70px" height="80px">
                <input type="file" class="form-control-file" name="hinhanh">
                <p style="coler: red;"><?php if(isset($thongBao3)&& $thongBao3!="") echo $thongBao3 ?></p>
            </div>

            <div class="form-group mt-4">
                <label>Mô Tả</label> <br>
                <input type="text" name="mota" value="<?php echo $load_one_products['mo_ta'] ?>">
            </div>


            <div class="form-group mt-4">
                <label>Đặc Biệt</label> <br>
                <input type="text" name="dacbiet" value="<?php echo $load_one_products['dac_biet'] ?>">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Danh Mục</label>
                <select class="form-control" id="exampleFormControlSelect1" name="mHang">
                    <option value="0">Chọn Danh Mục</option>
                    <?php $dm = load_category(); foreach ($dm as $ddm) : ?>
                        <option value="<?php echo $ddm['ma_loai'] ?>" <?php if($ddm['ma_loai'] == $load_one_products['ma_loai']) echo 'selected' ?>><?php echo $ddm['ten_loai'] ?></option>
                    <?php endforeach ?>
                </select></br>
                <p style="coler: red;"><?php if (isset($thongBao4) && $thongBao4 != "") echo $thongBao4 ?></p>
            </div>

            
            <?php
            if (isset($thong_bao) && ($thong_bao != "")) echo $thong_bao;
            ?>
            <div class="t">
                <input type="hidden" name="id" value="<?php echo $load_one_products['ma_hh'] ?>">
                <input class="d" type="submit" name="capnhat" value="CẬP NHẬT">
                <a href="index.php?act=listProducts"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>