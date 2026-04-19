<?php
$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$request_path = trim((string) $request_path, '/');

$base_path = trim((string) parse_url($base_url, PHP_URL_PATH), '/');

if ($base_path !== '') {
    if ($request_path === $base_path) {
        $request_path = '';
    } elseif (strpos($request_path, $base_path . '/') === 0) {
        $request_path = substr($request_path, strlen($base_path) + 1);
    }
}

$request_path = trim((string) $request_path, '/');
$current_page = $request_path === '' ? 'home' : explode('/', $request_path)[0];
$current_page = preg_replace('/\.php$/', '', $current_page);

$nav_items = [
    'home' => ['home'],
    'about' => ['about'],
    'services' => ['service-solutions', 'service', 'service-details'],
    'pages' => ['case', 'case-2', 'case-details', 'team', 'team-details', 'pricing', 'faq', 'error'],
    'blog' => ['blog', 'blog-standard', 'blog-details'],
    'contact' => ['contact'],
];

$nav_class = static function (array $pages, string $default_class = '') use ($current_page): string {
    $classes = trim($default_class . ' ' . (in_array($current_page, $pages, true) ? 'active' : ''));

    return $classes !== '' ? ' class="' . $classes . '"' : '';
};
?>

<style>
    .header__main .main-menu ul li.active>a,
    .header__main .main-menu ul li>a.active {
        color: var(--primary-color);
    }

    .header__main .main-menu ul li.active>a i,
    .header__main .main-menu ul li>a.active i {
        color: var(--primary-color);
    }
</style>

