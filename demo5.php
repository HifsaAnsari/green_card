<?php
include('include/doc.php');
?>
<body class="home">

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
            <?php
include('include/home.php');
?>


                <section class="service-list mt-10">
                    <div class="container">
                        <h2 class="title title-center mb-5">Get 25% Off on Every Product</h2>
                    <a href="coupon_detail.php"><img src="images/demos/demo5/banners/coupons.png"  style="width: 100%;"></a>
                    </div>
                </section>

                <section class="pt-2 appear-animate" style="margin-top: 100px;" data-animation-options="{
                    'delay': '.3s'
                }">
                    <div class="container">
                        <h2 class="title title-center mb-5">Users Comfort Zone</h2>
                        <div class=" row cols-lg-4 cols-md-3 cols-sm-2 cols-1" >
                           
                            <div class="col-lg-6 category category-default1 category-absolute banner-radius overlay-zoom" style="height: 350px;">
                                <a href="e-store.php">
                                    <figure class="category-media" style="background-color: #edd3c7;">
                                        <img src="images/demos/demo5/banners/e-store.jpg" alt="category"/>
                                    </figure>
                                </a>
                                <div class="category-content">
                                    <h4 class="category-name ls-l"><a href="e-store.php">E-Store</a>
                                    </h4>
                                </div>
                            </div>

                            <div class="col-lg-6  category category-default1 category-absolute banner-radius overlay-zoom" style="height: 350px;">
                                <a href="coupon-products.php">
                                    <figure class="category-media" style="background-color: #090909;">
                                        <img src="images/demos/demo5/banners/coupons.jpg" alt="category" />
                                    </figure>
                                </a>
                                <div class="category-content">
                                    <h4 class="category-name ls-l"><a href="coupon-products.php">Coupons</a></h4>
                                </div>
                            </div>

                            <div class="col-lg-6 category category-default1 category-absolute banner-radius overlay-zoom" style="height: 350px;">
                                <a href="hotel-booking.php">
                                    <figure class="category-media" style="background-color: #fcd772;">
                                        <img src="images/demos/demo5/banners/flight.jpg" alt="category" />
                                    </figure>
                                </a>
                                <div class="category-content">
                                    <h4 class="category-name ls-l"><a href="hotel-booking.php">Flight & Hotel Booking</a></h4>
                                </div>
                            </div>

                            <div class="col-lg-6 category category-default1 category-absolute banner-radius overlay-zoom" style="height: 350px;">
                                <a href="demo5-shop.php">
                                    <figure class="category-media" style="background-color: #9bc6cb;">
                                        <img src="images/demos/demo5/banners/products.png" alt="category" />
                                    </figure>
                                </a>
                                <div class="category-content font-weight-bold">
                                    <h4 class="category-name ls-l"><a href="demo5-shop.php">Products</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="mt-10">
                    <div class="container">
                         <h2 class="title title-center">Latest Products</h2>
                        <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'autoplay': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="product.php">
                                        <img src="images/products/product1.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="product.php">Beyond Top NLY Trend</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <a href="product.php" class="btn-product btn-cart"
                                        title="Select Options"><span>Select
                                            Options</span></a>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="product.php">
                                        <img src="images/products/product2.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="product.php">Osaka Entry Tee Superdry</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$35.00</span>
                                    </div>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i>Add to cart</a>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="product.php">
                                        <img src="images/products/product3.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="product.php">Pima SS O-Neck NOOS Homme</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$19.00</span>
                                    </div>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i>Add to cart</a>
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="product.php">
                                        <img src="images/products/product4.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="product.php">Blue Utility Pinafore Denim Dress</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <a href="product.php" class="btn-product btn-cart" title="Select Options">Select
                                        Options</a>
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="product.php">
                                        <img src="images/products/product10.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="product.php">Blue Utility Pinafore Denim Dress</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <a href="product.php" class="btn-product btn-cart" title="Select Options">Select
                                        Options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    </section>

                 <section class="mt-10" style="background-color: #a00000a8; padding-top: 20px;">
                    <div class="container">
                         <h2 class="title title-center" style="color: #fff;">Coupon Products</h2>
                        <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'autoplay': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="coupon-products.php">
                                        <img src="images/SHOP/1.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% Off</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="coupon-products.php" style="color: #fff;">Beyond Top NLY Trend</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <a href="coupon-products.php" class="btn-product btn-cart"
                                        title="Select Options"><span>Select
                                            Options</span></a>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="coupon-products.php">
                                        <img src="images/shop/2.jpg" alt="product" width="280" height="315">
                                    </a>
                                     <div class="product-label-group">
                                        <label class="product-label label-sale">25% Off</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="coupon-products.php" style="color: #fff;">Osaka Entry Tee Superdry</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$35.00</span>
                                    </div>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i>Add to cart</a>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="coupon-products.php">
                                        <img src="images/shop/3.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% Off</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="coupon-products.php" style="color: #fff;">Pima SS O-Neck NOOS Homme</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$19.00</span>
                                    </div>
                                    <a href="#" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i
                                            class="d-icon-bag"></i>Add to cart</a>
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="coupon-products.php">
                                        <img src="images/shop/4.jpg" alt="product" width="280" height="315">
                                    </a>
                                     <div class="product-label-group">
                                        <label class="product-label label-sale">25% Off</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="product.php" style="color: #fff;">Blue Utility Pinafore Denim Dress</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <a href="coupon-products.php" class="btn-product btn-cart" title="Select Options">Select
                                        Options</a>
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="coupon-products.php">
                                        <img src="images/shop/10.jpg" alt="product" width="280" height="315">
                                    </a>
                                     <div class="product-label-group">
                                        <label class="product-label label-sale">25% Off</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="coupon-products.php" style="color: #fff;">Blue Utility Pinafore Denim Dress</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <a href="product.php" class="btn-product btn-cart" title="Select Options">Select
                                        Options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    </section>

                    <section class="mt-10">
                    <div class="container">
                         <h2 class="title title-center">E-Cards Store</h2>
                        <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'autoplay': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="e-store.php">
                                        <img src="images/card/amazon-card.png" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="e-store.php">Amazon Gift Card</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="e-store.php">
                                        <img src="images/card/walmart-card.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="e-store.php">Walmart Gift Card</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="e-store.php">
                                        <img src="images/card/apple-card.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="e-store.php">Apple Gift Card</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="e-store.php">
                                        <img src="images/card/dominos.jpeg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="e-store.php">Dminos Gift Card</a>
                                    </h3>
                                   
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="e-store.php">
                                        <img src="images/card/dunkin.jpg" alt="product" width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
    
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="e-store.php">Dunki Donuts Gift Cards</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    </section>

                     <section class="mt-10">
                    <div class="container">
                         <h2 class="title title-center">Online Hotel and Flight Booking</h2>
                        <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                            'nav': true,
                            'dots': false,
                            'margin': 20,
                            'autoplay': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4
                                }
                            }
                        }">
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="hotel-booking.php">
                                        <img src="images\demos\demo5\banners\hotel-1.jpg" alt="product" width="280" height="315">
                                    </a>
                                    
                                    <div class="product-action-vertical">
                                        <a href="hotel-booking.php" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="hotel-booking.php">Room Booking</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">1 Room</ins>
                                        <ins class="new-price">$199.00</ins>
                                    </div>
                                    <a href="hotel-booking.php" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="hotel-booking.php" title="Add to cart"><i
                                            class="d-icon-bag"></i>Book Now</a>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="hotel-booking.php">
                                        <img src="images\demos\demo5\banners\hotel-2.jpg" alt="product" width="280" height="315">
                                    </a>
                                     
                                    <div class="product-action-vertical">
                                        <a href="hotel-booking.php" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="hotel-booking.php">Room Booking</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">2 Rooms</ins>
                                        <ins class="new-price">$299.00</ins>
                                    </div>
                                    <a href="hotel-booking.php" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="hotel-booking.php" title="Add to cart"><i
                                            class="d-icon-bag"></i>Book Now</a>
                                </div>
                            </div>
                            <div class="product text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="hotel-booking.php">
                                        <img src="images\demos\demo5\banners\hotel-3.jpg" alt="product" width="280" height="315">
                                    </a>
                                    
                                    <div class="product-action-vertical">
                                        <a href="hotel-booking.php" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="hotel-booking.php">Room Booking</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">3 Rooms</ins>
                                        <ins class="new-price">$399.00</ins>
                                    </div>
                                    <a href="hotel-booking.php" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="hotel-booking.php" title="Add to cart"><i
                                            class="d-icon-bag"></i>Book Now</a>
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="hotel-booking.php">
                                        <img src="images\demos\demo5\banners\hotel-4.jpg" alt="product" width="280" height="315">
                                    </a>
                                     
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="hotel-booking.php">Room Booking</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">4 Rooms</ins>
                                        <ins class="new-price">$499.00</ins>
                                    </div>
                                    <a href="hotel-booking.php" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="hotel-booking.php" title="Add to cart"><i
                                            class="d-icon-bag"></i>Book Now</a>
                                </div>
                            </div>
                            <div class="product product-variable text-center shadow-media cart-full">
                                <figure class="product-media">
                                    <a href="hotel-booking.php">
                                        <img src="images\demos\demo5\banners\hotel-5.jpg" alt="product" width="280" height="315">
                                    </a>
                                     
                                    <div class="product-action-vertical">
                                        <a href="hotel-booking.php" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="hotel-booking.php">Room Booking</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">5 Rooms</ins>
                                        <ins class="new-price">$599.00</ins>
                                    </div>
                                      <a href="hotel-booking.php" class="btn-product btn-cart" data-toggle="modal"
                                        data-target="hotel-booking.php" title="Add to cart"><i
                                            class="d-icon-bag"></i>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                    </section>

                <!-- <section class="mt-10 pt-7 mb-8 appear-animate" data-animation-options="{
                    'name': 'fadeIn',
                    'delay': '.2s'
                }">
                    <div class="container">
                        <h2 class="title title-simple title-center">Featured Products</h2>
                        <div class="row cols-lg-4 cols-md-3 cols-2">
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/1.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Shoes</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">White Leather shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/2.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Watch</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Brown Strap Wrist Watch</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/3.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Watch</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Men's Black Wrist Watch</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/4.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Electronics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Soft Sound Maker</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/5.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Cosmetics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Women's Face Cream</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/6.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Cosmetics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Women's Wide Tooth Comb</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/7.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Cosmetics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Cosmetical Wristing Brush</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/8.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="280">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Bags</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Men's Black Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                

                <section class="mt-10 pt-8 mb-8 appear-animate" style="display: none;" data-animation-options="{
                    'name': 'fadeIn',
                    'delay': '.2s'
                }">
                    <div class="container">
                        <h2 class="title title-simple title-center">Best Sellers</h2>
                        <div class="owl-carousel owl-theme row owl-nav-full cols-lg-4 cols-md-3 cols-2"
                            data-owl-options="{
                            'items': 4,
                            'dots': true,
                            'nav': false,
                            'loop': false,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6,
                                    'dots': false,
                                    'nav': true
                                }
                            }
                        }">
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/9.jpg" alt="Blue Pinafore Denim Dress"
                                            width="180" height="180">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Electronics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Hand Electric Cell</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/10.jpg" alt="Blue Pinafore Denim Dress"
                                            width="180" height="180">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Bags</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Women’s Blue Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/11.jpg" alt="Blue Pinafore Denim Dress"
                                            width="180" height="180">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Bags</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Women’s Yellowish Band Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/12.jpg" alt="Blue Pinafore Denim Dress"
                                            width="180" height="180">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Cosmetics</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Cosmetical Wristing Brush</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/13.jpg" alt="Blue Pinafore Denim Dress"
                                            width="180" height="180">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Watch</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Brown Strap Wrist Watch</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/14.jpg" alt="Blue Pinafore Denim Dress"
                                            width="180" height="180">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Shoes</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Training White Shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media" style="background-color: #f7f8fa;">
                                    <a href="demo5-product.php">
                                        <img src="images/demos/demo5/products/11.jpg" alt="Blue Pinafore Denim Dress"
                                            width="180" height="180">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                         
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo5-shop.php">Bags</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo5-product.php">Women’s Yellowish Band Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo5-product.php" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner banner-cta parallax" data-option="{'offset': -75}"
                    data-image-src="images/demos/demo5/cta.jpg" style="background-color: #8bbf4d; margin-top: 100px;">
                    <div class="container text-center">
                        <div class="banner-content appear-animate" data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'delay': '.2s',
                            'duration': '.75s'
                        }">
                            <h3 class="banner-title mb-1">Sign up to <strong class="text-uppercase"></strong></h3>
                            <p class="ls-s text-white">It only takes a second to find out about our latest <br />news
                                and
                                promotions...</p>
                            <form action="#" class="input-wrapper input-wrapper-round input-wrapper-inline">
                                <input type="email" class="form-control text-body bg-white" name="email" id="email"
                                    placeholder="Email address here..." required />
                                <button class="btn btn-sm btn-dark btn-icon-right" type="submit">subscribe<i
                                        class="d-icon-arrow-right"></i></button>
                            </form>
                            <div class="social-links" style="display: none;">
                                <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                <a href="#" class="social-link social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pt-10 mt-3 pb-10" style="display: none;">
                    <div class="container mt-4">
                        <h2 class="title title-center">Latest News</h2>
                        <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                            <div class="blog-post">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media" style="background-color: #e9e9e9;">
                                        <a href="post-single.php">
                                            <img src="images/demos/demo5/blog/1.jpg" alt="Blog post" width="340"
                                                height="206" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">19</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="post-single.php">20% Off Coupon for Cyber
                                                Week</a></h4>
                                        <p class="post-content mb-4">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                            doeiu smod tempo...</p>
                                        <a href="post-single.php"
                                            class="btn btn-primary btn-sm btn-link btn-underline">Read More<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="blog-post">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media" style="background-color: #dfe4e9;">
                                        <a href="post-single.php">
                                            <img src="images/demos/demo5/blog/2.jpg" alt="Blog post" width="340"
                                                height="206" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">19</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="post-single.php">Sed adipiscing ornare risus.</a></h4>
                                        <p class="post-content mb-4">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                            doeiu smod tempo...</p>
                                        <a href="post-single.php"
                                            class="btn btn-primary btn-sm btn-link btn-underline">Read More<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="blog-post">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media" style="background-color: #e4e4e3;">
                                        <a href="post-single.php">
                                            <img src="images/demos/demo5/blog/3.jpg" alt="Blog post" width="340"
                                                height="206" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">19</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="post-single.php">Vivamus vestibulum ntulla</a></h4>
                                        <p class="post-content mb-4">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                            doeiu smod tempo...</p>
                                        <a href="post-single.php"
                                            class="btn btn-primary btn-sm btn-link btn-underline">Read More<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="instagram-section pb-8 mb-10 appear-animate" style="display: none;">
                    <div class="container">
                        <h2 class="title title-simple text-normal title-center mb-6">Follow Us on Instagram</h2>
                        <div class="row grid">
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #ced0cf;"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/1.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #dddcda;"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.2s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/2.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #eaebe9;"
                                    data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.2s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/3.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #b4b4b6;"
                                    data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/4.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-4 col-sm-8 height-x2">
                                <div class="testimonial-wrapper">
                                    <h3 class="title title-simple font-weight-semi-bold text-normal">What they
                                        say about us</h3>
                                    <div class="owl-carousel owl-theme row cols-1 appear-animate"
                                        data-animation-options="{
                                        'delay': '.2s'
                                    }" data-owl-options="{
                                        'items': 1,
                                        'nav': false,
                                        'dots': true,
                                        'loop': false
                                    }">
                                        <div class="testimonial testimonial-centered">
                                            <div class="testimonial-info">
                                                <figure class="testimonial-author-thumbnail">
                                                    <img src="images/agents/4.jpg" alt="user" width="40" height="40" />
                                                </figure>
                                                <blockquote class="comment">
                                                    “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                    Phasellus hendrerit.
                                                    Pellente sque aliquet nibh nec urna. In nisi neque ”
                                                </blockquote>
                                                <cite>
                                                    Jenson Gregory
                                                    <span>Customer</span>
                                                </cite>
                                            </div>
                                        </div>
                                        <div class="testimonial testimonial-centered">
                                            <div class="testimonial-info">
                                                <figure class="testimonial-author-thumbnail">
                                                    <img src="images/agents/4.jpg" alt="user" width="40" height="40" />
                                                </figure>
                                                <blockquote class="comment">“ Lorem ipsum dolor sit amet, consectetuer
                                                    adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                                    urna. In nisi neque ”</blockquote>
                                                <cite>
                                                    Mary Adams
                                                    <span>Customer</span>
                                                </cite>
                                            </div>
                                        </div>
                                        <div class="testimonial testimonial-centered">
                                            <div class="testimonial-info">
                                                <figure class="testimonial-author-thumbnail">
                                                    <img src="images/agents/4.jpg" alt="user" width="40" height="40" />
                                                </figure>
                                                <blockquote class="comment">“ Lorem ipsum dolor sit amet, consectetuer
                                                    adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                                    urna. In nisi neque ”</blockquote>
                                                <cite>
                                                    Owen Hunt
                                                    <span>Customer</span>
                                                </cite>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #3b414d;"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/5.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #d1cecb;"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.2s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/6.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #e3e7ea;"
                                    data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.2s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/7.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                                <figure class="instagram appear-animate" style="background-color: #162021;"
                                    data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                    <a href="#">
                                        <img src="images/demos/demo5/instagrams/8.jpg" alt="Instagram" width="180"
                                            height="180" />
                                    </a>
                                </figure>
                            </div>
                            <div class="grid-space col-1"></div>
                        </div>
                    </div>
                </section>
              <!-- Button trigger modal -->

            </div>
        </main>
        <!-- End of Main -->
    <?php 
    include('include/footer.php');
    ?>