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
                        <li><a href="shop.html">Shop</a></li>
                        <li class="active"><a href="product.html">Products</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail ptb-45">
            <div class="container">
                <div class="thumb-bg">
                    <div class="row">
                        <!-- Main Thumbnail Image Start -->
                        <div class="col-lg-5 mb-all-40">
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
                        <div class="col-lg-7">
                            <div class="thubnail-desc fix">
                                <h3 class="product-header">Faded Short Sleeves T-shirt</h3>
                                <div class="rating-summary fix mtb-10">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="rating-feedback">
                                        <a href="#">(1 review)</a>
                                        <a href="#">add to your review</a>
                                    </div>
                                </div>
                                <div class="pro-price mtb-30">
                                    <p class="d-flex align-items-center"><span class="prev-price">16.51</span><span class="price">$15.19</span><span class="saving-price">save 8%</span></p>
                                </div>
                                <p class="mb-20 pro-desc-details">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                <div class="product-size mb-20 clearfix">
                                    <label>Size</label>
                                    <select class="">
                                      <option>S</option>
                                      <option>M</option>
                                      <option>L</option>
                                    </select>
                                </div>
                                <div class="color clearfix mb-20">
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
                                <div class="socila-sharing mt-25">
                                    <ul class="d-flex">
                                        <li>share</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-policy mt-20">
                                   <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Security policy (edit with Customer reassurance module)
                                   <p><i class="fa fa-truck" aria-hidden="true"></i>Delivery policy (edit with Customer reassurance module)
                                   <p><i class="fa fa-exchange" aria-hidden="true"></i>Return policy (edit with Customer reassurance module)
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Description End -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-thumb-desc nav tabs-area" role="tablist">
                            <li><a class="active" data-toggle="tab" href="#dtail">Product Details</a></li>
                            <li><a data-toggle="tab" href="#review">Reviews 1</a></li>
                        </ul>
                        <!-- Product Thumbnail Tab Content Start -->
                        <div class="tab-content thumb-content border-default">
                            <div id="dtail" class="tab-pane fade show active">
                                <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <!-- Reviews Start -->
                                <div class="review border-default universal-padding">
                                    <div class="group-title">
                                        <h2>customer review</h2>
                                    </div>
                                    <h4 class="review-mini-title">Hastech</h4>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Hastech</label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Review by <a href="https://themeforest.net/user/hastech">Hastech</a></label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <label>Posted on 7/20/18</label>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                </div>
                                <!-- Reviews End -->
                                <!-- Reviews Start -->
                                <div class="review border-default universal-padding mt-30">
                                    <h2 class="review-title mb-30">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                                    <p class="review-mini-title">your rating</p>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                    <!-- Reviews Field Start -->
                                    <div class="riview-field mt-40">
                                        <form autocomplete="off" action="#">
                                            <div class="form-group">
                                                <label class="req" for="sure-name">Nickname</label>
                                                <input type="text" class="form-control" id="sure-name" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="subject">Summary</label>
                                                <input type="text" class="form-control" id="subject" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="comments">Review</label>
                                                <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                            </div>
                                            <button type="submit" class="customer-btn">Submit Review</button>
                                        </form>
                                    </div>
                                    <!-- Reviews Field Start -->
                                </div>
                                <!-- Reviews End -->
                            </div>
                        </div>
                        <!-- Product Thumbnail Tab Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- Realted Products Start Here -->
        <div class="second-featured-products related-pro pb-45">
            <div class="container">
               <!-- Post Title Start -->
               <div class="post-title">
                   <h2><i class="fa fa-trophy" aria-hidden="true"></i>Realted products</h2>
               </div>
               <!-- Post Title End -->
                <!-- New Pro Tow Activation Start -->
                <div class="featured-pro-active owl-carousel">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/9.jpg" alt="single-product">
                                <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/10.jpg" alt="single-product">
                            </a>
                            <span class="sticker-new">new</span>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">printed summer dress</a></h4>
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
                                    <a href="cart.html" title="Add to Cart">Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="fa fa-heart-o"></i></a>
                                    <a href="product.html" title="Details"><i class="fa fa-signal"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/14.jpg" alt="single-product">
                                <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/15.jpg" alt="single-product">
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
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p><span class="price">$22.12</span></p>
                            </div>
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
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/4.jpg" alt="single-product">
                                <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/6.jpg" alt="single-product">
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
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p><span class="price">$25.45</span><del class="prev-price">$27.12</del></p>
                            </div>
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
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/34.jpg" alt="single-product">
                                <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/32.jpg" alt="single-product">
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
                                <p><span class="price">$22.45</span><del class="prev-price">$25.20</del></p>
                            </div>
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
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/8.jpg" alt="single-product">
                                <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/9.jpg" alt="single-product">
                            </a>
                            <span class="sticker-new">new</span>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">winter hot dress</a></h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p><span class="price">$30.45</span></p>
                            </div>
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
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.html">
                                <img class="primary-img" src="<?php echo URLROOT ?>/front/img/products/9.jpg" alt="single-product">
                                <img class="secondary-img" src="<?php echo URLROOT ?>/front/img/products/10.jpg" alt="single-product">
                            </a>
                            <span class="sticker-new">new</span>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.html">printed small dress</a></h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p><span class="price">$27.45</span><del class="prev-price">$30.50</del></p>
                            </div>
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
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- New Pro Tow Activation End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Realated Products End Here -->
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
                                            <div id="thumbs1" class="tab-pane fade show active">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/35.jpg"><img src="<?php echo URLROOT ?>/front/img/products/35.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumbs2" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/13.jpg"><img src="<?php echo URLROOT ?>/front/img/products/13.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumbs3" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/15.jpg"><img src="<?php echo URLROOT ?>/front/img/products/15.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumbs4" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/4.jpg"><img src="<?php echo URLROOT ?>/front/img/products/4.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="thumbs5" class="tab-pane fade">
                                                <a data-fancybox="images" href="<?php echo URLROOT ?>/front/img/products/5.jpg"><img src="<?php echo URLROOT ?>/front/img/products/5.jpg" alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->
                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                                <a class="active" data-toggle="tab" href="#thumbs1"><img src="<?php echo URLROOT ?>/front/img/products/35.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumbs2"><img src="<?php echo URLROOT ?>/front/img/products/13.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumbs3"><img src="<?php echo URLROOT ?>/front/img/products/15.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumbs4"><img src="<?php echo URLROOT ?>/front/img/products/4.jpg" alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#thumbs5"><img src="<?php echo URLROOT ?>/front/img/products/5.jpg" alt="product-thumbnail"></a>
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