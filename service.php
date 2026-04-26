<?php
$pageTitle = "Home";
include 'includes/header.php';
?>

<body>

    <!-- Preloader area start -->
    <?php include 'includes/loading.php'; ?>
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <?php include 'includes/cursor.php'; ?>
    <!-- Mouse cursor area end here -->

    <!-- Top header area start here -->
    <?php include 'includes/top-header.php'; ?>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <?php include 'includes/header-area.php'; ?>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- Sidebar area end here -->

    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
            data-background="<?php echo $base_url; ?>/assets/images/banner/banner-inner-page.jpg">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="<?php echo $base_url; ?>/assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="<?php echo $base_url; ?>/assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="<?php echo $base_url; ?>/assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">IT Services</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo $base_url; ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>IT Services</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Service area start here -->
        <section class="service-inner-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/service/service-image1.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/service-two-icon1.png" alt="icon">
                                </div>
                                <div class="shape"><img src="<?php echo $base_url; ?>/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="<?php echo $base_url; ?>/service-details" class="primary-hover">Database Security</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="<?php echo $base_url; ?>/service-details">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/service/service-image2.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/service-two-icon2.png" alt="icon">
                                </div>
                                <div class="shape"><img src="<?php echo $base_url; ?>/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="<?php echo $base_url; ?>/service-details" class="primary-hover">IT Consultancy</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="<?php echo $base_url; ?>/service-details">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/service/service-image3.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/service-two-icon3.png" alt="icon">
                                </div>
                                <div class="shape"><img src="<?php echo $base_url; ?>/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="<?php echo $base_url; ?>/service-details" class="primary-hover">App Development</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="<?php echo $base_url; ?>/service-details">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/service/service-image4.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/service-two-icon4.png" alt="icon">
                                </div>
                                <div class="shape"><img src="<?php echo $base_url; ?>/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="<?php echo $base_url; ?>/service-details" class="primary-hover">Cyber Security</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="<?php echo $base_url; ?>/service-details">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/service/service-image5.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/service-two-icon5.png" alt="icon">
                                </div>
                                <div class="shape"><img src="<?php echo $base_url; ?>/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="<?php echo $base_url; ?>/service-details" class="primary-hover">UI/UX Design</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="<?php echo $base_url; ?>/service-details">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/service/service-image6.jpg" alt="image">
                            </div>
                            <div class="service-two__content">
                                <div class="icon">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/service-two-icon6.png" alt="icon">
                                </div>
                                <div class="shape"><img src="<?php echo $base_url; ?>/assets/images/shape/service-two-item-shape.png"
                                        alt="shape"></div>
                                <h4><a href="<?php echo $base_url; ?>/service-details" class="primary-hover">IT Management</a></h4>
                                <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac
                                    iaculis.</p>
                                <a class="read-more-btn" href="<?php echo $base_url; ?>/service-details">Read More <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>