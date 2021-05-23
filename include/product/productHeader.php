<header class="header header-border">
			<div class="header-top">
				<div class="container">
					<div class="header-left">
						<p class="welcome-msg"></p>
					</div>
					<div class="header-right">
						<div class="dropdown">
							<a href="#currency">USD</a>
							<ul class="dropdown-box">
								<li><a href="#USD">USD</a></li>
								<li><a href="#EUR">EUR</a></li>
							</ul>
						</div>
						<!-- End DropDown Menu -->
						<div class="dropdown ml-5">
							<a href="#language">ENG</a>
							<ul class="dropdown-box">
								<li>
									<a href="#USD">ENG</a>
								</li>
								<li>
									<a href="#EUR">ARB</a>
								</li>
							</ul>
						</div>
						<!-- End DropDown Menu -->
						<span class="divider"></span>
						<a href="contact-us.php" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
						<a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
						<a  href="login.php" >
                            Sign in</a>
                        <span class="delimiter">/</span>
						<a  href="account.php" >  Profile</a>
						<!-- End of Login -->
					</div>
				</div>
			</div>
			<!-- End HeaderTop -->
			<div class="header-middle sticky-header fix-top sticky-content">
				<div class="container">
					<div class="header-left">
						<a href="#" class="mobile-menu-toggle">
							<i class="d-icon-bars2"></i>
						</a>
						<a href="demo5.php" class="logo">
							<img src="images/demos/demo5/logo.png" alt="logo" width="153" height="44" />
						</a>
						<!-- End Logo -->

						<div class="header-search hs-simple">
							<form action="#" class="input-wrapper">
								<input type="text" class="form-control" name="search" autocomplete="off"
									placeholder="Search..." required />
								<button class="btn btn-search" type="submit">
									<i class="d-icon-search"></i>
								</button>
							</form>
						</div>
						<!-- End Header Search -->
					</div>
					<div class="header-right">
						<a href="tel:#" class="icon-box icon-box-side">
							<div class="icon-box-icon mr-0 mr-lg-2">
								<i class="d-icon-phone"></i>
							</div>
							<div class="icon-box-content d-lg-show">
								<h4 class="icon-box-title">Call Us Now:</h4>
								<p>123456789</p>
							</div>
						</a>
						<span class="divider mr-4"></span>
						<div class="notify" onclick="toggleNotifi()">
			<i class="fas fa-bell"></i><span>17</span>
		</div>
		<div class="notifi-box" id="box" styl>
			<h2>Notifications <span>17</span></h2>
			<div class="notifi-item">
				<img src="images/avatar1.png" alt="img">
				<div class="text">
				   <h4>Elias Abdurrahman</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="images/avatar2.png" alt="img">
				<div class="text">
				   <h4>John Doe</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="images/avatar3.png" alt="img">
				<div class="text">
				   <h4>Emad Ali</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="images/avatar4.png" alt="img">
				<div class="text">
				   <h4>Ekram Abu </h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="images/avatar5.png" alt="img">
				<div class="text">
				   <h4>Jane Doe</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>
            <div class="show_all">
             <a href="notification.php">
             <p class="link_show_activity">Show All Activities</p></a>
                </div> 
		</div>

						<a href="wishlist.php" class="wishlist">
							<i class="d-icon-heart"></i>
						</a>
						<span class="divider"></span>
						<div class="dropdown cart-dropdown type2 cart-offcanvas mr-0 mr-lg-2">
							<a href="#" class="cart-toggle label-block link">
								<div class="cart-label d-lg-show">
									<span class="cart-name">Shopping Cart:</span>
									<span class="cart-price">$0.00</span>
								</div>
								<i class="d-icon-bag"><span class="cart-count">2</span></i>
							</a>
							<div class="cart-overlay"></div>
							<!-- End Cart Toggle -->
							<div class="dropdown-box">
								<div class="cart-header">
									<h4 class="cart-title">Shopping Cart</h4>
									<a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
											class="d-icon-arrow-right"></i></a>
								</div>
								<div class="products scrollable">
									<div class="product product-cart">
										<figure class="product-media">
											<a href="#">
												<img src="images/cart/product-1.jpg" alt="product" width="80"
													height="88" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i>
											</button>
										</figure>
										<div class="product-detail">
											<a href="#" class="product-name">Greencard White Trends</a>
											<div class="price-box">
												<span class="product-quantity">1</span>
												<span class="product-price">$21.00</span>
											</div>
										</div>

									</div>
									<!-- End of Cart Product -->
									<div class="product product-cart">
										<figure class="product-media">
											<a href="#">
												<img src="images/cart/product-2.jpg" alt="product" width="80"
													height="88" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i>
											</button>
										</figure>
										<div class="product-detail">
											<a href="#" class="product-name">Dark Blue Women’s
												Leomora Hat</a>
											<div class="price-box">
												<span class="product-quantity">1</span>
												<span class="product-price">$118.00</span>
											</div>
										</div>
									</div>
									<!-- End of Cart Product -->
								</div>
								<!-- End of Products  -->
								<div class="cart-total">
									<label>Subtotal:</label>
									<span class="price">$139.00</span>
								</div>
								<!-- End of Cart Total -->
								<div class="cart-action">
									<a href="cart.php" class="btn btn-dark btn-link">View Cart</a>
									<a href="checkout.php" class="btn btn-dark"><span>Go To Checkout</span></a>
								</div>
								<!-- End of Cart Action -->
							</div>
							<!-- End Dropdown Box -->
						</div>
					</div>
				</div>
			</div>
			<!-- End of HeaderMiddle -->
			<div class="header-bottom d-lg-show">
				<div class="container">
					<div class="inner-wrap">
						<div class="header-left">
							<nav class="category-list">
								<ul class="menu">
									<li class="active">
										<a href="demo5-shop.php">Electronics</a>
									</li>
									<li>
										<a href="demo5-shop.php">Backpacks &amp; Fashion Bags</a>
									</li>
									<li>
										<a href="demo5-shop.php">Musical instruments</a>
									</li>
									<li>
										<a href="demo5-shop.php">Toy &amp; hobbies</a>
									</li>
									<li>
										<a href="demo5-shop.php">Travel &amp; clothing</a>
									</li>
									<li>
										<a href="demo5-shop.php">Computer</a>
									</li>

								</ul>
							</nav>
						</div>
						<div class="header-right mr-0">
							<nav class="other-links">
								<ul class="menu">
									<li class="d-xl-show">
										<a href="demo5-shop.php">Daily deals</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End of HeaderBottom -->
		</header>