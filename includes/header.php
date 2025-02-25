<!DOCTYPE HTML>
<html lang="en">

<?php

$current_page = basename($_SERVER['PHP_SELF']);
?>

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel Sree Annamalaiyar Park</title>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/new_favicon.png">


</head>
<style>
.content-section.parallax-section.hero-section .overlay {
    opacity: .2;
}


</style>



<body>
    <!-- lodaer  -->
    <div class="loader-wrap">
        <div class="loader-item">
            <div class="cd-loader-layer" data-frame="25">
                <div class="loader-layer"></div>
            </div>
            <span class="loader">
    <img src="images/new_favicon.png" width="auto" height="70" alt="Logo">
</span>

        </div>
    </div>


    <!-- loader end  -->
    <!--  main   -->
    <div id="main">
        <!--  header  -->
        <!-- <header class="main-header" style="background-color: #5c231c;"> -->
        <header class="main-header" >
            <div class="container">
                <!--  header-top -->
                <div class="header-top  fl-wrap">
                    <div class="header-top_contacts"><a href="#"><span>Call:</span> +91 94882 35565</a><a
                            href="#"><span>Find us:</span> 9/1, Madurai Road, Tirunelveli</a></div>
                    <div class="header-social">
                        <!-- <ul>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                            </ul> -->
                    </div>
                    <!-- <div class="booking-reviews">
                            <div class="br-counter">
                                <div class="ribbon"></div>
                                <span>4.9</span>
                            </div>
                            <a href="#" target="_blank" class="br_link">
                                <div class="star-rating" data-starrating="5"> </div>
                                <p>Our ratings on Booking.com</p>
                            </a>
                        </div> -->
                    <div class="lang-wrap">
                        <a href="https://www.google.co.in/maps/place/Hotel+Sree+Annamalaiyar+Park/@8.7386151,77.7123178,15z/data=!4m9!3m8!1s0x3b041190c77f4753:0x7fd120008a77b848!5m2!4m1!1i2!8m2!3d8.738736!4d77.7119865!16s%2Fg%2F11dymfzvbl?entry=ttu&g_ep=EgoyMDI1MDIxOC4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank" class="act-lang">Hotel Location Map</a>
                    </div>


                    <!-- <div class="lang-wrap"><a href="#" class="act-lang">Quick Enquiry</a></div> -->
                    <div class="lang-wrap"><a href="contact.php" class="act-lang">Reservation</a></div>
                </div>
                <!--  header-top end  -->
                <div class="nav-holder-wrap init-fix-header  fl-wrap" >
                    <a href="index.php" class="logo-holder"><img src="images/logo-header.jpg" alt=""></a>
                    <!--  navigation -->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.php"
                                        class="<?= ($current_page == 'index.php') ? 'act-link' : '' ?>">Home</a>
                                </li>
                                <li>
                                    <a href="about.php"
                                        class="<?= ($current_page == 'about.php') ? 'act-link' : '' ?>">About<i
                                            class="fas fa-caret-down"></i></a>


                                    <!--second level -->
                                    <ul>
                                        <li><a href="./amentities.php">SERVICES </a></li>
                                        <li><a href="./local.php">LOCAL ATTRACTIONS AREA</a></li>
                                        <li><a href="./direction.php">DIRECTION FROM</a></li>
                                        <li><a href="./tirunelveli.php">Tirunelveli</a></li>

                                    </ul>


                                </li>
                                <li>

                                    <a href="room-single.php"
                                        class="<?= ($current_page == 'room-single.php') ? 'act-link' : '' ?>">Guest Room</a>

                                </li>
                                <li><a href="restaurant.php"
                                        class="<?= ($current_page == 'restaurant.php') ? 'act-link' : '' ?>">Restaurant</a>
                                </li>
                                <li><a href="contact.php"
                                        class="<?= ($current_page == 'contact.php') ? 'act-link' : '' ?>">Contact</a>
                                </li>
                                <!-- <li><a href="blog.php" class="<?= ($current_page == 'blog.php') ? 'act-link' : '' ?>">News</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                    <div class="serach-header-btn_wrap">
                        <a href="room-single.php" class="serach-header-btn"><i class="fa-light fa-magnifying-glass"></i>
                            <span>Search a Room</span></a>
                    </div>
                    <!-- <div class="show-cart sc_btn   htact"><i class="fa-light fa-basket-shopping-simple"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Wishlist</span></div> -->
                    <div class="show-share-btn showshare htact"><i class="fa-light fa-share-nodes"></i><span
                            class="header-tooltip">Share</span></div>
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!-- share-wrapper -->
                    <div class="share-wrapper isShare">
                        <div class="share-container fl-wrap"></div>
                    </div>
                    <!-- share-wrapper-end -->
                    <!--wish-list-wrap-->
                    <!-- <div class="wish-list-wrap novis_cart">
                        <div class="wish-list-close close_cart-init clwl_btn"><i class="fa-regular fa-xmark"></i></div>
                        <div class="wish-list-title">Your Wishlist </div>
                        <div class="wish-list-container">

                            <div class="wish-list-item fl-wrap">
                                <div class="wish-list-img"><a href="room-single.php"><img
                                            src="images/room/thumbnail/1.jpg" alt=""></a>
                                </div>
                                <div class="wish-list-descr">
                                    <h4><a href="room-single.php">Garden Family Room</a></h4>
                                    <div class="wish-list-price">$129/Night</div>
                                    <a href="room-single.php" class="wshil_link">Book Now</a>
                                    <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                                </div>
                            </div>

                            <div class="wish-list-item fl-wrap">
                                <div class="wish-list-img"><a href="room-single.php"><img
                                            src="images/room/thumbnail/2.jpg" alt=""></a>
                                </div>
                                <div class="wish-list-descr">
                                    <h4><a href="room-single.php">Premium Panorama Room</a></h4>
                                    <div class="wish-list-price"> $230/Night</div>
                                    <a href="room-single.php" class="wshil_link">Book Now</a>
                                    <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                                </div>
                            </div>

                        </div>
                        <div class="wish-list-wrap-btns">
                            <a href="#" class="wl_btn">Clear wishlist</a>
                        </div>
                    </div> -->
                    <!--wish-list-wrap-->
                </div>
            </div>
        </header>