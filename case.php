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

    <!-- Fullscreen search area start here -->
    <?php include 'includes/search-wrap.php'; ?>
    <!-- Fullscreen search area end here -->

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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Case Study 01</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo $base_url; ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Case Study
                        01</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Cause area start here -->
        <section class="case-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="<?php echo $base_url; ?>/assets/images/case/case-image1.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Technology</span>
                                <h3><a href="<?php echo $base_url; ?>/case-details" class="text-white primary-hover">Platform
                                        Integration</a></h3>
                            </div>
                            <a href="<?php echo $base_url; ?>/case-details" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="<?php echo $base_url; ?>/assets/images/case/case-image2.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Technology</span>
                                <h3><a href="<?php echo $base_url; ?>/case-details" class="text-white primary-hover">IT Management</a></h3>
                            </div>
                            <a href="<?php echo $base_url; ?>/case-details" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="<?php echo $base_url; ?>/assets/images/case/case-image3.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Solution</span>
                                <h3><a href="<?php echo $base_url; ?>/case-details" class="text-white primary-hover">Web Development</a>
                                </h3>
                            </div>
                            <a href="<?php echo $base_url; ?>/case-details" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="<?php echo $base_url; ?>/assets/images/case/case-image4.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Security</span>
                                <h3><a href="<?php echo $base_url; ?>/case-details" class="text-white primary-hover">Network Security</a>
                                </h3>
                            </div>
                            <a href="<?php echo $base_url; ?>/case-details" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="<?php echo $base_url; ?>/assets/images/case/case-two-image1.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">DEVELOPMENT</span>
                                <h3><a href="<?php echo $base_url; ?>/case-details" class="text-white primary-hover">Product Design</a></h3>
                            </div>
                            <a href="<?php echo $base_url; ?>/case-details" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case__item">
                            <div class="image case__image">
                                <img src="<?php echo $base_url; ?>/assets/images/case/case-two-image4.jpg" alt="image">
                            </div>
                            <div class="case__content">
                                <span class="primary-color sm-font">Design</span>
                                <h3><a href="<?php echo $base_url; ?>/case-details" class="text-white primary-hover">UI/UX Design</a></h3>
                            </div>
                            <a href="<?php echo $base_url; ?>/case-details" class="case__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cause area end here -->
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>