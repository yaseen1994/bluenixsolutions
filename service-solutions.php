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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">IT Solutions</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo $base_url; ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>IT
                        Solutions</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Service area start here -->
        <section class="service-area pt-120 pb-120">
            <div class="service__shape wow slideInRight">
                <img class="sway_Y__animation" src="<?php echo $base_url; ?>/assets/images/shape/service-bg-shape.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <div class="service__item">
                            <div class="service-shape">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/service-item-shape.png" alt="shape">
                            </div>
                            <div class="service__icon">
                                <img src="<?php echo $base_url; ?>/assets/images/icon/service-icon1.png" alt="icon">
                            </div>
                            <h4><a href="<?php echo $base_url; ?>/service-details">IT Management</a></h4>
                            <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac iaculis ut
                                euismod quis sapien.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="service__item active">
                            <div class="service-shape">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/service-item-shape.png" alt="shape">
                            </div>
                            <div class="service__icon">
                                <img src="<?php echo $base_url; ?>/assets/images/icon/service-icon2.png" alt="icon">
                            </div>
                            <h4><a href="<?php echo $base_url; ?>/service-details">Cyber Security</a></h4>
                            <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac iaculis ut
                                euismod quis sapien.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="service__item">
                            <div class="service-shape">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/service-item-shape.png" alt="shape">
                            </div>
                            <div class="service__icon">
                                <img src="<?php echo $base_url; ?>/assets/images/icon/service-icon3.png" alt="icon">
                            </div>
                            <h4><a href="<?php echo $base_url; ?>/service-details">Web Development</a></h4>
                            <p>Pellentesque nec the condimentum nec lorem nulla augue est ultricies ac iaculis ut
                                euismod quis sapien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->

        <!-- About area start here -->
        <section class="about-area sub-bg pt-120">
            <div class="about__shape wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img src="<?php echo $base_url; ?>/assets/images/shape/about-line.png" alt="shape">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about__left-item">
                            <div class="image big-image">
                                <img src="<?php echo $base_url; ?>/assets/images/about/about-image1.jpg" alt="image">
                            </div>
                            <div class="image sm-image">
                                <div class="video__btn-wrp">
                                    <div class="video-btn video-pulse">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=iVqz_4M5mA0"><i
                                                class="fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                                <img src="<?php echo $base_url; ?>/assets/images/about/about-image2.png" alt="image">
                            </div>
                            <div class="circle-shape">
                                <img src="<?php echo $base_url; ?>/assets/images/shape/about-circle.png" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <img class="me-1" src="<?php echo $base_url; ?>/assets/images/icon/section-title.png" alt="icon">
                                ABOUT Gratech
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">We Strive to
                                Offer Intelligent Business Solutions</h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Aonsectetur
                                adipiscing elit aenean scelerisque augue vitae consequat aisque eget congue
                                velit in cursus sodales the
                                turpis euismod quis sapien euismod
                                quis sapien the condimentum nec lorem nulla augue.</p>
                        </div>
                        <div class="row g-4 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="<?php echo $base_url; ?>/assets/images/icon/about-icon1.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">Best Services</h4>
                                        <p>Scelerisque augue the consequat sodales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about__right-item">
                                    <div class="icon">
                                        <img src="<?php echo $base_url; ?>/assets/images/icon/about-icon2.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h4 class="mb-1">24/7 Call Support</h4>
                                        <p>Scelerisque augue the consequat sodales</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about__info mt-50 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="<?php echo $base_url; ?>/about" class="btn-one">Explore More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                            <div class="d-flex gap-2 align-items-center">
                                <img src="<?php echo $base_url; ?>/assets/images/about/about-info.png" alt="image">
                                <div class="info">
                                    <h5>Ronald Richards</h5>
                                    <span class="sm-font">Co, Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Counter area start here -->
        <section class="counter-area">
            <div class="container">
                <div class="counter__wrp gradient-bg">
                    <div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <img src="<?php echo $base_url; ?>/assets/images/shape/counnter-bg-shape.png" alt="shape">
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                        <img src="<?php echo $base_url; ?>/assets/images/icon/counter-icon1.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">6,561</span>+</h3>
                            <p class="text-white">Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <img src="<?php echo $base_url; ?>/assets/images/icon/counter-icon2.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">600</span>+</h3>
                            <p class="text-white">Finished Projects</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <img src="<?php echo $base_url; ?>/assets/images/icon/counter-icon3.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">250</span>+</h3>
                            <p class="text-white">Skilled Experts</p>
                        </div>
                    </div>
                    <div class="counter__item wow bounceInUp" data-wow-delay="800ms" data-wow-duration="1000ms">
                        <img src="<?php echo $base_url; ?>/assets/images/icon/counter-icon4.png" alt="icon">
                        <div class="content">
                            <h3><span class="count">590</span>+</h3>
                            <p class="text-white">Media Posts</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter area end here -->

        <!-- Team area start here -->
        <section class="team-area pt-120 pb-120">
            <div class="container">
                <div class="section-header text-center mb-60">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <svg class="me-1" width="20" height="12" viewBox="0 0 20 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.747803" width="18.5" height="10.5" rx="5.25" stroke="#3C72FC"
                                stroke-width="1.5" />
                            <mask id="path-2-inside-1_687_602" fill="white">
                                <path
                                    d="M3 5.9978C3 3.78866 4.79086 1.9978 7 1.9978H13C15.2091 1.9978 17 3.78866 17 5.9978C17 8.20694 15.2091 9.9978 13 9.9978H7C4.79086 9.9978 3 8.20694 3 5.9978Z" />
                            </mask>
                            <path
                                d="M3 5.9978C3 2.96024 5.46243 0.497803 8.5 0.497803H11.5C14.5376 0.497803 17 2.96024 17 5.9978C17 4.61709 15.2091 3.4978 13 3.4978H7C4.79086 3.4978 3 4.61709 3 5.9978ZM17 5.9978C17 9.03537 14.5376 11.4978 11.5 11.4978H8.5C5.46243 11.4978 3 9.03537 3 5.9978C3 7.37851 4.79086 8.4978 7 8.4978H13C15.2091 8.4978 17 7.37851 17 5.9978ZM3 9.9978V1.9978V9.9978ZM17 1.9978V9.9978V1.9978Z"
                                fill="#3C72FC" mask="url(#path-2-inside-1_687_602)" />
                        </svg>
                        OUR team
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Leadership Team</h2>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/team/team-image1.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="<?php echo $base_url; ?>/team-details">Kawser Ahmed</a></h4>
                                <span class="text-white">Web Designer</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/team/team-image2.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="<?php echo $base_url; ?>/team-details">Karniz Fatema</a></h4>
                                <span class="text-white">Customer Support</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/team/team-image3.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="<?php echo $base_url; ?>/team-details">Alex Pranto</a></h4>
                                <span class="text-white">UI/UX Designer</span>
                            </div>
                            <div class="team__share">
                                <ul>
                                    <li>
                                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#0"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#0"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                                <button><i class="fa-sharp fa-light fa-share-nodes"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team area end here -->
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>