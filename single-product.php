<!-- Begin Uren's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Single Product Style</h2>
            <ul>
                <li><a href="?page=main">Home</a></li>
                <li class="active">Tab Style Left</li>
            </ul>
        </div>
    </div>
</div>
<!-- Uren's Breadcrumb Area End Here -->

<!-- Begin Uren's Tab Style Left Area -->
<div class="sp-area sp-tab-style_left">
    <div class="container-fluid">
        <div class="sp-nav">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sp-img_area">
                        <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                                                        "slidesToShow": 1,
                                                        "arrows": false,
                                                        "fade": true,
                                                        "draggable": false,
                                                        "swipe": false,
                                                        "asNavFor": ".sp-img_slider-nav"
                                                        }'>
                            <div class="single-slide red zoom">
                                <img src="assets/images/product/large-size/1.jpg" alt="Uren's Product Image">
                            </div>
                        </div>
                        <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-4" data-slick-options='{
                                                        "slidesToShow": 3,
                                                        "asNavFor": ".sp-img_slider",
                                                        "focusOnSelect": true,
                                                        "arrows" : true,
                                                        "vertical" : true
                                                        }'>
                            <div class="single-slide red">
                                <img src="assets/images/product/small-size/1.jpg" alt="Uren's Product Thumnail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sp-content">
                        <?php

                        $queryString = $_SERVER["QUERY_STRING"];

                        $index = strpos($queryString, "id");

                        $id = substr($queryString, $index + 3, strlen($queryString));

                        $car = GetCarById($id);


                        foreach ($car as $x => $x_value) {
                            echo  "<div class='sp-heading'>
                                </div>
                                <div class='sp-essential_stuff'><ul>";
                            foreach ($x_value as $inX => $inX_value) {
                                echo "<li><b>" . strtoupper($inX) . "</b>  :  " . $inX_value . "<li/>";
                            }
                            echo  "</ul></div>";
                            break;
                        }
                        ?>
                        <div class="qty-btn_area">
                            <ul>
                                <li><a class="qty-wishlist_btn" href="?page=wishlist" data-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Tab Style Left Area End Here -->

