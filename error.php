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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Page Not Found</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo $base_url; ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>404</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Error area start here -->
        <section class="error-area pt-120 pb-120">
            <div class="container">
                <div class="error__item">
                    <div class="image mb-60">
                        <img src="<?php echo $base_url; ?>/assets/images/error/404.png" alt="image">
                    </div>
                    <h2>Whoops! This Page got Lost
                        in converstion</h2>
                    <div class="btn-two mt-50">
                        <span class="btn-circle">
                        </span>
                        <a href="<?php echo $base_url; ?>" class="btn-one">Go Back Home</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Error area end here -->
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>