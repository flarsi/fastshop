<?php
    require_once 'layouts/header.view.php'
?>

    <!-- content-section-starts -->
    <div class="content">
        <div class="ordering-section" id="Order">
            <div class="container">
                <div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
                    <h3>Ordering food was never so easy</h3>
                    <div class="dotted-line">
                        <h4>Just 4 steps to follow </h4>
                    </div>
                </div>
                <div class="ordering-section-grids">
                    <div class="col-md-3 ordering-section-grid">
                        <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
                        <i class="one"></i><br>
                        <i class="one-icon"></i>
                        <p>Choose <span>Your Restaurant</span></p>
                        <label></label>
                    </div>
                </div>
                <div class="col-md-3 ordering-section-grid">
                    <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
                    <i class="two"></i><br>
                    <i class="two-icon"></i>
                    <p>Order  <span>Your Cuisine</span></p>
                    <label></label>
                </div>
            </div>
            <div class="col-md-3 ordering-section-grid">
                <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
                <i class="three"></i><br>
                <i class="three-icon"></i>
                <p>Pay   <span> online / on delivery</span></p>
                <label></label>
            </div>
        </div>
        <div class="col-md-3 ordering-section-grid">
            <div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
            <i class="four"></i><br>
            <i class="four-icon"></i>
            <p>Enjoy <span>your food </span></p>
        </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    </div>
    <div class="special-offers-section">
        <div class="container">
            <div class="special-offers-section-head text-center dotted-line">
                <h4>Special Offers</h4>
            </div>
            <div class="special-offers-section-grids">
                <div class="m_3"><span class="middle-dotted-line"> </span> </div>
                <div class="container">
                    <ul id="flexiselDemo3">
                        <li>
                            <div class="offer">
                                <div class="offer-image">
                                    <img src="web/images/p1.jpg" class="img-responsive" alt=""/>
                                </div>
                                <div class="offer-text">
                                    <h4>Olister Combo pack lorem</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <input type="button" value="Grab It">
                                    <span></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="offer">
                                <div class="offer-image">
                                    <img src="web/images/p2.jpg" class="img-responsive" alt=""/>
                                </div>
                                <div class="offer-text">
                                    <h4>Chicken Jumbo pack lorem</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <input type="button" value="Grab It">
                                    <span></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="offer">
                                <div class="offer-image">
                                    <img src="web/images/p3.jpg" class="img-responsive" alt=""/>
                                </div>
                                <div class="offer-text">
                                    <h4>Crab Combo pack lorem</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <input type="button" value="Grab It">
                                    <span></span>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="offer">
                                <div class="offer-image">
                                    <img src="web/images/p2.jpg" class="img-responsive" alt=""/>
                                </div>
                                <div class="offer-text">
                                    <h4>Chicken Jumbo pack lorem</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                    <input type="button" value="Grab It">
                                    <span></span>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function() {

                            $("#flexiselDemo3").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: false,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="web/js/jquery.flexisel.js"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="popular-restaurents" id="Popular-Restaurants">
        <div class="container">
            <div class="col-md-4 top-restaurents">
                <div class="top-restaurent-head">
                    <h3>Top Restaurants</h3>
                </div>
                <div class="top-restaurent-grids">
                    <div class="top-restaurent-logos">
                        <div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
                            <img src="web/images/restaurent-1.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
                            <img src="web/images/restaurent-2.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
                            <img src="web/images/restaurent-3.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
                            <img src="web/images/restaurent-4.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="res-img-1 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
                            <img src="web/images/restaurent-5.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="res-img-2 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
                            <img src="web/images/restaurent-6.jpg" class="img-responsive" alt="" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 top-cuisines">
                <div class="top-cuisine-head">
                    <h3>Top Cuisines</h3>
                </div>
                <div class="top-cuisine-grids">
                    <div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine1.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine2.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine3.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine4.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine5.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine6.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine7.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
                        <a href=""><img src="web/images/cuisine8.jpg" class="img-responsive" alt="" /> </a>
                        <label>Cuisine Name</label>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="service-section">
        <div class="service-section-top-row">
            <div class="container">
                <div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
                    <div class="col-md-3 service-section-top-row-grid1">
                        <h3>Enjoy Exclusive Food Order any of these</h3>
                    </div>
                    <div class="col-md-2 service-section-top-row-grid2">
                        <ul>
                            <li><i class="arrow"></i></li>
                            <li class="lists">Party Orders</li>
                        </ul>
                        <ul>
                            <li><i class="arrow"></i></li>
                            <li class="lists">Home Made Food</li>
                        </ul>
                        <ul>
                            <li><i class="arrow"></i></li>
                            <li class="lists"> Diet Food </li>
                        </ul>
                    </div>
                    <div class="col-md-5 service-section-top-row-grid3">
                        <img src="web/images/lunch.png" class="img-responsive" alt="" />
                    </div>
                    <div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
                        <a href="order.html"><input type="submit" value="Order Now"></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="service-section-bottom-row">
            <div class="container">
                <div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
                    <div class="icon">
                        <img src="web/images/icon1.jpg" class="img-responsive" alt="" />
                    </div>
                    <div class="icon-data">
                        <h4>100% Service Guarantee</h4>
                        <p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
                    <div class="icon">
                        <img src="web/images/icon2.jpg" class="img-responsive" alt="" />
                    </div>
                    <div class="icon-data">
                        <h4>Fully Secure Payment</h4>
                        <p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
                    <div class="icon">
                        <img src="web/images/icon3.jpg" class="img-responsive" alt="" />
                    </div>
                    <div class="icon-data">
                        <h4>Track Your Order</h4>
                        <p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="contact-section" id="contact">
        <div class="container">
            <div class="contact-section-grids">
                <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                    <h4>Site Links</h4>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">About Us</a></li>
                    </ul>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">Contact Us</a></li>
                    </ul>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                    <h4>Site Links</h4>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">About Us</a></li>
                    </ul>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">Contact Us</a></li>
                    </ul>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <ul>
                        <li><i class="point"></i></li>
                        <li class="data"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
                    <h4>Follow Us On...</h4>
                    <ul>
                        <li><i class="fb"></i></li>
                        <li class="data"> <a href="#">  Facebook</a></li>
                    </ul>
                    <ul>
                        <li><i class="tw"></i></li>
                        <li class="data"> <a href="#">Twitter</a></li>
                    </ul>
                    <ul>
                        <li><i class="in"></i></li>
                        <li class="data"><a href="#"> Linkedin</a></li>
                    </ul>
                    <ul>
                        <li><i class="gp"></i></li>
                        <li class="data"><a href="#">Google Plus</a></li>
                    </ul>
                </div>
                <div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
                    <h4>Subscribe Newsletter</h4>
                    <p>To get latest updates and food deals every week</p>
                    <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                    <input type="submit" value="submit">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    </div>
    <!-- content-section-ends -->

<!--<h1>Index</h1>-->
<!--<h3>Hello --><?//=$name . ' | ' . $age?><!--</h3>-->
<!-- <table>-->
<!--     <thead>-->
<!---->
<!--     </thead>-->
<!--     <tbody>-->
<!--     --><?php
//     foreach ($products as $product) {
//         '<tr><td>'. $product['name'] .'</td></tr>';
//     }
//     ?>
<!---->
<!--     </tbody>-->
<!-- </table>-->
<!--<body>-->
<!--<nav style="list-style: none">-->
<!--    <li><a href="about">About</a></li>-->
<!--    <li><a href="contact">Contact</a></li>-->
<!--    <li><a href="about/culture">Culture</a></li>-->
<!--</nav>-->
<?php
require_once 'layouts/footer.view.php';