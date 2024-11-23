<div class="row2">
  <div class="row2 font_title">
    <h1>THÊM MỚI LOẠI DANH MỤC</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">
      <div class="form-group form_content_container">
        <label> Tên loại </label> <br>
        <input type="text" name="tenloai" placeholder="nhập vào tên danh mục">
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlFile1">Chọn hình ảnh</label>
        <input type="file" class="form-control-file" name="hinhanh">    
      </div>
      <div class="form-group mt-4">
        <label>Mã loại </label> <br>
        <input type="text" name="trangthai" placeholder="nhập vào trang thái">
      </div>
      <?php
      if (isset($thong_bao) && ($thong_bao != "")) echo $thong_bao;
      ?>
      <div class="t">
        <input class="d" type="submit" name="themmoi" value="THÊM MỚI">
        <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>

    </form>
  </div>
</div>

<!-- END HEADER -->