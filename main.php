 <div class="uren-slider_area uren-slider_area-2">
     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-12 col-lg-12">
                 <div class="main-slider slider-navigation_style-2">

                     <!-- slide 1 -->
                     <div class="single-slide animation-style-01 bg-1">
                         <div class="slider-content">
                             <span>New thinking new possibilities</span>
                             <h3>Car interior</h3>
                             <h4>Starting at <span>$99.00</span></h4>
                             <div class="uren-btn-ps_left slide-btn">
                                 <a class="uren-btn" href="?page=shop-left-sidebar">Read More</a>
                             </div>
                         </div>
                     </div>
                     <!-- /slide 1 -->

                     <!-- slide 2 -->
                     <div class="single-slide animation-style-02 bg-2">
                         <div class="slider-content slider-content-2">
                             <span class="primary-text_color">Car, Truck, CUV &amp; SUV Tires</span>
                             <h3>Wheels &amp; Tires</h3>
                             <h4>Sale up to 20% off</h4>
                             <div class="uren-btn-ps_left slide-btn">
                                 <a class="uren-btn" href="?page=shop-left-sidebar">Read More</a>
                             </div>
                         </div>
                     </div>
                     <!-- /slide 2 -->

                     <!-- slide 3 -->
                     <div class="single-slide animation-style-01 bg-5">
                         <div class="slider-content">
                             <span class="carlet-text_color">Save $120 when you buy</span>
                             <h3>Wheels &amp; Tires</h3>
                             <p class="short-desc">Explore and immerse in exciting 360 content withFulldive’s all-in-one virtual reality platform</p>
                             <div class="uren-btn-ps_center slide-btn">
                                 <a class="uren-btn" href="?page=shop-left-sidebar">Read More</a>
                             </div>
                         </div>
                     </div>
                     <!-- /slide 3 -->

                     <!-- slide 4 -->
                     <div class="single-slide animation-style-02 bg-6">
                         <div class="slider-content slider-content-2">
                             <span class="carlet-text_color">We have the part you need</span>
                             <h3>20% off Auto part</h3>
                             <p class="short-desc">Explore and immerse in exciting 360 content withFulldive’s all-in-one virtual reality platform</p>
                             <div class="uren-btn-ps_center slide-btn">
                                 <a class="uren-btn" href="?page=shop-left-sidebar">Read More</a>
                             </div>
                         </div>
                     </div>
                     <!-- /slide 4 -->

                 </div>
             </div>


         </div>
     </div>
 </div>


 <!-- Begin Uren's Shop Grid Fullwidth  Area -->
 <div class="shop-content_wrapper">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="shop-toolbar">
                     <div class="product-view-mode">
                         <a class="grid-1" data-target="gridview-1" data-toggle="tooltip" data-placement="top" title="1">1</a>
                         <a class="grid-2" data-target="gridview-2" data-toggle="tooltip" data-placement="top" title="2">2</a>
                         <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="3">3</a>
                         <a class="grid-4" data-target="gridview-4" data-toggle="tooltip" data-placement="top" title="4">4</a>
                         <a class="grid-5" data-target="gridview-5" data-toggle="tooltip" data-placement="top" title="5">5</a>
                         <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List"><i class="fa fa-th-list"></i></a>
                     </div>
                     <div class="product-item-selection_area">
                         <div class="product-short">
                             <label class="select-label">Short By:</label>
                             <select class="myniceselect nice-select">
                                 <option value="1">Default</option>
                                 <option value="2">Name, A to Z</option>
                                 <option value="3">Name, Z to A</option>
                                 <option value="4">Price, low to high</option>
                                 <option value="5">Price, high to low</option>
                                 <option value="5">Rating (Highest)</option>
                                 <option value="5">Rating (Lowest)</option>
                                 <option value="5">Model (A - Z)</option>
                                 <option value="5">Model (Z - A)</option>
                             </select>
                         </div>
                         <div class="product-showing">
                             <label class="select-label">Show:</label>
                             <select class="myniceselect short-select nice-select">
                                 <option value="1">15</option>
                                 <option value="1">1</option>
                                 <option value="1">2</option>
                                 <option value="1">3</option>
                                 <option value="1">4</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div class="shop-product-wrap grid gridview-3 listfullwidth img-hover-effect_area row">
                     <?php
                        $id = "id";
                        $brand = "brand";
                        $price = "price";
                        $city = "city";
                        $year = "year";
                        $enginecapacity = "enginecapacity";
                        $model = "model";
                        $mileage = "mileage";
                        $addeddate = "added";

                        foreach (GetAllCars() as $count => $array) {

                            echo "<div class='col-lg-4'>
                            <div class='product-slide_item'>
                                <div class='inner-slide'>
                                    <div class='single-product'>
                                        <div>
                                                <img class='primary-img' src='assets/images/product/large-size/1.jpg' alt='Uren's Product Image'>
                                            <div class='sticker'>
                                                <span class='sticker'>New</span>
                                            </div>
                                        </div>
                                        <div class='product-content'>
                                            <div class='product-desc_info'>
                                               
                                                <h4><a class='product-name' href='?page=single-product?id=$array[$id]' >$array[$brand] $array[$model]</a></h4>
                                                <h6><a class='product-name' href='?page=single-product?id=$array[$id]'>$array[$year] il • $array[$enginecapacity] L • $array[$mileage] KM</a></h6>

                                                <div class='price-box'>
                                                    <span class='new-price'>$array[$price]</span>
                                                </div>
                                                <br/>
                                                <p>$array[$city] , $array[$addeddate]<p/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>";
                        }

                        ?>

                 </div>
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="uren-paginatoin-area">
                             <div class="row">
                                 <div class="col-lg-12">
                                     <ul class="uren-pagination-box primary-color">
                                         <li class="active"><a href="javascript:void(0)">1</a></li>
                                         <li><a href="javascript:void(0)">2</a></li>
                                         <li><a href="javascript:void(0)">3</a></li>
                                         <li><a href="javascript:void(0)">4</a></li>
                                         <li><a href="javascript:void(0)">5</a></li>
                                         <li><a class="Next" href="javascript:void(0)">Next</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Uren's Shop Grid Fullwidth  Area End Here -->


 <!-- Begin Uren's Product Area -->
 <div class="uren-product_area">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title_area">
                     <span>Top New On This Week</span>
                     <h3>New Arrivals Products</h3>
                 </div>
                 <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area" data-slick-options='{
                        "slidesToShow": 6,
                        "arrows" : true
                        }' data-slick-responsive='[
                                                {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                                {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                            ]'>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <div class="sticker">
                                         <span class="sticker">New</span>
                                     </div>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Veniam officiis voluptates</a></h6>
                                         <div class="price-box">
                                             <span class="new-price">$122.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/2-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/2-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <div class="sticker-area-2">
                                         <span class="sticker-2">-20%</span>
                                         <span class="sticker">New</span>
                                     </div>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Corporis sed excepturi</a></h6>
                                         <div class="price-box">
                                             <span class="new-price new-price-2">$194.00</span>
                                             <span class="old-price">$241.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/3-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/3-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <span class="sticker">New</span>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Quidem iusto sapiente</a></h6>
                                         <div class="price-box">
                                             <span class="new-price">$175.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/4-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/4-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <div class="sticker-area-2">
                                         <span class="sticker-2">-5%</span>
                                         <span class="sticker">New</span>
                                     </div>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Ullam excepturi nesciunt</a></h6>
                                         <div class="price-box">
                                             <span class="new-price new-price-2">$145.00</span>
                                             <span class="old-price">$190.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/5-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/5-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <span class="sticker">New</span>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Minus ipsam rerum</a></h6>
                                         <div class="price-box">
                                             <span class="new-price">$130.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/6-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/6-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <div class="sticker-area-2">
                                         <span class="sticker-2">-15%</span>
                                         <span class="sticker">New</span>
                                     </div>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Labore aliquid eos</a></h6>
                                         <div class="price-box">
                                             <span class="new-price new-price-2">$240.00</span>
                                             <span class="old-price">$320.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/7-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/7-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <span class="sticker">New</span>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li class="silver-color"><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Enim nobis numquam</a></h6>
                                         <div class="price-box">
                                             <span class="new-price">$190.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-slide_item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <div class="product-img">
                                     <a href="?page=single-product">
                                         <img class="primary-img" src="assets/images/product/medium-size/8-1.jpg" alt="Uren's Product Image">
                                         <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Uren's Product Image">
                                     </a>
                                     <span class="sticker">New</span>
                                     <div class="add-actions">
                                         <ul>
                                             <li><a class="uren-add_cart" href="?page=cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                             </li>
                                             <li><a class="uren-wishlist" href="?page=wishlist" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                             </li>
                                             <li><a class="uren-add_compare" href="?page=compare" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-android-options"></i></a>
                                             </li>
                                             <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-android-open"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="product-content">
                                     <div class="product-desc_info">
                                         <div class="rating-box">
                                             <ul>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                                 <li><i class="ion-android-star"></i></li>
                                             </ul>
                                         </div>
                                         <h6><a class="product-name" href="?page=single-product">Dolorem voluptates aut</a></h6>
                                         <div class="price-box">
                                             <span class="new-price">$250.00</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Uren's Product Area End Here -->


 <!-- Begin Uren's Brand Area -->
 <div class="uren-brand_area">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="section-title_area">
                     <span>Top Quality Partner</span>
                     <h3>Shop By Brands</h3>
                 </div>
                 <div class="brand-slider uren-slick-slider img-hover-effect_area" data-slick-options='{
                        "slidesToShow": 6
                        }' data-slick-responsive='[
                                                {"breakpoint":1200, "settings": {"slidesToShow": 5}},
                                                {"breakpoint":992, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":767, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":577, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":321, "settings": {"slidesToShow": 1}}
                                            ]'>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/1.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/2.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/3.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/4.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/5.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/6.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/1.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/7.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <div class="slide-item">
                         <div class="inner-slide">
                             <div class="single-product">
                                 <a href="javascript:void(0)">
                                     <img src="assets/images/brand/2.jpg" alt="Uren's Brand Image">
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Uren's Brand Area End Here -->