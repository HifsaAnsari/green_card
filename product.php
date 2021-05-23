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
		<main class="main mt-6 single-product">
			<div class="page-content mb-10 pb-6">
				<div class="container">
					<div class="product product-single row mb-7">
						<div class="col-md-6 sticky-sidebar-wrapper">
							<div class="product-gallery pg-vertical sticky-sidebar"
								data-sticky-options="{'minWidth': 767}">
								<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
									<figure class="product-image">
										<img src="images/product/product-1-1-580x652.jpg"
											data-zoom-image="images/product/product-1-1-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="images/product/product-1-2-580x652.jpg"
											data-zoom-image="images/product/product-1-2-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="images/product/product-1-3-580x652.jpg"
											data-zoom-image="images/product/product-1-3-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
									<figure class="product-image">
										<img src="images/product/product-1-4-580x652.jpg"
											data-zoom-image="images/product/product-1-4-800x900.jpg"
											alt="Women's Brown Leather Backpacks" width="800" height="900">
									</figure>
								</div>
								<div class="product-thumbs-wrap">
									<div class="product-thumbs">
										<div class="product-thumb active">
											<img src="images/product/product-1-1-109x122.jpg" alt="product thumbnail"
												width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="images/product/product-1-2-109x122.jpg" alt="product thumbnail"
												width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="images/product/product-1-3-109x122.jpg" alt="product thumbnail"
												width="109" height="122">
										</div>
										<div class="product-thumb">
											<img src="images/product/product-1-4-109x122.jpg" alt="product thumbnail"
												width="109" height="122">
										</div>
									</div>
									<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
									<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
								</div>
								<div class="product-label-group">
									<label class="product-label label-new">new</label>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product-details">
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

								<h1 class="product-name">Converse Training Shoes</h1>
								<div class="product-meta">
									SKU: <span class="product-sku">12345670</span>
									BRAND: <span class="product-brand">The Northland</span>
								</div>
								<div class="product-price">$113.00</div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 11 reviews )</a>
								</div>
								<p class="product-short-desc">Sed egestas, ante et vulputate volutpat, eros pede semper
									est, vitae luctus metus libero eu augue. Morbi purus liberpuro ate vol faucibus
									adipiscing.</p>
								<div class="product-form product-variations product-color">
									<label>Color:</label>
									<div class="select-box">
										<select name="color" class="form-control">
											<option value="" selected="selected">Choose an Option</option>
											<option value="white">White</option>
											<option value="black">Black</option>
											<option value="brown">Brown</option>
											<option value="red">Red</option>
											<option value="green">Green</option>
											<option value="yellow">Yellow</option>
										</select>
									</div>
								</div>
								<div class="product-form product-variations product-size">
									<label>Size:</label>
									<div class="product-form-group">
										<div class="select-box">
											<select name="size" class="form-control">
												<option value="" selected="selected">Choose an Option</option>
												<option value="s">Small</option>
												<option value="m">Medium</option>
												<option value="l">Large</option>
												<option value="xl">Extra Large</option>
											</select>
										</div>
										<a href="#" class="size-guide"><i class="d-icon-th-list"></i>Size Guide</a>
										<a href="#" class="product-variation-clean">Clean All</a>
									</div>
								</div>
								<div class="product-variation-price">
									<span>$239.00</span>
								</div>

								<hr class="product-divider">

								<div class="product-form product-qty">
									<div class="product-form-group">
										<div class="input-group mr-2">
											<button class="quantity-minus d-icon-minus"></button>
											<input class="quantity form-control" type="number" min="1" max="1000000">
											<button class="quantity-plus d-icon-plus"></button>
										</div>
										<a href="cart.php"><button
											class="btn-product  text-normal ls-normal font-weight-semi-bold"><i
												class="d-icon-bag"></i>Add to
											Cart</button></a>
									</div>
								</div>

								<hr class="product-divider mb-3">

								<div class="product-footer">
									<div class="social-links mr-4">
										<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="#" class="social-link social-twitter fab fa-twitter"></a>
										<a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
									</div>
									<span class="divider d-lg-show"></span>
									<a href="#" class="btn-product btn-wishlist mr-6"><i class="d-icon-heart"></i>Add to
										wishlist</a>
									<a href="#" class="btn-product btn-compare"><i class="d-icon-compare"></i>Add
										to
										compare</a>
								</div>
							</div>
						</div>
					</div>

					<div class="tab tab-nav-simple product-tabs">
						<ul class="nav nav-tabs justify-content-center" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#product-tab-description">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-additional">Additional information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-size-guide">Size Guide</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-reviews">Reviews (2)</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active in" id="product-tab-description">
								<div class="row mt-6">
									<div class="col-md-6">
										<h5 class="description-title mb-4 font-weight-semi-bold ls-m">Features</h5>
										<p class="mb-2">
											Praesent id enim sit amet.Tdio vulputate eleifend in in tortor.
											ellus massa. siti iMassa ristique sit amet condim vel, facilisis
											quimequistiqutiqu amet condim Dilisis Facilisis quis sapien. Praesent id
											enim sit amet.
										</p>
										<ul class="mb-8">
											<li>Praesent id enim sit amet.Tdio vulputate</li>
											<li>Eleifend in in tortor. ellus massa.Dristique sitii</li>
											<li>Massa ristique sit amet condim vel</li>
											<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet</li>
										</ul>
										<h5 class="description-title mb-3 font-weight-semi-bold ls-m">Specifications
										</h5>
										<table class="table">
											<tbody>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Material</th>
													<td class="pl-4">Praesent id enim sit amet.Tdio</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Claimed Size</th>
													<td class="pl-4">Praesent id enim sit</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark pl-0">Recommended Use
													</th>
													<td class="pl-4">Praesent id enim sit amet.Tdio vulputate eleifend
														in in tortor. ellus massa. siti</td>
												</tr>
												<tr>
													<th class="font-weight-semi-bold text-dark border-no pl-0">
														Manufacturer</th>
													<td class="border-no pl-4">Praesent id enim</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-6 pl-md-6 pt-4 pt-md-0">
										<h5 class="description-title font-weight-semi-bold ls-m mb-5">Video Description
										</h5>
										<figure class="p-relative d-inline-block mb-2">
											<img src="images/product/product.jpg" width="559" height="370"
												alt="Product" />
											<a class="btn-play btn-iframe" href="video/memory-of-a-woman.mp4">
												<i class="d-icon-play-solid"></i>
											</a>
										</figure>
										<div class="icon-box-wrap d-flex flex-wrap">
											<div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4 mr-10">
												<div class="icon-box-icon">
													<i class="d-icon-lock"></i>
												</div>
												<div class="icon-box-content">
													<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">2 year
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
													<h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">Free shipping
													</h4>
													<p>On orders over $50.00</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="product-tab-additional">
								<ul class="list-none">
									<li><label>Brands:</label>
										<p>SkillStar, SLS</p>
									</li>
									<li><label>Color:</label>
										<p>Blue, Brown</p>
									</li>
									<li><label>Size:</label>
										<p>Large, Medium, Small</p>
									</li>
								</ul>
							</div>
							<div class="tab-pane " id="product-tab-size-guide">
								<figure class="size-image mt-4 mb-4">
									<img src="images/product/size_guide.png" alt="Size Guide Image" width="217"
										height="398">
								</figure>
								<figure class="size-table mt-4 mb-4">
									<table>
										<thead>
											<tr>
												<th>SIZE</th>
												<th>CHEST(IN.)</th>
												<th>WEIST(IN.)</th>
												<th>HIPS(IN.)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>XS</th>
												<td>34-36</td>
												<td>27-29</td>
												<td>34.5-36.5</td>
											</tr>
											<tr>
												<th>S</th>
												<td>36-38</td>
												<td>29-31</td>
												<td>36.5-38.5</td>
											</tr>
											<tr>
												<th>M</th>
												<td>38-40</td>
												<td>31-33</td>
												<td>38.5-40.5</td>
											</tr>
											<tr>
												<th>L</th>
												<td>40-42</td>
												<td>33-36</td>
												<td>40.5-43.5</td>
											</tr>
											<tr>
												<th>XL</th>
												<td>42-45</td>
												<td>36-40</td>
												<td>43.5-47.5</td>
											</tr>
											<tr>
												<th>XXL</th>
												<td>45-48</td>
												<td>40-44</td>
												<td>47.5-51.5</td>
											</tr>
										</tbody>
									</table>
								</figure>
							</div>
							<div class="tab-pane " id="product-tab-reviews">
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

					<section class="pt-3 mt-10">
						<h2 class="title justify-content-center">Related Products</h2>

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
							<div class="product">
								<figure class="product-media">
									<a href="#">
										<img src="images/product/featured1.jpg" alt="product" width="280" height="315">
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
										<a href="shop-grid-3col.html">Clothing</a>
									</div>
									<h3 class="product-name">
										<a href="#">Solid Pattern in Summer Dress</a>
									</h3>
									<div class="product-price">
										<span class="price">$140.00</span>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">12</span>
											reviews
											)</a>
									</div>
								</div>
							</div>
							<div class="product">
								<figure class="product-media">
									<a href="#">
										<img src="images/product/featured2.jpg" alt="product" width="280" height="315">
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
										<a href="shop-grid-3col.html">Bags & Backpacks</a>
									</div>
									<h3 class="product-name">
										<a href="#">Mackintosh Poket Backpack</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">$125.99</ins><del class="old-price">$160.99</del>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:60%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
											)</a>
									</div>
								</div>
							</div>
							<div class="product">
								<figure class="product-media">
									<a href="#">
										<img src="images/product/featured3.jpg" alt="product" width="280" height="315">
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
										<a href="shop-grid-3col.html">Clothing</a>
									</div>
									<h3 class="product-name">
										<a href="#">Fashionable Orginal Trucker</a>
									</h3>
									<div class="product-price">
										<span class="price">$78.64</span>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:40%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">2</span> reviews
											)</a>
									</div>
								</div>
							</div>
							<div class="product">
								<figure class="product-media">
									<a href="#">
										<img src="images/product/featured4.jpg" alt="product" width="280" height="315">
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
										<a href="shop-grid-3col.html">Clothing</a>
									</div>
									<h3 class="product-name">
										<a href="#">Women Red Fur Overcoat</a>
									</h3>
									<div class="product-price">
										<span class="price">$184.00</span>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:80%"></span>
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
    include('include/footer.php');
    ?>