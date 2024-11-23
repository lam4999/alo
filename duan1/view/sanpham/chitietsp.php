<?php
$id = $_GET['id'];
    if(isset($_POST['comment'])){
        if(!empty($_POST['postComment'])){
            $idUser = $user['ma_kh'];
            $content = $_POST['postComment'];
            $date = date('Y-m-d');
            addComment($content, $id ,$idUser, $date);
            header('index.php?act=ct&id=$id');
        }
    }

    
?>
<main>
    <div class="container margin_30">
        <div class="countdown_inner">-20% This offer ends in <div data-countdown="2019/05/15" class="countdown"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="all">
                    <div class="slider">
                        <div class="owl-carousel owl-theme main">
                            <img src="uploadProducts/<?php echo $sp['hinh'] ?>" alt="../uploadProducts/<?php echo $sp['hinh'] ?>" class="item-box" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href=""><?php echo $user['ma_kh'] ?></a></li>
                        <li><a href=""><?php echo $dm['ten_loai'] ?></a></li>
                        <li><?php echo $sp['ten_hh'] ?></li>
                    </ul>
                </div>
                <!-- /page_header -->
                <div class="prod_info">
                    <h1><?php echo mb_strtoupper($sp['ten_hh']) ?></h1>
                    <!-- <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span> -->
                    <p><small>SKU: <?php echo $sp['dac_biet'] ?></small><br>
                    Sed ex labitur adolescens scriptorem. Te saepe verear tibique sed. Et wisi ridens vix, lorem iudico blandit mel cu. Ex vel sint zril oportere, amet wisi aperiri te cum.</p>
                    <div class="prod_options">
                        <div class="row">
                            <label class="col-xl-5 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-6 colors">
                                <ul>
                                    <li><a href="#0" class="color color_1 active"></a></li>
                                    <li><a href="#0" class="color color_2"></a></li>
                                    <li><a href="#0" class="color color_3"></a></li>
                                    <li><a href="#0" class="color color_4"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-bs-toggle="modal" data-bs-target="#size-modal"><i class="ti-help-alt"></i></a></label>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                <div class="custom-select-form">
                                    <select class="wide">
                                        <option value="" selected>Small (S)</option>
                                        <option value="">M</option>
                                        <option value=" ">L</option>
                                        <option value=" ">XL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                <div class="numbers-row">
                                    <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="price_main"><span class="new_price"><?php echo number_format($sp['giam_gia']) ?></span><span class="percentage"><?php echo round(($sp['don_gia'] - $sp['giam_gia']) / $sp['don_gia'] * 100)?>%</span> <span class="old_price"><?php echo number_format($sp['don_gia']) ?></span></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>
                        </div>
                    </div>
                </div>
                <!-- /prod_info -->
                <div class="product_actions">
                    <ul>
                        <li>
                            <a href="#"><i class="ti-heart"></i><span>Add to Wishlist</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="ti-control-shuffle"></i><span>Add to Compare</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /product_actions -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="tabs_product">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /tabs_product -->
    <div class="tab_content_wrapper">
        <div class="container">
            <div class="tab-content" role="tablist">
                <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
                    <div class="card-header" role="tab" id="heading-A">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                                Description
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <h3>Details</h3>
                                    <p><?php echo $sp['mo_ta'] ?></p>
                                </div>
                                <div class="col-lg-5">
                                    <h3>Specifications</h3>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Color</strong></td>
                                                    <td>Blue, Purple</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Size</strong></td>
                                                    <td>150x100x100</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Weight</strong></td>
                                                    <td>0.6kg</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Manifacturer</strong></td>
                                                    <td>Manifacturer</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /TAB A -->
                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                Reviews
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <div class="review_content">
                                        <div class="card">
                                            <div class="row">
                                                <?php foreach($blhh as $listComment): ?>
                                                    <?php $ac = loadOne_user($listComment['ma_kh']); ?>
                                                <div class="d-flex flex-row p-3">
                                                    <img src="https://i.imgur.com/xELPaag.jpg" width="40" height="40" class="rounded-circle mr-3">
                                                    <div class="w-100 commentPost">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex flex-row align-items-center mb-2">
                                                            <span class="mr-2"><?php echo $ac['ho_ten'] ?></span>
                                                            <small class="c-badge ms-2">Top Comment</small>
                                                        </div>
                                                        <small><?php echo $listComment['ngay_bl'] ?></small>
                                                    </div>
                                                    <p class="text-justify comment-text mb-0"><?php echo $listComment['noi_dung'] ?></p>
                                                    <div class="d-flex flex-row user-feed mt-2">
                                                    <span class="wish"><i class="fa fa-heartbeat mr-2"></i>54</span>
                                                    <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span>
                                                    </div>
                                                    </div>
                                                </div>
                                                <?php endforeach ?>
                                                <div class="col-2">
                                                    <img src="https://i.imgur.com/xELPaag.jpg" width="70" class="rounded-circle mt-2">
                                                </div>
                                                <div class="col-10">
                                                    <form action="" method="post">
                                                        <div class="comment-box ml-2">
                                                            <h4>Add a comment</h4>
                                                            
                                                            <div class="comment-area">
                                                                <textarea class="form-control" placeholder="what is your view?" name="postComment" rows="10" cols="50"></textarea>
                                                            </div>
                                                            <div class="comment-btns mt-2">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <div class="pull-left">
                                                                            <button class="btn btn-success btn-sm">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="pull-right">
                                                                            <button type="submit" class="btn btn-success send btn-sm" name="comment">Send <i class="fa fa-long-arrow-right ml-1"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->

                                <!-- /row -->
                                <p class="text-end"><a href="leave-review.html" class="btn_1">Leave a review</a></p>
                            </div>
                            <!-- /card-body -->
                        </div>
                    </div>
                    <!-- /tab B -->
                </div>
                <!-- /tab-content -->
            </div>
            <!-- /container -->
        </div>
        <!-- /tab_content_wrapper -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Related</h2>
                <span>Products</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">
                    <?php foreach($related_product as $key => $listRelated): ?>
                        <div class="item">
                            <div class="grid_item">
                                <span class="ribbon new"><?php echo round(($listRelated['don_gia'] - $listRelated['giam_gia']) / $listRelated['don_gia'] * 100)?>%</span>
                                <figure>
                                    <a href="index.php?act=ct&id=<?php echo $listRelated['ma_hh'] ?>">
                                        <img class="owl-lazy" src="uploadProducts/<?php echo $listRelated['hinh'] ?>" data-src="uploadProducts/<?php echo $listRelated['hinh'] ?>" alt="">
                                    </a>
                                </figure>
                                <!-- <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div> -->
                                <a href="index.php?act=ct&id=<?php echo $listRelated['ma_hh'] ?>">
                                    <h3><?php echo $listRelated['ten_hh'] ?></h3>
                                </a>
                                <div class="price_box">
									<span class="new_price"><?php echo number_format($listRelated['giam_gia']) ?>VND</span>
									<span class="old_price"><?php echo number_format($listRelated['don_gia']) ?>VND</span>
								</div>
                                <ul>
                                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                                </ul>
                            </div>
                            <!-- /grid_item -->
                        </div>
                    <?php endforeach ?>
            </div>
            <!-- /products_carousel -->
        </div>
        <!-- /container -->

        <div class="feat">
            <div class="container">
                <ul>
                    <li>
                        <div class="box">
                            <i class="ti-gift"></i>
                            <div class="justify-content-center">
                                <h3>Free Shipping</h3>
                                <p>For all oders over $99</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <i class="ti-wallet"></i>
                            <div class="justify-content-center">
                                <h3>Secure Payment</h3>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <i class="ti-headphone-alt"></i>
                            <div class="justify-content-center">
                                <h3>24/7 Support</h3>
                                <p>Online top support</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--/feat-->

</main>