<?php
include('include/doc.php');
?>

<body>

    <div class="page-wrapper">
        <h1 class="d-none"></h1>
        <?php
        include('include/topheader.php');
        ?>
        <!-- End Header -->
        <main class="main">
            <div class="page-content">
                <?php
                include('include/demo5_Menu.php');
                ?>

		<!-- End Header -->
		<main class="main">
			<div class="page-header"
				style="background:linear-gradient(0deg, rgb(31 31 31 / 30%), rgb(47 47 47 / 30%)), url(images/card/orion.jpg);background-size:cover; height: 600px;">
				
				<!-- <h1 class="page-title">Online Flight and Hotel Booking</h1> -->
				<!-- <ul class="breadcrumb">
					<li><a href="demo5.php"><i class="d-icon-home"></i></a></li>
					<li class="delimiter">/</li>
					<li>Products tagged “3 column”</li>
				</ul> -->
			</div>
	

			<div class="page-content mb-10 pb-6">
				<div class="container">
					<div class="row gutter-lg main-content-wrap">
						<aside style="display: none;" class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper" >
							<div class="sidebar-overlay"></div>
							<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
							<div class="sidebar-content">
								<div class="sticky-sidebar" data-sticky-options="{'top': 10}">
									<div class="filter-actions mb-4">
										<a href="#"
											class="sidebar-toggle-btn toggle-remain btn btn-outline btn-primary btn-rounded btn-icon-right">Filter<i
												class="d-icon-arrow-left"></i></a>
										<a href="#" class="filter-clean">Clean All</a>
									</div>
									<div class="widget widget-collapsible" style="display: none;">
										<h3 class="widget-title">All Categories</h3>
										<ul class="widget-body filter-items search-ul">
											<li><a href="#">Accessosries</a></li>
											<li>
												<a href="#">Bags</a>
												<ul style="display:block;" >
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
														class="btn btn-dark btn-filter btn-rounded">Filter</button>
												</div>
											</form><!-- End Filter Price Form -->
										</div>
									</div>
									<!-- <div class="widget widget-collapsible">
										<h3 class="widget-title">Size</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">1 Room with 2 Beds</a></li>
											<li><a href="#">2 Room with 4 Beds</a></li>
											<li><a href="#">Luxury Room</a></li>
											<li><a href="#">Super Luxury Room</a></li>
										</ul>
									</div> -->
									<!-- <div class="widget widget-collapsible">
										<h3 class="widget-title">Color</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black</a></li>
											<li><a href="#">Blue</a></li>
											<li><a href="#">Green</a></li>
											<li><a href="#">White</a></li>
										</ul>
									</div> -->
									<!-- <div class="widget widget-collapsible">
										<h3 class="widget-title">Hotels</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Iridium Hotel</a></li>
											<li><a href="#">Jeddah. Hotel</a></li>
											<li><a href="#">Dallah Taibah Hotel</a></li>
											<li><a href="#">Sukoon Hotel</a></li>
											<li><a href="#">The Ritz-Carlton Jeddah.</a></li>
										</ul>
									</div> -->
								</div>
							</div>
						</aside>
						<div class="col-lg-12 main-content">
							<nav class="toolbox sticky-toolbox sticky-content fix-top">
								<div class="toolbox-left">
									<a href="#"
										class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary 
											btn-rounded btn-icon-right d-lg-none">Filter<i
											class="d-icon-arrow-right"></i></a>
								<!-- 	<div class="toolbox-item toolbox-sort select-box text-dark">
										<label>Sort By :</label>
										<select name="orderby" class="form-control">
											<option value="default">Default</option>
											<option value="popularity" selected="selected">Most Popular</option>
											<option value="rating">Average rating</option>
											<option value="date">Latest</option>
											<option value="price-low">Sort forward price low</option>
											<option value="price-high">Sort forward price high</option>
											<option value="">Clear custom sort</option>
										</select>
									</div>
								</div> -->
								<!-- <div class="toolbox-right">
									<div class="toolbox-item toolbox-show select-box text-dark">
										<label>Show :</label>
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div> -->
									<!-- <div class="toolbox-item toolbox-layout">
										<a href="shop-list.html" class="d-icon-mode-list btn-layout"></a>
										<a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
									</div> -->
								</div>
							</nav>
							<div class="row cols-2 cols-sm-3 product-wrapper">
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/amazon-card.png" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-price">
												<ins class="new-price">Amazon Gift Card</ins>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/walmart-card.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											
											<div class="product-price">
												
												<ins class="new-price">Walmart Gift Card</ins>
											</div>
										
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/apple-card.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-price">
												
												<span class="price"> Apple Gift Card</span>
											</div>
											
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/macys-card.png" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-price">
												<span class="price">MACYS Gift Card</span>
											</div>
											
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/home-depot.png" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-price">
												<span class="price">Home Depot Gift Card</span>
											</div>
											
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/wayfair.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											
											
											<div class="product-price">
												<ins class="new-price">Wayfair Gift Card</ins>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/dunkin.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											
											
											<div class="product-price">
												
												<span class="price">Dunkin Donuts Gift Card</span>
											</div>
												
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/uber.png" alt="product" width="280" height="315">
											</a>
											
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											
											<div class="product-price">
												<span class="price">Uber Gift Card</span>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/dominos.jpeg" alt="product" width="280" height="315">
											</a>
											
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											
											<div class="product-price">
												<span class="price">Dominos Gift Card</span>
											</div>
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/target.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											
											<div class="product-price">
												<span class="price">Target Gift Card</span>
												
											</div>
											
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/adidas.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-price">
												<span class="price">Adidas Gift Card</span>
												
											</div>
											
										</div>
									</div>
								</div>
								<div class="product-wrap">
									<div class="product">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/card/gamestop.png" alt="product" width="280" height="315">
											</a>
											
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
													data-target="#addCartModal" title="Add to cart"><i
														class="d-icon-bag"></i></a>
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
											</div>
											<div class="product-action" style="display:none;">
												<a href="#" class="btn-product btn-quickview" title="Book Now">Book
													Now</a>
											</div>
										</figure>
										<div class="product-details">
											
											<div class="product-price">
												<ins class="new-price">Game Stop Gift Card</ins>
												
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<nav class="toolbox toolbox-pagination" style="display: none;">
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
                include('include/footer.php');
                ?>