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
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Our Team</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo $base_url; ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>Our Team</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Team area start here -->
        <section class="team-area pt-120 pb-120">
            <div class="container">
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="team__item">
                            <div class="image">
                                <img src="<?php echo $base_url; ?>/assets/images/team/team-image4.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="<?php echo $base_url; ?>/team-details">Anneya Roy</a></h4>
                                <span class="text-white">Software Engineer</span>
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
                                <img src="<?php echo $base_url; ?>/assets/images/team/team-image6.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="<?php echo $base_url; ?>/team-details">Mohmmad Arif</a></h4>
                                <span class="text-white">Marketing Manager</span>
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
                                <img src="<?php echo $base_url; ?>/assets/images/team/team-image5.jpg" alt="image">
                            </div>
                            <div class="team__content">
                                <h4><a class="text-white" href="<?php echo $base_url; ?>/team-details">Prince Sagor</a></h4>
                                <span class="text-white">Programmer</span>
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