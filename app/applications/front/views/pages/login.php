<?php require("includes/header.php")?>

        <!-- Main Header Area End Here -->
        <?php  require("includes/pagemenu.php") ?>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="register.html">account</a></li>
                        <li class="active"><a href="contact.html">contact us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- LogIn Page Start -->
        <div class="log-in ptb-45">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-md-6">
                        <div class="well mb-sm-30">
                            <div class="new-customer">
                                <h3 class="custom-title">new customer</h3>
                                <p class="mtb-10"><strong>Register</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                                <a class="customer-btn" href="register.html">continue</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10 custom-title">returnng customer</h3>
                                <p class="mb-10"><strong>I am a returning customer</strong></p>
                                <form action="#">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Enter your email address..." id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="pass" placeholder="Password" id="input-password" class="form-control">
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.html">Forgot password?</a></p>
                                    <input type="submit" value="Login" class="return-customer-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->
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
    </div>
    <!-- Main Wrapper End Here -->

 <?php require("includes/footer.php")?>
</body>

</html>