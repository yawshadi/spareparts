<?php require("includes/header.php")?>


        <!-- Main Header Area End Here -->
        <?php  require("includes/pagemenu.php") ?>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">account</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- My Account Page Start Here -->
        <div class="my-account white-bg ptb-45">
            <div class="container">
                <div class="account-dashboard">
                   <div class="dashboard-upper-info">
                       <div class="row align-items-center no-gutters">
                           <div class="col-xl-3 col-lg-3 col-md-6">
                               <div class="d-single-info">
                                   <p class="user-name">Hello <span>yourmail@info</span></p>
                                   <p>(not yourmail@info? <a href="#" class="log-out">Log Out</a>)</p>
                               </div>
                           </div>
                           <div class="col-xl-3 col-lg-4 col-md-6">
                               <div class="d-single-info">
                                   <p>Need Assistance? Customer service at.</p>
                                   <p>admin@example.com.</p>
                               </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-6">
                               <div class="d-single-info">
                                   <p>E-mail them at </p>
                                   <p>support@example.com</p>
                               </div>
                           </div>
                           <div class="col-xl-3 col-lg-2 col-md-6">
                               <div class="d-single-info text-lg-center">
                                   <a class="view-cart" href="cart.html"><i class="fa fa-cart-plus" aria-hidden="true"></i>view cart</a>
                               </div>
                           </div>
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <!-- Nav tabs -->
                            <ul class="nav flex-column dashboard-list" role="tablist">
                                <li><a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a></li>
                                <li> <a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#downloads">Downloads</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#account-details">Account details</a></li>
                                <li><a class="nav-link" href="login.html" href="#logout">logout</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-10">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content mt-all-40">
                                <div id="dashboard" class="tab-pane fade show active">
                                    <h3>Dashboard </h3>
                                    <p>From your account dashboard. you can easily check & view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                </div>
                                <div id="orders" class="tab-pane fade">
                                    <h3>Orders</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>	 	 	 	
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>May 10, 2018</td>
                                                    <td>Processing</td>
                                                    <td>$25.00 for 1 item </td>
                                                    <td><a class="view" href="cart.html">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>May 10, 2018</td>
                                                    <td>Processing</td>
                                                    <td>$17.00 for 1 item </td>
                                                    <td><a class="view" href="cart.html">view</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="downloads" class="tab-pane fade">
                                    <h3>Downloads</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Downloads</th>
                                                    <th>Expires</th>
                                                    <th>Download</th>	 	 	 	
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Haven - Free Real Estate PSD Template</td>
                                                    <td>May 10, 2018</td>
                                                    <td>never</td>
                                                    <td><a class="view" href="#">Click Here To Download Your File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Nevara - ecommerce html template</td>
                                                    <td>Sep 11, 2018</td>
                                                    <td>never</td>
                                                    <td><a class="view" href="#">Click Here To Download Your File</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="address" class="tab-pane">
                                   <p>The following addresses will be used on the checkout page by default.</p>
                                    <h4 class="billing-address">Billing address</h4>
                                    <a class="view" href="#">edit</a>
                                    <p>Bayazid Hasan</p>
                                    <p>Bangladesh</p>   
                                </div>
                                <div id="account-details" class="tab-pane fade">
                                    <h3>Account details </h3>
                                    <div class="register-form login-form clearfix">
                                        <form action="#">
                                            <div class="form-group row align-items-center">
                                                <label class="col-lg-3 col-md-4 col-form-label">Social title</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mr.</span>
                                                    <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mrs.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="f-name" class="col-lg-3 col-md-4 col-form-label">First Name</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="text" class="form-control" id="f-name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="l-name" class="col-lg-3 col-md-4 col-form-label">Last Name</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="text" class="form-control" id="l-name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-lg-3 col-md-4 col-form-label">Email address</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="text" class="form-control" id="email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputpassword" class="col-lg-3 col-md-4 col-form-label">Current password</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="password" class="form-control" id="inputpassword">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="newpassword" class="col-lg-3 col-md-4 col-form-label">New password</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="password" class="form-control" id="newpassword">
                                                    <button class="btn show-btn" type="button">Show</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="v-password" class="col-lg-3 col-md-4 col-form-label">Confirm password</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="password" class="form-control" id="c-password">
                                                    <button class="btn show-btn" type="button">Show</button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="birth" class="col-lg-3 col-md-4 col-form-label">Birthdate</label>
                                                <div class="col-lg-6 col-md-8">
                                                    <input type="text" class="form-control" id="birth" placeholder="MM/DD/YYYY">
                                                </div>
                                            </div>
                                            <div class="form-check row p-0 mt-20">
                                                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-4">
                                                    <input class="form-check-input" value="#" id="offer" type="checkbox">
                                                    <label class="form-check-label" for="offer">Receive offers from our partners</label>
                                                </div>
                                            </div>
                                            <div class="form-check row p-0 mt-20">
                                                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-4">
                                                    <input class="form-check-input" value="#" id="subscribe" type="checkbox">
                                                    <label class="form-check-label" for="subscribe">Sign up for our newsletter<br>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers..</label>
                                                </div>
                                            </div>
                                            <div class="register-box mt-40">
                                                <button type="submit" class="return-customer-btn float-right">Save</button>
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
        <!-- My Account Page End Here -->
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

    <!-- jquery 3.2.1 -->
    <?php require("includes/footer.php")?>
</body>

</html>