<!-- Begin Uren's Single Product Tab Area -->
<div class="sp-product-tab_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sp-product-tab_nav">
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                            </li>
                            <li><a data-toggle="tab" href="#specification"><span>Specification</span></a></li>
                            <li><a data-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-content uren-tab_content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <ul>
                                    <li>
                                        <strong>Ullam aliquam</strong>
                                        <span>Voluptatum, minus? Optio molestias voluptates aspernatur laborum
                                            ratione minima, natus eaque nemo rem quisquam, suscipit architecto
                                            saepe. Debitis omnis labore laborum consectetur, quas, esse
                                            voluptates minus aliquam modi nesciunt earum! Vero rerum molestiae
                                            corporis libero repellat doloremque quae sapiente ratione maiores
                                            qui aliquam, sunt obcaecati! Iure nisi doloremque numquam
                                            delectus.</span>
                                    </li>
                                    <li>
                                        <strong>Enim tempore</strong>
                                        <span>Molestias amet quibusdam eligendi exercitationem alias labore
                                            tenetur quaerat veniam similique aspernatur eveniet, suscipit
                                            corrupti itaque dolore deleniti nobis, rerum reprehenderit
                                            recusandae. Eligendi beatae asperiores nisi distinctio doloribus
                                            voluptatibus voluptas repellendus tempore unde velit temporibus
                                            atque maiores aliquid deserunt aspernatur amet, soluta fugit magni
                                            saepe fugiat vel sunt voluptate vitae</span>
                                    </li>
                                    <li>
                                        <strong>Laudantium suscipit</strong>
                                        <span>Odit repudiandae maxime, ducimus necessitatibus error fugiat nihil
                                            eum dolorem animi voluptates sunt, rem quod reprehenderit expedita,
                                            nostrum sit accusantium ut delectus. Voluptates at ipsam, eligendi
                                            labore dignissimos consectetur reprehenderit id error excepturi illo
                                            velit ratione nisi nam saepe quod! Reiciendis eos, velit fugiat
                                            voluptates accusamus nesciunt dicta ratione mollitia, asperiores
                                            error aliquam! Reprehenderit provident, omnis blanditiis fugit,
                                            accusamus deserunt illum unde, voluptatum consequuntur illo officiis
                                            labore doloremque quidem aperiam! Fuga, expedita? Laboriosam eum,
                                            tempore vitae libero voluptate omnis ducimus doloremque hic
                                            quibusdam reiciendis ab itaque aperiam maiores laudantium esse,
                                            consequuntur quos labore modi quasi recusandae distinctio iusto
                                            optio officia tempora.</span>
                                    </li>
                                    <li>
                                        <strong>Molestiae veritatis officia</strong>
                                        <span>Illum fuga esse tenetur inventore, in voluptatibus saepe iste quia
                                            cupiditate, explicabo blanditiis accusantium ut. Eaque nostrum,
                                            quisquam doloribus asperiores tempore autem. Ea perspiciatis vitae
                                            reiciendis maxime similique vel, id ratione blanditiis ullam
                                            officiis odio sunt nam quos atque accusantium ad! Repellendus, magni
                                            aliquid. Iure asperiores veniam eum unde dignissimos reprehenderit
                                            ut atque velit, harum labore nam expedita, pariatur excepturi
                                            consectetur animi optio mollitia ad a natus eaque aut assumenda
                                            inventore dolor obcaecati! Enim ab tempore nulla iusto consequuntur
                                            quod sit voluptatibus adipisci earum fuga, explicabo amet,
                                            provident, molestiae optio. Ducimus ex necessitatibus assumenda,
                                            nisi excepturi ut aspernatur est eius dignissimos pariatur unde
                                            ipsum sunt quaerat.</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div id="specification" class="tab-pane" role="tabpanel">
                            <table class="table table-bordered specification-inner_stuff">
                                <tbody>
                                    <tr>
                                        <td colspan="2"><strong>Memory</strong></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>test 1</td>
                                        <td>8gb</td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><strong>Processor</strong></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>No. of Cores</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="reviews" class="tab-pane" role="tabpanel">
                            <div class="tab-pane active" id="tab-review">
                                <form class="form-horizontal" id="form-review">
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong>Customer</strong></td>
                                                    <td class="text-right">15/09/20</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>Good product! Thank you very much</p>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li><i class="ion-android-star"></i></li>
                                                                <li><i class="ion-android-star"></i></li>
                                                                <li><i class="ion-android-star"></i></li>
                                                                <li><i class="ion-android-star"></i></li>
                                                                <li><i class="ion-android-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h2>Write a review</h2>
                                    <div class="form-group required">
                                        <div class="col-sm-12 p-0">
                                            <label>Your Email <span class="required">*</span></label>
                                            <input class="review-input" type="email" name="con_email" id="con_email" required>
                                        </div>
                                    </div>
                                    <div class="form-group required second-child">
                                        <div class="col-sm-12 p-0">
                                            <label class="control-label">Share your opinion</label>
                                            <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                            <div class="help-block"><span class="text-danger">Note:</span> HTML
                                                is not
                                                translated!</div>
                                        </div>
                                    </div>
                                    <div class="form-group last-child required">
                                        <div class="col-sm-12 p-0">
                                            <div class="your-opinion">
                                                <label>Your Rating</label>
                                                <span>
                                                    <select class="star-rating">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="uren-btn-ps_right">
                                            <button class="uren-btn-2">Continue</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Single Product Tab Area End Here -->

<!-- Begin Uren's Product Area -->
<div class="uren-product_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title_area">
                    <span></span>
                    <h3>Related Products</h3>
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
                                        <h6><a class="product-name" href="?page=single-product">Veniam officiis
                                                voluptates</a></h6>
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
                                        <h6><a class="product-name" href="?page=single-product">Corporis sed
                                                excepturi</a></h6>
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
                                        <h6><a class="product-name" href="?page=single-product">Quidem iusto
                                                sapiente</a></h6>
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
                                        <h6><a class="product-name" href="?page=single-product">Ullam excepturi
                                                nesciunt</a></h6>
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
                                        <h6><a class="product-name" href="?page=single-product">Minus ipsam
                                                rerum</a></h6>
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
                                        <h6><a class="product-name" href="?page=single-product">Labore aliquid
                                                eos</a></h6>
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
                                        <h6><a class="product-name" href="?page=single-product">Enim nobis
                                                numquam</a></h6>
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
                                        <h6><a class="product-name" href="?page=single-product">Dolorem
                                                voluptates aut</a></h6>
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