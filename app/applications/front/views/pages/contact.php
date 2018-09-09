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
                        <li class="active"><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Google Map Start -->
        <div class="goole-map pt-45">
            <div class="container">
                <div id="map" style="height:400px"></div>
            </div>
        </div>
        <!-- Google Map End -->
        <!-- Contact Email Area Start -->
        <div class="contact-area ptb-45">
            <div class="container">
                <h3 class="mb-20">Contact Us</h3>
                <p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <form id="contact-form" class="contact-form" action="mail.php" method="post">
                    <div class="address-wrapper row">
                        <div class="col-md-12">
                            <div class="address-fname">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-email">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="address-web">
                                <input class="form-control" type="text" name="website" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-subject">
                                <input class="form-control" type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="address-textarea">
                                <textarea name="message" class="form-control" placeholder="Write your message"></textarea>
                            </div>
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="footer-content mail-content clearfix">
                        <div class="send-email float-md-right">
                            <input value="Submit" class="return-customer-btn" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contact Email Area End -->
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
    <?php
require("includes/footer.php");
?>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.761226, 90.420766), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#314453"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "lightness": "-12"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#4bc7e9"
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.761226, 90.420766),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
    <!-- Main activaion js -->

</body>

</html>