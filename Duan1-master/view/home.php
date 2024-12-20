<!-- Trang chủ -->

<!-- main slider start -->
<section class="bg-light">
  <div class="main-slider dots-style theme1">
    <div class="slider-item bg-img bg-img1">
      <div class="container">
        <div class="row align-items-center slider-height">
          <div class="col-12">
            <div class="slider-content">
              <p class="text animated" data-animation-in="fadeInDown" data-delay-in=".300">
                Vest
              </p>
              <h2 class="title animated">
                <span class="animated d-block" data-animation-in="fadeInLeft" data-delay-in=".800">Sang trọng</span>
                <span class="animated font-weight-bold" data-animation-in="fadeInRight" data-delay-in="1.5">Độc đáo</span>
              </h2>
              <a href="index.php?act=cuahang" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25"
                data-animation-in="fadeInLeft" data-delay-in="1.9">Xem Thêm</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-item end -->
    <div class="slider-item bg-img bg-img2">
      <div class="container">
        <div class="row align-items-center slider-height">
          <div class="col-12">
            <div class="slider-content">
              <p class="text animated" data-animation-in="fadeInLeft" data-delay-in=".300">
                Dress
              </p>

              <h2 class="title">
                <span class="animated d-block" data-animation-in="fadeInRight" data-delay-in=".800">Cao cấp</span>
                <span class="animated font-weight-bold" data-animation-in="fadeInUp" data-delay-in="1.5">Huyền bí</span>
              </h2>
              <a href="index.php?act=cuahang" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25"
                data-animation-in="fadeInLeft" data-delay-in="1.9">Xem THÊM</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-item end -->
    <div class="slider-item bg-img bg-img3">
      <div class="container">
        <div class="row align-items-center slider-height">
          <div class="col-12">
            <div class="slider-content">
              <p class="text animated" data-animation-in="fadeInLeft" data-delay-in=".300">
                Suit
              </p>
              <h2 class="title">
                <span class="animated d-block" data-animation-in="fadeInRight" data-delay-in=".800">Trẻ trung</span>
                <span class="animated font-weight-bold" data-animation-in="fadeInUp" data-delay-in="1.5">Thu hút</span>
              </h2>
              <a href="index.php?act=cuahang" class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25"
                data-animation-in="fadeInLeft" data-delay-in="1.9">Xem THÊM</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider-item end -->
  </div>
</section>
<!-- product tab start -->
<?php
$list_danhmuc = loadall_danhmuc();
?>
<?php foreach ($list_danhmuc as $dm) { ?>
  <section class="product-tab bg-white pt-50 pb-80">
    <div class="col-12">
      <div class="section-title text-center">
        <h2 class="title pb-3 mb-3"><?= $dm['ten'] ?></h2>
        <p class="text">
          "<?= $dm['slogan'] ?>"
        </p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="tab-content" id="pills-tabContent">
            <!-- first tab-pane -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="product-slider-init theme1 slick-nav">
                <?php
                $listspnew = top5_sanphamnew_in_danhmuc($dm['id']);
                foreach ($listspnew as $spnew):
                ?>
                  <div class="slider-item">
                    <div class="card product-card">
                      <div class="card-body p-0">
                        <div class="media flex-column">
                          <div class="product-thumbnail position-relative" style="width: 300px;height: 300px;">
                            <span class="badge badge-danger top-right">New</span>
                            <a href="index.php?act=sanphamct&id_sanpham=<?= $spnew['id'] ?>">
                              <img class="first-img" src="upload/<?= $spnew['hinh'] ?>" alt="thumbnail" />
                            </a>
                            <!-- product links -->
                            <ul class="actions d-flex justify-content-center">
                              <li>
                                <a class="action" href="index.php?act=sanphamct&id_sanpham=<?= $spnew['id'] ?>">
                                  <span data-bs-toggle="tooltip" data-placement="bottom" title="Xem chi tiết"
                                    class="icon-magnifier"></span>
                                </a>
                              </li>
                            </ul>
                            <!-- product links end-->
                          </div>
                          <div class="media-body">
                            <div class="product-desc">
                              <h3 class="title">
                                <a href="index.php?act=sanphamct&id_sanpham=<?= $spnew['id'] ?>"><?= $spnew['tensp'] ?></a>
                              </h3>

                              <div class="d-flex align-items-center justify-content-between">
                                <?php
                                $gia = number_format($spnew['giamin'], 0, ",", ".") . " - " . number_format($spnew['giamax'], 0, ",", ".");
                                if ($spnew['giamin'] == $spnew['giamax']) {
                                  $gia = number_format($spnew['giamin'], 0, ",", ".");
                                }
                                $gia .= " <u>đ</u>";
                                ?>
                                <span class="product-price"><?= $gia ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
<!-- product tab end -->

<?php
include "view/footer.php";
?>