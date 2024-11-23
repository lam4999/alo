<?php

$listCategory = load_category();
if(!isset($_GET['page'])){
	$page = 1;
}else{
	$page = $_GET['page'];
}
$listProducts = load_products();
$bd = ($page - 1) * 7;
$kt = $page + 7;
$sql = "select * from hang_hoa order by ma_hh desc limit $bd, $kt";
$listProducts = pdo_query($sql);


?>
<main>
<div id="carousel-home">
			<div class="owl-carousel owl-theme">
				<?php foreach($listCategory as $listCate): ?>
					<div class="owl-slide cover">
						<img src="upload/<?php echo $listCate['hinh_anh'] ?>" width="100%" height="auto">
						<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
							<div class="container">
								<div class="row justify-content-center justify-content-md-end">
									<div class="col-lg-6 static">
										<div class="slide-text text-end white">
											<h2 class="owl-slide-animated owl-slide-title">Category<br><?php echo $listCate['ten_loai'] ?></h2>
											<p class="owl-slide-animated owl-slide-subtitle">
												<?php echo $listCate['trang_thai'] ?>
											</p>
											<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->
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
		
		<!-- /container -->

		<hr class="mb-0">
		
		<div class="container margin_60_35">
			<div class="main_title mb-4">
				<h2>New Arrival</h2>
				<span>Products</span>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="isotope_filter">
				<ul>
					<li><a href="#0" id="all" data-filter="*">All</a></li>
				</ul>
			</div>
			<div class="isotope-wrapper">
				<div class="row small-gutters">
                    <?php foreach($listProducts as $listPro): ?>
						<div class="col-6 col-md-4 col-xl-3 isotope-item sale">
							<div class="grid_item">
								<figure>
									<span class="ribbon off"><?php echo round(($listPro['don_gia'] - $listPro['giam_gia']) / $listPro['don_gia'] * 100)?>%</span>
									<a href="index.php?act=ct&id=<?php echo $listPro['ma_hh'] ?>">
										<img class="img-fluid lazy" src="uploadProducts/<?php echo $listPro['hinh'] ?>" data-src="uploadProducts/<?php echo $listPro['hinh'] ?>" alt="">
									</a>
									<div class="countdown"><?php echo $listPro['ngay_nhap'] ?></div>
								</figure>
								
								<div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
								<a href="product-detail-1.html">
									<h3><?php echo $listPro['ten_hh'] ?></h3>
								</a>
								<div class="price_box">
									<span class="new_price"><?php echo number_format($listPro['giam_gia']) ?>VND</span>
									<span class="old_price"><?php echo number_format($listPro['don_gia']) ?>VND</span>
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
				<!-- /row -->
			</div>
				
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<?php for ($i = 1; $i <= ceil(count($listProducts) / 7); $i++) : ?>
							<li class="page-item">
								<a href="index.php?act=viewsp&page=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
							</li>
						<?php endfor ?>
					</ul>
				</nav>
				
			<!-- /isotope-wrapper -->
		</div>
		<!-- /container -->
		
		
		
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Latest News</h2>
				<span>Blog</span>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<a class="box_news" href="blog.html">
						<figure>
							<img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-1.jpg" alt="" width="400" height="266" class="lazy">
							<figcaption><strong>28</strong>Dec</figcaption>
						</figure>
						<ul>
							<li>by Mark Twain</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Pri oportere scribentur eu</h4>
						<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
					</a>
				</div>
				<!-- /box_news -->
				<div class="col-lg-6">
					<a class="box_news" href="blog.html">
						<figure>
							<img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-2.jpg" alt="" width="400" height="266" class="lazy">
							<figcaption><strong>28</strong>Dec</figcaption>
						</figure>
						<ul>
							<li>By Jhon Doe</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Duo eius postea suscipit ad</h4>
						<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
					</a>
				</div>
				<!-- /box_news -->
				<div class="col-lg-6">
					<a class="box_news" href="blog.html">
						<figure>
							<img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-3.jpg" alt="" width="400" height="266" class="lazy">
							<figcaption><strong>28</strong>Dec</figcaption>
						</figure>
						<ul>
							<li>By Luca Robinson</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Elitr mandamus cu has</h4>
						<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
					</a>
				</div>
				<!-- /box_news -->
				<div class="col-lg-6">
					<a class="box_news" href="blog.html">
						<figure>
							<img src="img/blog-thumb-placeholder.jpg" data-src="img/blog-thumb-4.jpg" alt="" width="400" height="266" class="lazy">
							<figcaption><strong>28</strong>Dec</figcaption>
						</figure>
						<ul>
							<li>By Paula Rodrigez</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Id est adhuc ignota delenit</h4>
						<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
					</a>
				</div>
				<!-- /box_news -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->