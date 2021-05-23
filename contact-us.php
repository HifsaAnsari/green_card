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
           
            <div class="page-header" style="background-image: url(images/page-header/contact-us.jpg)">
                <h1 class="page-title font-weight-bold text-capitalize ls-l">Contact Us</h1>
            </div>
            <div class="page-content mt-10 pt-7">
                <section class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 ls-m mb-4">
                                <div class="grey-section d-flex align-items-center h-100">
                                    <div>
                                        <h4 class="mb-2 text-capitalize">Your Text Here</h4>
                                        <p>Your Text Here</p>

                                        <h4 class="mb-2 text-capitalize">Phone Number</h4>
                                        <p>
                                            <a href="tel:#">0.000.000.00</a><br>
                                            <a href="tel:#">0.000.000.00</a>
                                        </p>

                                        <h4 class="mb-2 text-capitalize">Support</h4>
                                        <p class="mb-4">
                                            <a href="#">support@your-domain.com</a><br>
                                            <a href="#">help@your-domain.com</a><br>
                                            <a href="#">Sale</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 d-flex align-items-center mb-4">
                                <div class="w-100">
                                    <form class="pl-lg-2" action="#">
                                        <h4 class="ls-m font-weight-bold">Let’s Connect</h4>
                                        <p>Your email address will not be published. Required fields are
                                            marked *</p>
                                        <div class="row mb-2">
                                            <div class="col-12 mb-4">
                                                <textarea class="form-control" required
                                                    placeholder="Comment*"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <input class="form-control" type="text" placeholder="Name *" required>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <input class="form-control" type="email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark btn-rounded">Post Comment<i
                                                class="d-icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Section-->

                <section class="store-section mt-6 pt-10 pb-8">
                    <div class="container">
                        <h2 class="title title-center mb-7 text-normal">Our store</h2>
                        <div class="row cols-sm-2 cols-lg-4">
                            <div class="store">
                                <figure class="banner-radius">
                                    <img src="images/subpages/store-1.jpg" alt="store" width="280" height="280">
                                    <h4 class="overlay-visible">New York</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@abc.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="store">
                                <figure class="banner-radius">
                                    <img src="images/subpages/store-2.jpg" alt="store" width="280" height="280">
                                    <h4 class="overlay-visible">London</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@abc.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="store">
                                <figure class="banner-radius">
                                    <img src="images/subpages/store-3.jpg" alt="store" width="280" height="280">
                                    <h4 class="overlay-visible">Oslo</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@abc.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="store">
                                <figure class="banner-radius">
                                    <img src="images/subpages/store-4.jpg" alt="store" width="280" height="280">
                                    <h4 class="overlay-visible">Stockholm</h4>
                                    <div class="overlay overlay-transparent">
                                        <a class="mt-8" href="mail:#">mail@abc.com</a>
                                        <a href="tel:#">Phone: (123) 456-7890</a>
                                        <div class="social-links mt-1">
                                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Store Section -->

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div class="grey-section google-map" id="googlemaps" style="height: 386px"></div>
                <!-- End Map Section -->
            </div>
        </main>
        <?php
                include('include/footer.php');
                ?>