<header class="header-area">
        <div class="container header__container">
            <div class="header__main">
                <a href="<?php echo $base_url; ?>" class="logo">
                    <img src="<?php echo $base_url; ?>/assets/images/logo/logo-light.png" alt="logo">
                </a>
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li<?php echo $nav_class($nav_items['home'], 'has-megamenu'); ?>>
                                <a href="<?php echo $base_url; ?>"<?php echo $nav_class($nav_items['home']); ?>>Home</a>
                                <!-- <ul class="sub-menu mega-menu menu-image">
                                    <li>
                                        <div class="image text-center">
                                            <img src="<?php echo $base_url; ?>/assets/images/menu/home1-image.jpg" alt="image">
                                            <div class="btn__group">
                                                <a href="<?php echo $base_url; ?>" class="btn-one">Multi Page</a>
                                                <a href="<?php echo $base_url; ?>/index-one-page" class="btn-one mt-2">One Page</a>
                                            </div>
                                            <h6 class="text-white">Home Page 01</h6>
                                        </div>
                                        <div class="image text-center">
                                            <img src="<?php echo $base_url; ?>/assets/images/menu/home2-image.jpg" alt="image">
                                            <div class="btn__group">
                                                <a href="<?php echo $base_url; ?>/index-2" class="btn-one">Multi Page</a>
                                                <a href="<?php echo $base_url; ?>/index-2-one-page" class="btn-one mt-2">One Page</a>
                                            </div>
                                            <h6 class="text-white">Home Page 02</h6>
                                        </div>
                                        <div class="image text-center">
                                            <img src="<?php echo $base_url; ?>/assets/images/menu/home3-image.jpg" alt="image">
                                            <div class="btn__group">
                                                <a href="<?php echo $base_url; ?>/index-3" class="btn-one">Multi Page</a>
                                                <a href="<?php echo $base_url; ?>/index-3-one-page" class="btn-one mt-2">One Page</a>
                                            </div>
                                            <h6 class="text-white">Home Page 03</h6>
                                        </div>
                                        <div class="image text-center">
                                            <img src="<?php echo $base_url; ?>/assets/images/menu/home4-image.jpg" alt="image">
                                            <div class="btn__group">
                                                <a href="<?php echo $base_url; ?>/index-dark" class="btn-one">View Page</a>
                                            </div>
                                            <h6 class="text-white">Home Dark</h6>
                                        </div>
                                    </li>
                                </ul> -->
                            </li>
                            <li<?php echo $nav_class($nav_items['about']); ?>><a href="<?php echo $base_url; ?>/about"<?php echo $nav_class($nav_items['about']); ?>>About</a></li>
                            <li<?php echo $nav_class($nav_items['services']); ?>>
                                <a href="#0"<?php echo $nav_class($nav_items['services']); ?>>Services</a>
                                <ul class="sub-menu">
                                    <li<?php echo $nav_class(['service-solutions']); ?>>
                                        <a href="<?php echo $base_url; ?>/service-solutions"<?php echo $nav_class(['service-solutions']); ?>>IT Solutions</a>
                                    </li>
                                    <li<?php echo $nav_class(['service']); ?>>
                                        <a href="<?php echo $base_url; ?>/service"<?php echo $nav_class(['service']); ?>>IT Services</a>
                                    </li>
                                    <li<?php echo $nav_class(['service-details']); ?>>
                                        <a href="<?php echo $base_url; ?>/service-details"<?php echo $nav_class(['service-details']); ?>>Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li<?php echo $nav_class($nav_items['pages']); ?>>
                                <a href="#0"<?php echo $nav_class($nav_items['pages']); ?>>Pages</a>
                                <ul class="sub-menu">
                                    <li<?php echo $nav_class(['case']); ?>>
                                        <a href="<?php echo $base_url; ?>/case"<?php echo $nav_class(['case']); ?>>Case Study 01</a>
                                    </li>
                                    <li<?php echo $nav_class(['case-2']); ?>>
                                        <a href="<?php echo $base_url; ?>/case-2"<?php echo $nav_class(['case-2']); ?>>Case Study 02</a>
                                    </li>
                                    <li<?php echo $nav_class(['case-details']); ?>>
                                        <a href="<?php echo $base_url; ?>/case-details"<?php echo $nav_class(['case-details']); ?>>Case Study Details</a>
                                    </li>
                                    <li<?php echo $nav_class(['team']); ?>>
                                        <a href="<?php echo $base_url; ?>/team"<?php echo $nav_class(['team']); ?>>Our Team</a>
                                    </li>
                                    <li<?php echo $nav_class(['team-details']); ?>>
                                        <a href="<?php echo $base_url; ?>/team-details"<?php echo $nav_class(['team-details']); ?>>Team Details</a>
                                    </li>
                                    <li<?php echo $nav_class(['pricing']); ?>>
                                        <a href="<?php echo $base_url; ?>/pricing"<?php echo $nav_class(['pricing']); ?>>Pricing</a>
                                    </li>
                                    <li<?php echo $nav_class(['faq']); ?>>
                                        <a href="<?php echo $base_url; ?>/faq"<?php echo $nav_class(['faq']); ?>>FAQ's</a>
                                    </li>
                                    <li<?php echo $nav_class(['error']); ?>>
                                        <a href="<?php echo $base_url; ?>/error"<?php echo $nav_class(['error']); ?>>404 Error</a>
                                    </li>
                                </ul>
                            </li>
                            <li<?php echo $nav_class($nav_items['blog']); ?>>
                                <a href="#0"<?php echo $nav_class($nav_items['blog']); ?>>Blog</a>
                                <ul class="sub-menu">
                                    <li<?php echo $nav_class(['blog']); ?>>
                                        <a href="<?php echo $base_url; ?>/blog"<?php echo $nav_class(['blog']); ?>>Blog Grid</a>
                                    </li>
                                    <li<?php echo $nav_class(['blog-standard']); ?>>
                                        <a href="<?php echo $base_url; ?>/blog-standard"<?php echo $nav_class(['blog-standard']); ?>>Blog Standard</a>
                                    </li>
                                    <li<?php echo $nav_class(['blog-details']); ?>>
                                        <a href="<?php echo $base_url; ?>/blog-details"<?php echo $nav_class(['blog-details']); ?>>Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li<?php echo $nav_class($nav_items['contact']); ?>><a href="<?php echo $base_url; ?>/contact"<?php echo $nav_class($nav_items['contact']); ?>>Contact</a></li>
                            <li class="ml-20 d-none d-lg-block"><a class="search-trigger" href="#0"><svg width="17"
                                        height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_307_344)">
                                            <path
                                                d="M16.0375 14.9381L12.0784 11.0334C13.0625 9.86621 13.6554 8.36744 13.6554 6.73438C13.6554 3.02103 10.5925 0 6.82774 0C3.0629 0 0 3.02103 0 6.73438C0 10.4475 3.0629 13.4683 6.82774 13.4683C8.4834 13.4683 10.0031 12.8836 11.1865 11.913L15.1456 15.8178C15.2687 15.9393 15.4301 16 15.5915 16C15.7529 16 15.9143 15.9393 16.0375 15.8178C16.2839 15.5748 16.2839 15.181 16.0375 14.9381ZM1.26142 6.73438C1.26142 3.70705 3.75845 1.24414 6.82774 1.24414C9.89695 1.24414 12.3939 3.70705 12.3939 6.73438C12.3939 9.76146 9.89695 12.2241 6.82774 12.2241C3.75845 12.2241 1.26142 9.76146 1.26142 6.73438Z"
                                                fill="#0F0D1D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_307_344">
                                                <rect width="16.2222" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-none d-lg-inline-block">
                    <a href="<?php echo $base_url; ?>/contact" class="btn-one">Get A Quote <i
                            class="fa-regular fa-arrow-right-long"></i></a>
                </div>
                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
