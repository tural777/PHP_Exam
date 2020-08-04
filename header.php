<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cars Shop</title>
    <meta name="description" content="Cars">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Uren's Header Main Area -->
        <header class="header-main_area header-main_area-2 bg--black">

            <div class="header-middle_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-5">
                            <div class="header-logo_area">
                                <a href="?page=main">
                                    <img src="assets/images/menu/logo/1.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="hm-form_area">
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All Categories</option>
                                        <option value="10">Laptops</option>
                                        <option value="17">Prime Video</option>
                                        <option value="20">All Videos</option>
                                        <option value="28">Getting Started</option>
                                        <option value="18">Computers</option>
                                        <option value="30">TV &amp; Video</option>
                                        <option value="31">Audio &amp; Theater</option>
                                        <option value="32">Camera, Photo</option>
                                        <option value="13">Cameras</option>
                                        <option value="14">Headphone</option>
                                        <option value="15">Smartwatch</option>
                                        <option value="16">Accessories</option>
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="header-search_btn" type="submit"><i class="ion-ios-search-strong"><span>Search</span></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-9 col-sm-7">
                            <div class="header-right_area">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count_area">
                                                <span class="item-count">3</span>
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="minicart-front_text">
                                                <span>Wish</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="contact-us_wrap">
                                        <a href="#"><i class="fas fa-plus-circle"></i>Elan yerləşdir</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">

                        <div class="custom-category_col col-12">
                            <div class="category-menu category-menu-hidden">
                                <div class="category-heading">
                                    <h2 class="categories-toggle">
                                        <span>Filter</span>
                                        <span>Cars</span>
                                    </h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <!-- Filter -->
                                    <form action="index.php" method="POST">

                                        <div class="uren-sidebar-catagories_area">

                                            <!-- Cars -->
                                            <div class="uren-sidebar_categories mb-2">

                                                <div class="uren-categories_title mb-3">
                                                    <h6>Brands</h6>
                                                </div>

                                                <div class="module-body mb-5">
                                                    <div class="module-list_item">
                                                        <select class="form-control" id="brands">
                                                            <option value="" selected>All</option>
                                                            <?php
                                                            include "./DAL/BrandRepository.php";
                                                            $brands = GetAllBrands();
                                                            foreach ($brands as $brand) {
                                                                echo "<option value='$brand[id]'>$brand[name]</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>


                                            <!-- Models -->
                                            <div class="uren-sidebar_categories mb-2">

                                                <div class="uren-categories_title mb-3">
                                                    <h6>Models</h6>
                                                </div>

                                                <div class="module-body mb-5">
                                                    <div class="module-list_item">
                                                        <select class="form-control" name="model-id" id="models">
                                                            <option value="" selected>All</option>
<!--                                                            --><?php
//                                                            if (isset($_GET['brandId'])) {
//                                                                include "./DAL/ModelRepository.php";
//                                                                $models = GetModelsByBrandId($_GET['brandId']);
//                                                                foreach ($models as $model) {
//                                                                    echo "<option value='$model[id]'>$model[name]</option>";
//                                                                }
//                                                            }
//                                                            ?>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>


                                            <!-- Price -->
                                            <div class="uren-sidebar_categories mb-2">
                                                <div class="uren-categories_title mb-3">
                                                    <h6>Price</h6>
                                                </div>
                                                <!-- <div class="price-filter">
                                                <input type="range" class="custom-range" min="0" max="100" step="1">
                                            </div> -->

                                                <div class="form-group row  mb-0">
                                                    <div class="col-6">
                                                        <input name="price-min" class="form-control" type="number" value="" placeholder="Min" id="min-number-input">
                                                    </div>

                                                    <div class="col-6">
                                                        <input name="price-max" class="form-control" type="number" value="" placeholder="Max" id="max-number-input">
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Year -->
                                            <div class="uren-sidebar_categories mb-2">
                                                <div class="uren-categories_title mb-3">
                                                    <h6>Year</h6>
                                                </div>

                                                <div class="form-group row  mb-0">
                                                    <div class="col-6">
                                                        <input name="year-min" class="form-control" type="number" value="" placeholder="Min" id="min-number-input">
                                                    </div>

                                                    <div class="col-6">
                                                        <input name="year-max" class="form-control" type="number" value="" placeholder="Max" id="max-number-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Credit and Swap -->
                                            <!--                                    <div class="uren-sidebar_categories mb-2">-->
                                            <!--                                        <div class="uren-categories_title">-->
                                            <!--                                            <h6>Credit &amp; Swap</h6>-->
                                            <!--                                        </div>-->
                                            <!---->
                                            <!--                                        <ul class="sidebar-checkbox_list">-->
                                            <!--                                            <li>-->
                                            <!---->
                                            <!--                                                <div class="custom-control custom-checkbox">-->
                                            <!--                                                    <input type="checkbox" style="cursor: pointer;"-->
                                            <!--                                                           class="custom-control-input" id="CheckCredit">-->
                                            <!--                                                    <label class="custom-control-label" style="cursor: pointer;"-->
                                            <!--                                                           for="CheckCredit">Credit</label>-->
                                            <!--                                                </div>-->
                                            <!---->
                                            <!--                                            </li>-->
                                            <!---->
                                            <!--                                            <li>-->
                                            <!--                                                <div class="custom-control custom-checkbox">-->
                                            <!--                                                    <input type="checkbox" style="cursor: pointer;"-->
                                            <!--                                                           class="custom-control-input" id="CheckSwap">-->
                                            <!--                                                    <label class="custom-control-label" style="cursor: pointer;"-->
                                            <!--                                                           for="CheckSwap">Swap</label>-->
                                            <!--                                                </div>-->
                                            <!--                                            </li>-->
                                            <!---->
                                            <!--                                        </ul>-->
                                            <!--                                    </div>-->

                                            <!-- Cities -->
                                            <div class="uren-sidebar_categories mb-2">

                                                <div class="uren-categories_title mb-3">
                                                    <h6>Cities</h6>
                                                </div>

                                                <div class="module-body mb-5">
                                                    <div class="module-list_item">
                                                        <select class="nice-select wide" name="city-id">
                                                            <option value="" selected>All</option>
                                                            <?php
                                                            include "./DAL/CityRepository.php";
                                                            $cities = GetAllCities();
                                                            foreach ($cities as $city) {
                                                                echo "<option value='$city[id]'>$city[name]</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Color -->
                                            <div class="uren-sidebar_categories mb-2">
                                                <div class="uren-categories_title">
                                                    <h6>Color</h6>
                                                </div>
                                                <div class="module-body mb-5">
                                                    <div class="module-list_item">
                                                        <select class="nice-select wide" name="color-id">
                                                            <option value="" selected>All</option>
                                                            <?php
                                                            include "./DAL/ColorRepository.php";
                                                            $colors = GetAllColors();
                                                            foreach ($colors as $color) {
                                                                echo "<option value='$color[id]'>$color[name]</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-button-payment mb-4">
                                                <input value="Filter" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /Filter -->

                                </div>
                            </div>
                        </div>

                        <div class="custom-menu_col col-12 d-none d-lg-block">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder "><a href="?page=main">Home</a></li>

                                        <li class=""><a href="javascript:void(0)">Pages <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="?page=my-account">My Account</a></li>
                                                <li><a href="?page=login-register">Login | Register</a></li>
                                                <li><a href="?page=wishlist">Wishlist</a></li>
                                                <li><a href="?page=compare">Compare</a></li>
                                                <li><a href="?page=404">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="?page=about-us">About Us</a></li>
                                        <li class=""><a href="?page=contact">Contact</a></li>
                                        <li class=""><a href="?page=admin">Admin</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>




                        <div class="custom-setting_col col-12 d-none d-lg-block">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <ul>
                                        <li><a href="?page=my-account"><span class="fa fa-user"></span> <span>My Account</span><i class="fa fa-chevron-down"></i></a>
                                            <ul class="ht-dropdown ht-my_account">
                                                <li><a href="?page=login-register">Register</a></li>
                                                <li><a href="?page=login-register">Login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <div class="custom-search_col d-none d-md-block d-lg-none">
                            <div class="hm-form_area">
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All Categories</option>
                                        <option value="10">Laptops</option>
                                        <option value="17">Prime Video</option>
                                        <option value="20">All Videos</option>
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="header-search_btn" type="submit"><i class="ion-ios-search-strong"><span>Search</span></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-top_area header-sticky bg--black">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder "><a href="?page=main">Home</a></li>
                                        <li class=""><a href="javascript:void(0)">Pages <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="?page=my-account">My Account</a></li>
                                                <li><a href="?page=login-register">Login | Register</a></li>
                                                <li><a href="?page=wishlist">Wishlist</a></li>
                                                <li><a href="?page=compare">Compare</a></li>
                                                <li><a href="?page=404">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="?page=about-us">About Us</a></li>
                                        <li class=""><a href="?page=contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-3 d-block d-lg-none">
                            <div class="header-logo_area header-sticky_logo">
                                <a href="?page=main">
                                    <img src="assets/images/menu/logo/1.png" alt="Uren's Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-sm-9">
                            <div class="header-right_area">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count_area">
                                                <span class="item-count">3</span>
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div class="minicart-front_text">
                                                <span>Wish</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="contact-us_wrap">
                                        <a href="#"><i class="fas fa-plus-circle"></i>Elan yerləşdir</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Wish List</h4>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/1.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="?page=shop-left-sidebar">Autem ipsa ad</a>
                                    <span class="product-item_quantity">1 x $145.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/2.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="?page=shop-left-sidebar">Tenetur illum amet</a>
                                    <span class="product-item_quantity">1 x $150.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/3.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="?page=shop-left-sidebar">Non doloremque
                                        placeat</a>
                                    <span class="product-item_quantity">1 x $165.80</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$462.4‬0</span>
                    </div>
                </div>
            </div>

            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_search">
                            <form action="#" class="inner-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="?page=main"><span class="mm-text">Home</span></a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="?page=main">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="?page=my-account">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=login-register">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=wishlist">
                                                <span class="mm-text">Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=compare">
                                                <span class="mm-text">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="?page=404">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children"><a href="?page=about-us">About Us</a></li>
                                <li class="menu-item-has-children"><a href="?page=contact">Contact</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>

        </header>
        <!-- Uren's Header Main Area End Here -->
