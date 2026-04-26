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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Faq</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo $base_url; ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Faq</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Faq area start here -->
        <section class="faq-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5 pe-2 pe-lg-5">
                        <div class="faq__image image wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="faq__line sway__animation">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/faq-line.png" alt="image">
                            </div>
                            <img src="<?php echo $base_url; ?>/assets/images/faq/faq-image.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7 mt-60">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="<?php echo $base_url; ?>/assets/images/icon/section-title.png" alt="icon">
                                FAQ
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Most Common
                                Question?</h2>
                        </div>
                        <div class="faq__item">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Where should I incorporate my business?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            What happens my free trial?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                            aria-expanded="false" aria-controls="collapsethree">
                                            What is included in your services?
                                        </button>
                                    </h2>
                                    <div id="collapsethree" class="accordion-collapse collapse"
                                        aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What type of company is measured?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>It is a long established fact that a reader be distracted by
                                                the readable content of a page when looking a its layout.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq area end here -->
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>