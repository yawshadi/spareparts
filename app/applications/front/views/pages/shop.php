<?php
require("includes/header.php");
?>


        <!-- Main Header Area End Here -->
        <?php  require("includes/pagemenu.php") ?>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="shop.html">Shop</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Shop Page Start -->
        <div class="main-shop-page ptb-45">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="sidebar">
                            <!-- Sidebar Electronics Categorie Start -->
                            <div class="electronics mb-30">
                                <h3 class="sidebar-title e-title">Electronics</h3>
                                <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                                    <ul>
                                        <li class="has-sub"><a href="#">Camera</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.html">Cords and Cables</a></li>
                                                <li><a href="shop.html">gps accessories</a></li>
                                                <li><a href="shop.html">Microphones</a></li>
                                                <li><a href="shop.html">Wireless Transmitters</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">gamepad</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.html">cube lifestyle hd</a></li>
                                                <li><a href="shop.html">gopro hero4</a></li>
                                                <li><a href="shop.html">bhandycam cx405ags</a></li>
                                                <li><a href="shop.html">vixia hf r600</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">Digital Cameras</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.html">Gold eye</a></li>
                                                <li><a href="shop.html">Questek</a></li>
                                                <li><a href="shop.html">Snm</a></li>
                                                <li><a href="shop.html">vantech</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <li class="has-sub"><a href="#">Virtual Reality</a>
                                            <ul class="category-sub">
                                                <li><a href="shop.html">Samsung</a></li>
                                                <li><a href="shop.html">Toshiba</a></li>
                                                <li><a href="shop.html">Transcend</a></li>
                                                <li><a href="shop.html">Sandisk</a></li>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                    </ul>
                                </div>
                                <!-- category-menu-end -->
                            </div>
                            <!-- Sidebar Electronics Categorie End -->
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-30">
                                <h3 class="sidebar-title">filter by price</h3>
                                <form action="#" class="sidbar-style">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly>
                                </form>
                            </div>
                            <!-- Price Filter Options End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">categories</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="camera" type="checkbox">
                                        <label class="form-check-label" for="camera">Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                        <label class="form-check-label" for="GamePad">GamePad (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                        <label class="form-check-label" for="Digital">Digital Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual"> Virtual Reality (8) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Product Size Start -->
                            <div class="size mb-30">
                                <h3 class="sidebar-title">size</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">S (6)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">M (9)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">L (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-30">
                                <h3 class="sidebar-title">color</h3>
                                <ul class="color-option sidbar-style">
                                    <li>
                                        <span class="white"></span>
                                        <a href="#">white (4)</a>
                                    </li>
                                    <li>
                                        <span class="orange"></span>
                                        <a href="#">Orange (2)</a>
                                    </li>
                                    <li>
                                        <span class="blue"></span>
                                        <a href="#">Blue (6)</a>
                                    </li>
                                    <li>
                                        <span class="yellow"></span>
                                        <a href="#">Yellow (8)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Single Banner Start -->
                            <div class="sidebar-banner">
                                <a href="shop.html"><img src="<?php echo URLROOT ?>/front/img/banner/10.jpg" alt="slider-banner"></a>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a class="active" data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                    <li><span class="grid-item-list">There are 8 products.</span></li>
                                </ul>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-md-flex align-items-center">
                                    <label>Sort By:</label>
                                    <select class="sorter wide">
                                        <option value="Position">Relevance</option>
                                        <option value="Product Name">Neme, A to Z</option>
                                        <option value="Product Name">Neme, Z to A</option>
                                        <option value="Price">Price low to heigh</option>
                                        <option value="Price">Price heigh to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>
                        <!-- Grid & List View End -->
                        <div class="main-categorie mb-all-40">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content border-default fix">
                                <div id="grid-view" class="tab-pane fade ">
                                    <div class="row">
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/35.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/14.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">summer dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p><span class="price">$27.45</span></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/14.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/11.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">hot summer dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p><span class="price">$22.45</span><del class="prev-price">$30.50</del></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/22.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/23.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">winter dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p><span class="price">$11.40</span><del class="prev-price">$20.50</del></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/25.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/26.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">summer dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p><span class="price">$33.45</span><del class="prev-price">$40.25</del></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/30.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/31.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">wnter miami dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p><span class="price">$22.18</span><del class="prev-price">$30.20</del></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/32.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/16.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">printed dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p><span class="price">$27.45</span></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/18.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/19.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">printed hot dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p><span class="price">$55.15</span><del class="prev-price">$60.20</del></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/22.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/21.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">cultural dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p><span class="price">$21.12</span></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/6.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/5.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">printed dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p><span class="price">$31.99</span></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/7.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/8.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">full sleeves shirt</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p><span class="price">$21.00</span><del class="prev-price">$25.00</del></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/12.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">new arrival dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p><span class="price">$20.45</span><del class="prev-price">$30.10</del></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/4.jpg" alt="single-product">
                                                        <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/5.jpg" alt="single-product">
                                                    </a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html">summer dress</a></h4>
                                                        <div class="product-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p><span class="price">$27.45</span></p>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart">Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="#" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                            <a href="product.html" title="" data-original-title="Details"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane fade show active">
                                    <!-- Single Product Start -->
                                    <div class="row single-product">         
                                        <!-- Product Image Start -->
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-4">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/35.jpg" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/7.jpg" alt="single-product">
                                                </a>
                                                <span class="sticker-new">new</span>
                                                <span class="sticker-sale">-8%</span>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-8">
                                            <div class="pro-content">
                                                <h4><a href="product.html">Faded Short Sleeves T-shirt</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p><span class="price">$15.19</span><del class="prev-price">$16.50</del></p>
                                                <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                <div class="pro-actions">
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                                    </div>
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                        <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="row single-product">         
                                        <!-- Product Image Start -->
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-4">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/14.jpg" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/15.jpg" alt="single-product">
                                                </a>
                                                <span class="sticker-new">new</span>
                                                <span class="sticker-sale">-8%</span>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-8">
                                            <div class="pro-content">
                                                <h4><a href="product.html">Printed Summer Dress</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p><span class="price">$22.00</span></p>
                                                <p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</p>
                                                <div class="pro-actions">
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                                    </div>
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                        <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="row single-product">         
                                        <!-- Product Image Start -->
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-4">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/12.jpg" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/11.jpg" alt="single-product">
                                                </a>
                                                <span class="sticker-new">new</span>
                                                <span class="sticker-sale">-8%</span>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-8">
                                            <div class="pro-content">
                                                <h4><a href="product.html">Printed Hot Dress</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p><span class="price">$35.00</span><del class="prev-price">$46.50</del></p>
                                                <p>Sleeveless knee-length chiffon dress. V-neckline with elastic under the bust lining.</p>
                                                <div class="pro-actions">
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                                    </div>
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                        <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="row single-product">         
                                        <!-- Product Image Start -->
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-4">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/13.jpg" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/14.jpg" alt="single-product">
                                                </a>
                                                <span class="sticker-new">new</span>
                                                <span class="sticker-sale">-8%</span>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-4">
                                            <div class="pro-content">
                                                <h4><a href="product.html">Short Sleeves T-shirt</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p><span class="price">$32.99</span></p>
                                                <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                <div class="pro-actions">
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                                    </div>
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                        <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="row single-product">         
                                        <!-- Product Image Start -->
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-4">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/11.jpg" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/7.jpg" alt="single-product">
                                                </a>
                                                <span class="sticker-new">new</span>
                                                <span class="sticker-sale">-8%</span>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-8">
                                            <div class="pro-content">
                                                <h4><a href="product.html">Printed Winter Dress</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p><span class="price">$33.10</span><del class="prev-price">$35.50</del></p>
                                                <p>short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                <div class="pro-actions">
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                                    </div>
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                        <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="row single-product">         
                                        <!-- Product Image Start -->
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-4">
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/8.jpg" alt="single-product">
                                                    <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/7.jpg" alt="single-product">
                                                </a>
                                                <span class="sticker-new">new</span>
                                                <span class="sticker-sale">-8%</span>
                                            </div>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-8">
                                            <div class="pro-content">
                                                <h4><a href="product.html">Faded Short Sleeves T-shirt</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p><span class="price">$25.45</span><del class="prev-price">$26.50</del></p>
                                                <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                <div class="pro-actions">
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                                    </div>
                                                    <div class="actions-secondary">
                                                        <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                                                        <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- #list view End -->
                                <!-- Product Pagination Info -->
                                <div class="product-pagination mb-20 pb-15">
                                    <span class="grid-item-list">Showing 1-8 of 8 item(s)</span>
                                </div>
                                <ul class="blog-pagination ptb-20">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                                <!-- End of .blog-pagination -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Shop Page End -->
        <!-- Signup Newsletter Start -->
        <div class="newsletter light-blue-bg">
            <div class="container">
                <div class="row">
                     <div class="col-xl-5 col-lg-6">
                         <div class="main-news-desc mb-all-30">
                             <div class="news-desc">
                                 <h3>Sign Up For Newsletters</h3>
                                 <p>Be the First to Know. Sign up for newsletter today</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-7 col-lg-6">
                         <div class="newsletter-box">
                             <form action="#">
                                  <input class="subscribe" placeholder="your email address" name="email" id="subscribe" type="text">
                                  <button type="submit" class="submit">subscribe!</button>
                             </form>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Signup-Newsletter End -->
        <!-- Footer Area Start Here -->
        <footer class="white-bg pt-45">
            <!-- Footer Top Start -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer mb-sm-40">
                                <h3 class="footer-title">Products</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">prices drop</a></li>
                                        <li><a href="#">new products</a></li>
                                        <li><a href="#">best sale</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer style-change mb-sm-40">
                                <h3 class="footer-title">Our company</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="login.html">delivery</a></li>
                                        <li><a href="#">legal notice</a></li>
                                        <li><a href="#">terms & condition</a></li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer mb-sm-40">
                                <h3 class="footer-title">Your account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="login.html">addresses</a></li>
                                        <li><a href="#">credit slips</a></li>
                                        <li><a href="#">orders</a></li>
                                        <li><a href="#">personal info</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer">
                                <div class="logo-footer">
                                    <a href="index.html"><img src="<?php echo URLROOT ?>/front/img/logo/logo2.png" alt="footer-logo"></a>
                                </div>
                                <div class="footer-content">
                                    <p>We are a team of designers and developers that create high quality HTML, Magento, Prestashop, Opencart.</p>
                                    <h5 class="contact-info mtb-10">contact info:</h5>
                                    <p>Address will be here</p>
                                    <div class="social-footer-list mt-20">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Middle Start -->
            <div class="footer-middle text-center pb-20">
                <div class="container">
                    <div class="footer-middle-content ptb-45">
                        <div class="tag-content"><a href="#">Online Shopping</a> <a href="#">Promotions</a> <a href="#">My Orders</a> <a href="#">Help</a> <a href="#">Customer Service</a> <a href="#">Support</a> <a href="#">Most Populars</a> <a href="#">New Arrivals</a> <a href="#">Special Products</a> <a href="#">Manufacturers</a> <a href="#">Our Stores</a> <a href="#">Shipping</a> <a href="#">Payments</a> <a href="#">Warantee</a> <a href="#">Refunds</a> <a href="#">Checkout</a> <a href="#">Discount</a> <a href="#">Terms & Conditions</a> <a href="#">Policy</a> <a href="#">Shipping</a> <a href="#">Payments</a> <a href="#">Returns</a> <a href="#">Refunds</a></div>
                        <div class="payment mt-25">
                            <a href="#"><img class="img" src="<?php echo URLROOT ?>/front/img/payment/1.png" alt="payment-image"></a>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Middle End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom off-white-bg ptb-25">
                <div class="container">
                     <div class="col-sm-12">
                         <div class="row justify-content-md-between justify-content-center footer-bottom-content">                    
                            <p>Copyright © <a target="_blank" href="#">Volga</a> All Rights Reserved.</p>
                            <div class="footer-bottom-nav mt-sm-15">
                                <nav>
                                    <ul class="footer-nav-list">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="shop.html">shop</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                         </div>
                         <!-- Row End -->
                     </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer Area End Here -->
        <!-- Quick View Content Start -->
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-lg-5 col-md-6 col-sm-5">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="thumb1" class="tab-pane fade show active">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/35.jpg"><img src="<?php echo URLROOT ?>/front/img/products/35.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb2" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/13.jpg"><img src="<?php echo URLROOT ?>/front/img/products/13.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb3" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/15.jpg"><img src="<?php echo URLROOT ?>/front/img/products/15.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb4" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/4.jpg"><img src="<?php echo URLROOT ?>/front/img/products/4.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumb5" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/5.jpg"><img src="<?php echo URLROOT ?>/front/img/products/5.jpg" alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->
                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                                <a class="active" data-toggle="tab" href="#thumb1"><img src="<?php echo URLROOT ?>/front/img/products/35.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb2"><img src="<?php echo URLROOT ?>/front/img/products/13.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb3"><img src="<?php echo URLROOT ?>/front/img/products/15.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb4"><img src="<?php echo URLROOT ?>/front/img/products/4.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumb5"><img src="<?php echo URLROOT ?>/front/img/products/5.jpg" alt="product-thumbnail"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-lg-7 col-md-6 col-sm-7">
                                        <div class="thubnail-desc fix mt-sm-40">
                                            <h3 class="product-header">Printed Summer Dress</h3>
                                            <div class="pro-price mtb-30">
                                                <p class="d-flex align-items-center"><span class="prev-price">16.51</span><span class="price">$15.19</span><span class="saving-price">save 8%</span></p>
                                            </div>
                                            <p class="mb-20 pro-desc-details">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                                            <div class="product-size mb-20 clearfix">
                                                <label>Size</label>
                                                <select class="">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="color mb-20">
                                                <label>color</label>
                                                <ul class="color-list">
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="box-quantity d-flex">
                                                <form action="#">
                                                    <input class="quantity mr-40" type="number" min="1" value="1">
                                                </form>
                                                <a class="add-cart" href="cart.html">add to cart</a>
                                            </div>
                                            <div class="pro-ref mt-15">
                                                <p><span class="in-stock"><i class="ion-checkmark-round"></i> IN STOCK</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="custom-footer">
                                <div class="socila-sharing">
                                    <ul class="d-flex">
                                        <li>share</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Main Wrapper End Here -->

  <?php
 require 'includes/footer.php';
 ?>
</body>

</html>