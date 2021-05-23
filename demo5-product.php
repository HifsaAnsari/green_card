<?php
include('include/product/productDoc.php');
?>

<body>
	<div class="page-wrapper">

	<?php
include('include/product/productHeader.php');
?>
		<main class="main mt-6 single-product">
			<div class="page-content mb-10 pb-3">
				<div class="container">
					<div class="product product-single row">
						<div class="col-md-6 sticky-sidebar-wrapper">
							<div class="product-gallery row gutter-no sticky-sidebar"
								data-sticky-options="{'minWidth': 767}">
								<figure class="product-image mb-4" style="background-color: #F5F5F5;">
									<img src="images/demos/demo5/product/product-1-580x580.jpg"
										data-zoom-image="images/demos/demo5/product/product-1-800x900.jpg"
										alt="Blue Pinafore Denim Dress" width="800" height="900">
									<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
								</figure>
								<figure class="product-image mb-4" style="background-color: #F5F5F5">
									<img src="images/demos/demo5/product/product-2-580x580.jpg"
										data-zoom-image="images/demos/demo5/product/product-2-800x900.jpg"
										alt="Blue Pinafore Denim Dress" width="800" height="900">
									<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
								</figure>
								<figure class="product-image mb-4" style="background-color: #F5F5F5">
									<img src="images/demos/demo5/product/product-3-580x580.jpg"
										data-zoom-image="images/demos/demo5/product/product-3-800x900.jpg"
										alt="Blue Pinafore Denim Dress" width="800" height="900">
									<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
								</figure>
							</div>
						</div>
						<div class="col-md-6 sticky-sidebar-wrapper">
							<div class="product-details sticky-sidebar" data-sticky-options="{'minWidth': 767}">
								<div class="product-navigation">
									<ul class="breadcrumb breadcrumb-lg">
										<li><a href="demo5.php"><i class="d-icon-home"></i></a></li>
										<li><a href="#" class="active">Products</a></li>
										<li>Detail</li>
									</ul>

									<ul class="product-nav">
										<li class="product-nav-prev">
											<a href="#">
												<i class="d-icon-arrow-left"></i> Prev
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-prev.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
										<li class="product-nav-next">
											<a href="#">
												Next <i class="d-icon-arrow-right"></i>
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-next.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
									</ul>
								</div>

								<h1 class="product-name">Black Comfortable Sandals</h1>
								<div class="product-meta">
									SKU: <span class="product-sku">12345670</span>
									BRAND: <span class="product-brand">The Northland</span>
								</div>
								<div class="product-price">$139.00</div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6 reviews )</a>
								</div>
								<p class="product-short-desc">Sed egestas, ante et vulputate volutpat, eros pede semper
									est, vitae luctus metus libero eu augue. Morbi purus liberpuro ate vol faucibus
									adipiscing.</p>
								<hr class="product-divider">

								<div class="product-form product-qty">
									<div class="product-form-group">
										<div class="input-group mr-2">
											<button class="quantity-minus d-icon-minus"></button>
											<input class="quantity form-control" type="number" min="1" max="1000000">
											<button class="quantity-plus d-icon-plus"></button>
										</div>
										<a href="cart.php"><button
											class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold"><i
												class="d-icon-bag"></i>Add to
											Cart</button></a>
									</div>
								</div>

								<hr class="product-divider mb-3">

								<div class="product-footer mb-4">
									<div class="social-links mr-4">
										<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="#" class="social-link social-twitter fab fa-twitter"></a>
										<a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
									</div>
									<span class="divider d-lg-show"></span>
									<div class="product-action">
										<a href="#" class="btn-product btn-wishlist mr-6"><i
												class="d-icon-heart"></i>Add to
											wishlist</a>
										<a href="#" class="btn-product btn-compare"><i class="d-icon-compare"></i>Add to
											compare</a>
									</div>
								</div>
								<div class="accordion accordion-simple mb-4">
									<div class="card border-no card-description">
										<div class="card-header">
											<a href="#collapse1-1" class="collapse pl-0 pr-0">Description</a>
										</div>
										<div id="collapse1-1" class="card-body expanded pl-0 pr-0">
											<div class="row">
												<div class="col-12 mb-8">
													<h5 class="description-title font-weight-semi-bold ls-m">Features
													</h5>
													<p class="mb-2">
														Praesent id enim sit amet.Tdio vulputate eleifend in in tortor.
														ellus massa. siti iMassa ristique sit amet condim vel, facilisis
														quimequistiqutiqu amet condim Dilisis Facilisis quis sapien.
														Praesent id enim sit amet.
													</p>
													<ul class="mb-6 mt-2">
														<li>Praesent id enim sit amet.Tdio vulputate</li>
														<li>Eleifend in in tortor. ellus massa.Dristique sitii</li>
														<li>Massa ristique sit amet condim vel</li>
														<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet
														</li>
													</ul>
													<h5 class="description-title mb-3 font-weight-semi-bold ls-m">
														Specifications</h5>
													<table class="table">
														<tbody>
															<tr>
																<th class="font-weight-semi-bold text-dark pl-0">
																	Material</th>
																<td class="pl-4">Praesent id enim sit amet.Tdio</td>
															</tr>
															<tr>
																<th class="font-weight-semi-bold text-dark pl-0">Claimed
																	Size</th>
																<td class="pl-4">Praesent id enim sit</td>
															</tr>
															<tr>
																<th class="font-weight-semi-bold text-dark pl-0">
																	Recommended Use</th>
																<td class="pl-4">Praesent id enim sit amet.Tdio
																	vulputate eleifend in in tortor. ellus massa. siti
																</td>
															</tr>
															<tr>
																<th
																	class="font-weight-semi-bold text-dark border-no pl-0">
																	Manufacturer</th>
																<td class="border-no pl-4">Praesent id enim</td>
															</tr>
														</tbody>
													</table>
													<h5 class="description-title font-weight-semi-bold ls-m mb-5">Video
														Description</h5>
													<figure class="p-relative d-inline-block mb-3"
														style="background-color: #F5F5F5;">
														<img src="images/product/product.jpg" width="559" height="370"
															alt="Product" />
														<a class="btn-play btn-iframe"
															href="video/memory-of-a-woman.mp4">
															<i class="d-icon-play-solid"></i>
														</a>
													</figure>
													<div class="icon-box-wrap d-flex flex-wrap">
														<div
															class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4 mr-10">
															<div class="icon-box-icon">
																<i class="d-icon-lock"></i>
															</div>
															<div class="icon-box-content">
																<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">2
																	year
																	warranty</h4>
																<p>Guarantee with no doubt</p>
															</div>
														</div>
														<div class="divider d-xl-show mr-10"></div>
														<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4">
															<div class="icon-box-icon">
																<i class="d-icon-truck"></i>
															</div>
															<div class="icon-box-content">
																<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">
																	Free shipping
																</h4>
																<p>On orders over $50.00</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card card-reviews">
										<div class="card-header">
											<a href="#collapse1-4" class="expand pl-0 pr-0">Reviews (2)</a>
										</div>
										<div class="card-body collapsed pl-0 pr-0" id="collapse1-4">
											<div class="comments mb-8 pt-2 pb-2 border-no">
												<ul>
													<li>
														<div class="comment">
															<figure class="comment-media">
																<a href="#">
																	<img src="images/blog/comments/1.jpg" alt="avatar">
																</a>
															</figure>
															<div class="comment-body">
																<div class="comment-rating ratings-container mb-0">
																	<div class="ratings-full">
																		<span class="ratings" style="width:80%"></span>
																		<span class="tooltiptext tooltip-top">4.00</span>
																	</div>
																</div>
																<div class="comment-user">
																	<span class="comment-date text-body">September 22, 2020 at 9:42
																		pm</span>
																	<h4><a href="#">John Doe</a></h4>
																</div>
			
																<div class="comment-content">
																	<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
																		libero sodales leo,
																		eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.
																		Suspendisse potenti.
																		Sed egestas, ante et vulputate volutpat, eros pede semper
																		est, vitae luctus metus libero eu augue.</p>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="comment">
															<figure class="comment-media">
																<a href="#">
																	<img src="images/blog/comments/2.jpg" alt="avatar">
																</a>
															</figure>
			
															<div class="comment-body">
																<div class="comment-rating ratings-container mb-0">
																	<div class="ratings-full">
																		<span class="ratings" style="width:80%"></span>
																		<span class="tooltiptext tooltip-top">4.00</span>
																	</div>
																</div>
																<div class="comment-user">
																	<span class="comment-date text-body">September 22, 2020 at 9:42
																		pm</span>
																	<h4><a href="#">John Doe</a></h4>
																</div>
			
																<div class="comment-content">
																	<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
																		libero sodales leo, eget blandit nunc tortor eu nibh. Nullam
																		mollis.
																		Ut justo. Suspendisse potenti. Sed egestas, ante et
																		vulputate volutpat,
																		eros pede semper est, vitae luctus metus libero eu augue.
																		Morbi purus libero,
																		faucibus adipiscing, commodo quis, avida id, est. Sed
																		lectus. Praesent elementum
																		hendrerit tortor. Sed semper lorem at felis. Vestibulum
																		volutpat.</p>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<!-- End Comments -->
											<div class="reply">
												<div class="title-wrapper text-left">
													<h3 class="title title-simple text-left text-normal">Add a Review</h3>
													<p>Your email address will not be published. Required fields are marked *</p>
												</div>
												<div class="rating-form">
													<label for="rating" class="text-dark">Your rating * </label>
													<span class="rating-stars selected">
														<a class="star-1" href="#">1</a>
														<a class="star-2" href="#">2</a>
														<a class="star-3" href="#">3</a>
														<a class="star-4 active" href="#">4</a>
														<a class="star-5" href="#">5</a>
													</span>
			
													<select name="rating" id="rating" required="" style="display: none;">
														<option value="">Rate…</option>
														<option value="5">Perfect</option>
														<option value="4">Good</option>
														<option value="3">Average</option>
														<option value="2">Not that bad</option>
														<option value="1">Very poor</option>
													</select>
												</div>
												<form action="#">
													<textarea id="reply-message" cols="30" rows="6" class="form-control mb-4"
														placeholder="Comment *" required></textarea>
													<div class="row">
														<div class="col-md-6 mb-5">
															<input type="text" class="form-control" id="reply-name"
																name="reply-name" placeholder="Name *" required />
														</div>
														<div class="col-md-6 mb-5">
															<input type="email" class="form-control" id="reply-email"
																name="reply-email" placeholder="Email *" required />
														</div>
													</div>
													<div class="form-checkbox mb-4">
														<input type="checkbox" class="custom-checkbox" id="signin-remember"
															name="signin-remember" />
														<label class="form-control-label" for="signin-remember">
															Save my name, email, and website in this browser for the next time I
															comment.
														</label>
													</div>
													<button type="submit" class="btn btn-primary btn-rounded">Submit<i
															class="d-icon-arrow-right"></i></button>
												</form>
											</div>
											<!-- End Reply -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<section class="mt-10 pt-3">
						<h2 class="title title-center">Related Products</h2>

						<div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
							data-owl-options="{
							'items': 5,
							'nav': false,
							'loop': false,
							'dots': true,
							'margin': 20,
							'responsive': {
								'0': {
									'items': 2
								},
								'768': {
									'items': 3
								},
								'992': {
									'items': 4,
									'dots': false,
									'nav': true
								}
							}
						}">
							<div class="product text-center">
								<figure class="product-media" style="background-color: #F2F3F5;">
									<a href="#">
										<img src="images/demos/demo5/product/featured/1.jpg" alt="product" width="280"
											height="315">
									</a>
									<div class="product-label-group">
										<label class="product-label label-new">new</label>
									</div>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
									</div>
									<div class="product-action">
										 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a> -->
									</div>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="demo5-shop.php">Shoes</a>
									</div>
									<h3 class="product-name">
										<a href="#">Fashion NIKE Sneaker</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
											)</a>
									</div>
								</div>
							</div>
							<div class="product text-center">
								<figure class="product-media" style="background-color: #F2F3F5;">
									<a href="#">
										<img src="images/demos/demo5/product/featured/2.jpg" alt="product" width="280"
											height="315">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
									</div>
									<div class="product-action">
										 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a> -->
									</div>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="demo5-shop.php">Shoes</a>
									</div>
									<h3 class="product-name">
										<a href="#">Converse Kids Suede Shoes</a>
									</h3>
									<div class="product-price">
										<span class="price">$35.00</span>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:70%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
											)</a>
									</div>
								</div>
							</div>
							<div class="product text-center">
								<figure class="product-media" style="background-color: #F2F3F5;">
									<a href="#">
										<img src="images/demos/demo5/product/featured/3.jpg" alt="product" width="280"
											height="315">
									</a>

									<div class="product-label-group">
										<label class="product-label label-sale">27% off</label>
									</div>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
									</div>
									<div class="product-action">
										 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a> -->
									</div>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="demo5-shop.php">Shoes</a>
									</div>
									<h3 class="product-name">
										<a href="#">Fashion NIKE Sneaker</a>
									</h3>
									<div class="product-price">
										<span class="price">$19.00</span>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
											)</a>
									</div>
								</div>
							</div>
							<div class="product text-center">
								<figure class="product-media" style="background-color: #F2F3F5;">
									<a href="#">
										<img src="images/demos/demo5/product/featured/4.jpg" alt="product" width="280"
											height="315">
									</a>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
											data-target="#addCartModal" title="Add to cart"><i
												class="d-icon-bag"></i></a>
										<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
												class="d-icon-heart"></i></a>
									</div>
									<div class="product-action">
										 <!-- <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a> -->
									</div>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="demo5-shop.php">Shoes</a>
									</div>
									<h3 class="product-name">
										<a href="#">Women's Black Fashion Sneaker</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
											)</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</main>
		<?php
include('include/product/productFooter.php');
?>