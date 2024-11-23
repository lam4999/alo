<div class="row2">
   <div class="row2 font_title">
      <h1>CẬP NHẬT LOẠI DANH MỤC</h1>
   </div>
   <div class="row2 form_content ">
      <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
         <div class="row2 mb10 form_content_container">
            <label> Mã loại </label> <br>
            <input type="text" name="maloai" value="<?php echo $one_category['ma_loai'] ?>" disabled>
         </div>
         <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" value="<?php echo $one_category['ten_loai'] ?>">
         </div>
         <div class="form-group mt-3">
            <label for="exampleFormControlFile1">Chọn hình ảnh</label>
            <img src="../upload/<?php echo $one_category['hinh_anh'] ?>" alt="" width="70px" height="80px">
            <input type="file" class="form-control-file" name="hinhanh">    
         </div>
         <div class="row2 mb10">
            <label>Trạng thái </label> <br>
            <input type="text" name="trangthai" value="<?php echo $one_category['trang_thai'] ?>">
         </div>
         <div class="t
         ">
            <input type="hidden" name="id" value="<?php echo $one_category['ma_loai'] ?>">
            <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
            <input class="mr20" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
         </div>
         <?php
         if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
         ?>
      </form>
   </div>
</div>

<!-- END HEADER -->


</div>