<?php
include('include/product/productDoc.php');
?>

<body class="shop">
	<div class="page-wrapper">

	<?php
include('include/product/productHeader.php');
?>
		<section class="mt-5">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-lg-12 mb-12">
                                <div class="tab tab-nav-center tab-nav-boxed tab-nav-solid tab-nav-boxed">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" href="e-store.php">E-Store</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="coupon-products.php">Coupons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="hotel-booking.php">Hotel and Flight Booking</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="demo5-shop.php">Products</a>
                                        </li>   
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab4-1">
                                        </div>
                                        
                                        <div class="tab-pane" id="tab4-2">
                                        </div>
                                        
                                        <div class="tab-pane" id="tab4-3">
                                        </div>
                                    </div> 
                                </div>
                            </div> -->
                        </div>
                    </div>
                </section>
		<!-- End Header -->
		<main class="main">
			
			<div class="page-content mb-10 pb-7">
				<div class="container">
					<div class="row main-content-wrap gutter-lg">
						<aside class="col-lg-3 sidebar sidebar-fixed shop-sidebar sticky-sidebar-wrapper">
							<div class="sidebar-overlay"></div>
							<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
							<div class="sidebar-content">
								<div class="sticky-sidebar">
									<div class="widget widget-collapsible">
										<h3 class="widget-title">All Categories</h3>
										<ul class="widget-body filter-items search-ul">
											<li><a href="#">Accessosries</a></li>
											<li>
												<a href="#">Bags</a>
												<ul>
													<li><a href="#">Backpacks & Fashion Bags</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Electronics</a>
												<ul>
													<li><a href="#">Computer</a></li>
													<li><a href="#">Gaming & Accessosries</a></li>
												</ul>
											</li>
											<li><a href="#">For Fitness</a></li>
											<li><a href="#">Home & Kitchen</a></li>
											<li><a href="#">Men's</a></li>
											<li><a href="#">Shoes</a></li>
											<li><a href="#">Sporting Goods</a></li>
											<li><a href="#">Summer Season's</a></li>
											<li><a href="#">Travel & Clothing</a></li>
											<li><a href="#">Watches</a></li>
											<li><a href="#">Women’s</a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Filter by Price</h3>
										<div class="widget-body mt-3">
											<form action="#">
												<div class="filter-price-slider"></div>

												<div class="filter-actions">
													<div class="filter-price-text mb-4">Price:
														<span class="filter-price-range"></span>
													</div>
													<button type="submit"
														class="btn btn-dark btn-rounded btn-filter">Filter</button>
												</div>
											</form><!-- End Filter Price Form -->
										</div>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Size</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Extra Large</a></li>
											<li><a href="#">Large</a></li>
											<li><a href="#">Medium</a></li>
											<li><a href="#">Small</a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Color</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black</a></li>
											<li><a href="#">Blue</a></li>
											<li><a href="#">Green</a></li>
											<li><a href="#">White</a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Brands</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Cinderella</a></li>
											<li><a href="#">Comedy</a></li>
											<li><a href="#">Rightcheck</a></li>
											<li><a href="#">SkillStar</a></li>
											<li><a href="#">SLS</a></li>
										</ul>
									</div>
								</div>
							</div>
						</aside>
						<div class="col-lg-9 main-content">
							<div class="shop-banner banner"
								style="background-image: url('images/demos/demo5/shop_banner.jpg'); background-color: #EFEFEF;">
								<div class="banner-content">
									<h1 class="banner-title ls-m text-uppercase"><strong
											class="mr-2">-50<sup>%</sup></strong><span
											class="font-weight-normal"><strong class="d-block">Sporting</strong>Goods
											Sale</span></h1>
									<h4 class="banner-subtitle text-body font-weight-normal">Spring/summer 2020
										collection</h4>
									<a href="demo5-shop.php" class="btn btn-outline btn-dark btn-rounded">Shop now</a>
								</div>
							</div>
							<nav class="toolbox sticky-toolbox sticky-content fix-top">
								<div class="toolbox-left">
									<a href="#"
										class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary btn-rounded d-lg-none">Filters<i
											class="d-icon-arrow-right"></i></a>
									<div class="toolbox-item toolbox-sort select-box">
										<label>Sort By :</label>
										<select name="orderby" class="form-control">
											<option value="default" selected="selected">Default sorting</option>
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sprt by average rating</option>
											<option value="date">Sort by latest</option>
											<option value="price-low">Sort by price: low to high</option>
											<option value="price-high">Sort by price: high to low</option>
										</select>
									</div>
								</div>
								<div class="toolbox-right">
									<div class="toolbox-item toolbox-show select-box">
										<label>Show :</label>
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div>
									<div class="toolbox-item toolbox-layout">
										<a href="shop-list.html" class="d-icon-mode-list btn-layout"></a>
										<a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
									</div>
								</div>
							</nav>
							<div class="row cols-2 cols-sm-3 product-wrapper">
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/1.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												<a href="product-masonry.html" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Shoes</a>
											</div>
											<h3 class="product-name">
												<a href="#">White Leather Shoes</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/2.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Watch</a>
											</div>
											<h3 class="product-name">
												<a href="#">Brown Strap Wrist Watch</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="#demo5-product.php">
												<img src="images/demos/demo5/products/3.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Watch</a>
											</div>
											<h3 class="product-name">
												<a href="#">Men's Black Wrist Watch</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/4.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Electronics</a>
											</div>
											<h3 class="product-name">
												<a href="#">Soft Sound Maker</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/5.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Cosmetics</a>
											</div>
											<h3 class="product-name">
												<a href="#">Women’s Face Cream</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/6.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Cosmetics</a>
											</div>
											<h3 class="product-name">
												<a href="#">Women’s Wide Tooth Comb</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/7.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Cosmetics</a>
											</div>
											<h3 class="product-name">
												<a href="#">Cosmetical Wristing Brush</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/8.jpg"
													alt="Blue Pinafore Denim Dress" width="280" height="280">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Bags</a>
											</div>
											<h3 class="product-name">
												<a href="#">Men's Black Handbag</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product text-center">
										<figure class="product-media" style="background-color: #F7F8FA;">
											<a href="demo5-product.php">
												<img src="images/demos/demo5/products/9.jpg"
													alt="Blue Pinafore Denim Dress" width="180" height="180">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action">
												 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a> -->
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo5-shop.php">Electronics</a>
											</div>
											<h3 class="product-name">
												<a href="#">Hand Electric Cell</a>
											</h3>
											<div class="product-price">
												<span class="price">$230.99</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( 6 reviews )</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<nav class="toolbox toolbox-pagination">
								<p class="show-info">Showing <span>12 of 56</span> Products</p>
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
											aria-disabled="true">
											<i class="d-icon-arrow-left"></i>Prev
										</a>
									</li>
									<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
									<li class="page-item">
										<a class="page-link page-link-next" href="#" aria-label="Next">
											Next<i class="d-icon-arrow-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
include('include/product/productFooter.php');
?>