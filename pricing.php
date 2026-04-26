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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Pricing</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo $base_url; ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Pricing</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Pricing area start here -->
        <section class="pricing-area pt-120 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <img class="me-1" src="<?php echo $base_url; ?>/assets/images/icon/section-title.png" alt="icon">
                        PRICE PLANS
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Flexible Pricing Plans
                    </h2>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="pricing__item">
                            <div class="item-shape">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/pricing-item-shape.png" alt="shape">
                            </div>
                            <div class="pricing-head">
                                <div>
                                    <h4 class="text-white mb-10">Basic Plan</h4>
                                    <h2>$39<span>/monthly</span></h2>
                                </div>
                                <div class="pricing-icon" data-background="<?php echo $base_url; ?>/assets/images/shape/pricing-icon-bg.png">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/pricing-icon1.png" alt="icon">
                                </div>
                            </div>
                            <ul>
                                <li>Free 1 5 GB Linux Hosting</li>
                                <li>Dedicated Tech Experts</li>
                                <li>24/7 System Monitoring</li>
                                <li>Security Management</li>
                                <li>Unlimited Download</li>
                            </ul>
                            <a href="#" class="btn-one d-block text-center">choose Plan <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="pricing__item">
                            <div class="item-shape">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/pricing-item-shape.png" alt="shape">
                            </div>
                            <div class="pricing-head">
                                <div>
                                    <h4 class="text-white mb-10">Standard Plan</h4>
                                    <h2>$59<span>/monthly</span></h2>
                                </div>
                                <div class="pricing-icon" data-background="<?php echo $base_url; ?>/assets/images/shape/pricing-icon-bg.png">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/pricing-icon2.png" alt="icon">
                                </div>
                            </div>
                            <ul>
                                <li>Free 1 5 GB Linux Hosting</li>
                                <li>Dedicated Tech Experts</li>
                                <li>24/7 System Monitoring</li>
                                <li>Security Management</li>
                                <li>Unlimited Download</li>
                            </ul>
                            <a href="#" class="btn-one d-block text-center">choose Plan <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="pricing__item">
                            <div class="item-shape">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/pricing-item-shape.png" alt="shape">
                            </div>
                            <div class="pricing-head">
                                <div>
                                    <h4 class="text-white mb-10">Premium Plan</h4>
                                    <h2>$79<span>/monthly</span></h2>
                                </div>
                                <div class="pricing-icon" data-background="<?php echo $base_url; ?>/assets/images/shape/pricing-icon-bg.png">
                                    <img src="<?php echo $base_url; ?>/assets/images/icon/pricing-icon3.png" alt="icon">
                                </div>
                            </div>
                            <ul>
                                <li>Free 1 5 GB Linux Hosting</li>
                                <li>Dedicated Tech Experts</li>
                                <li>24/7 System Monitoring</li>
                                <li>Security Management</li>
                                <li>Unlimited Download</li>
                            </ul>
                            <a href="#" class="btn-one d-block text-center">choose Plan <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing area end here -->
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>