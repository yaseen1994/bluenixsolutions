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
            data-background="assets/images/banner/banner-inner-page.jpg">
            <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape2.png" alt="shape">
            </div>
            <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img src="assets/images/banner/inner-banner-shape1.png" alt="shape">
            </div>
            <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="sway__animationX" src="assets/images/banner/inner-banner-shape3.png" alt="shape">
            </div>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Case Study 02</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="index.html">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Case Study
                        02</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Case area start here -->
        <section class="case-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="assets/images/case/case-two-image1.jpg" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Technology</span>
                                <h4><a href="case-details.html" class="text-white">Platform Integration</a></h4>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="assets/images/case/case-two-image2.jpg" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Technology</span>
                                <h4><a href="case-details.html" class="text-white">IT Management</a></h4>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="assets/images/case/case-two-image3.jpg" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Solution</span>
                                <h4><a href="case-details.html" class="text-white">Web Development</a></h4>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="assets/images/case/case-two-image4.jpg" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Security</span>
                                <h4><a href="case-details.html" class="text-white">Network Security</a></h4>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="assets/images/case/case-image1.jpg" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Solution</span>
                                <h4><a href="case-details.html" class="text-white">App Development</a></h4>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="case-two__item">
                            <div class="image case-two__image">
                                <img src="assets/images/case/case-image2.jpg" alt="image">
                            </div>
                            <div class="case-two__content">
                                <span>Security</span>
                                <h4><a href="case-details.html" class="text-white">Database Security</a></h4>
                            </div>
                            <a href="case-details.html" class="case-two__btn">
                                <i class="fa-regular fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Case area end here -->
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>