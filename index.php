
<?php include './includes/header.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php
    if (isset($_SESSION['message'])) {
        echo "Swal.fire({
                title: 'Success!',
                text: '" . $_SESSION['message'] . "',
                icon: 'success',
                confirmButtonText: 'OK'
            });";
        unset($_SESSION['message']); // Remove message after showing it
    }
    ?>
</script>

              








            <!--  header end  -->
            <!--  section  -->
            <div class="content-section parallax-section hero-section htc_single_item">
            <div class="fs-wrapper slideshow-container_wrap htc_single_item_dec">
                    <!--ms-container-->
                    <div class="multi-slideshow_fs ms-container fl-wrap full-height">
                        <div class="swiper-container full-height">
                            <div class="swiper-wrapper">
                                <!--ms_item-->
                                <div class="swiper-slide">
                                    <div class="ms-item_fs  full-height fl-wrap">
                                        <div class="bg"  data-bg="images/bg/slider-2.jpg"  ></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide ">
                                    <div class="ms-item_fs full-height fl-wrap">
                                        <div class="bg"  data-bg="images/bg/slider-3.jpg"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide">
                                    <div class="ms-item_fs full-height fl-wrap">
                                        <div class="bg"  data-bg="images/bg/img-1.jpg"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->                                              
                            </div>
                        </div>
                    </div>
                    <!--ms-container end-->
                    <div class="overlay"></div>
                    <div class="dec-corner dc_lb"></div>
                    <div class="dec-corner dc_rb"></div>
                    <div class="dec-corner dc_rt"></div>
                    <div class="dec-corner dc_lt"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="hero-title-container htc_single htc_single2">
                                <div class="section-title text-align_left">
                                    <h4>THE PERFECT PLACE TO STAY</h4>
                                    <h2>Welcome to The  Sree Annamalaiyar Park <br>Premium Hotel</h2>
                                    <a href="#sec2" class="stg_link custom-scroll-link">Start Explore</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <div class="fw-search-wrap_hero fw-search-wrap_hero_box">
                                <div class="fw-search-wrap">
                                    <div class="fw-search-wrap-title">Enquiry Form</div>
                                    <div class="section-separator"><span ><img style="padding-top: 1px;" src="images/icon-accmod.png" alt=""></span></div>

                                    <form class="custom-form" id="enquiryForm">
    <fieldset>
        <div class="row">
            <!-- Name Field -->
            <div class="col-lg-12">
                <div class="input-wrap">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
            </div>

            <!-- Email Field -->
            <!-- <div class="col-lg-12">
                <div class="input-wrap">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
            </div> -->
            <!-- Phone Number Field -->
<div class="col-lg-12">
    <div class="input-wrap">
        <label>Phone Number:</label>
        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required 
               pattern="[0-9]{10}" maxlength="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </div>
</div>


            <!-- Arrival Date -->
            <div class="col-lg-12">
                <div class="date-container input-wrap">
                    <label>Arrival Date:</label>
                    <input type="date" id="arrival_date" name="arrival_date" placeholder="Select arrival date" required>
                </div>
            </div>

            <!-- Departure Date -->
            <div class="col-lg-12">
                <div class="date-container input-wrap">
                    <label>Departure Date:</label>
                    <input type="date" id="departure_date" name="departure_date" placeholder="Select departure date" required>
                </div>
            </div>

            <!-- Room Type Dropdown -->
            <div class="col-lg-12">
                <div class="input-wrap">
                    <label>Room Type:</label>
                    <select name="room_type" id="room_type" class="custom-select" required>
                        <option value="" disabled selected>Select room type</option>
                        <option value="standard" style="color: black;">Standard Room</option>
                        <option value="suite" style="color: black;">Suite Room</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-lg-12">
                <button type="submit" class="searchform-submit">Enquiry</button>
            </div>
        </div>
    </fieldset>
</form>

<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $("#enquiryForm").submit(function(e) {
        e.preventDefault(); // Prevent form from reloading

        $.ajax({
            type: "POST",
            url: "contact_mail.php", // Backend script
            data: $(this).serialize(), // Serialize form data
            success: function(response) {
                Swal.fire({
                    title: "Success!",
                    text: "Enquiry submitted successfully!",
                    icon: "success",
                    confirmButtonText: "OK"
                });

                $("#enquiryForm")[0].reset(); // Reset the form after submission
            },
            error: function() {
                Swal.fire({
                    title: "Error!",
                    text: "Something went wrong, please try again!",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
});
</script>


<!-- jQuery for Datepicker -->
<script>
    $(document).ready(function() {
        $("#arrival_date, #departure_date").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            minDate: 0
        });

        // Apply same design to the dropdown
        $("#room_type").css({
            "width": "100%",
            "padding": "10px",
            "border": "1px solid #ccc",
            "border-radius": "5px",
            "background-color": "#fff",
            "font-size": "16px",
            "cursor": "pointer"
        });
    });
</script>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-section-scroll">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <div class="tcs-pagination_wrap">
                    <div class="svg-corner svg-corner_white"  style="bottom:0;right:-38px; transform: rotate(90deg)"></div>
                    <div class="svg-corner svg-corner_white"  style="bottom:0;left:-38px; transform: rotate(0deg)"></div>
                    <div class="tcs-pagination hero-slider-pag"></div>
                </div>
                <!-- <div class="hero-call-wrap">
                    <i class="fa-thin fa-phone-rotary"></i>
                    <a href="#">+489756412322</a>
                </div> -->
                <div class="slide-progress_container">
                    <div class="slide-progress-wrap">
                        <div class="slide-progress"></div>
                    </div>
                </div>
            </div>
            <!-- section end  -->






            <!--content-->
            <div class="content">
                <!-- breadcrumbs-wrap  -->
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <a href="#">Home</a><span>Home Page</span> <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section" id="sec2">
                    <div class="section-dec"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title text-align_left" style="margin-top: 50px;">
                                    <h4>Enjoy your time in our Hotel</h4>
                                    <h2>Welcome Our Hotel</h2>
                                </div>
                                <div class="text-block tb-sin">
                                    <p class="has-drop-cap">We feel proud to introduce our “HOTEL SREE ANNAMALAIYAR PARK”, brand new luxurious star property in Tirunelveli City. Our hotel is designed in a blend of luxury, service and security. And with it comes our sensitive knowledge of your needs. From pilgrims to religious groups, corporate organizations to tourists, our amenities and services match the sophisticated expectations of the modern traveller. Our guests are assured of affordable luxury of international standards, along with our professional services with that unique Indian touch of empathy and understanding. 

                                    </p>
                                    <p>Our luxurious rooms are equipped with all the state-of-the-art facilities expected by the modern traveller. There is a stylish multi-cuisine restaurant with a menu that caters to every taste. Also we have banquet and conference facilities. </p>
                                    <a href="about.php" class="btn fl-btn ">Read more About Us</a>
                                    <div class="dc_dec-item_left"><span></span></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-image-collge-wrap">
                                    <div class="single-dec_img">
                                        <img src="images/all/img-1.jpg" alt="" class="respimg">
                                    </div>
                                    <div class="hero_images-collage-item" style="width: 25%; bottom:  25px; z-index: 15; left: -70px;"><img src="images/all/ground7.jpg" class="respimg" alt=""></div>
                                    <div class="hero_images-collage-item" style="width: 45%; top: -5%; z-index: 11; right: -120px;"><img src="images/all/img-12.jpg" class="respimg" alt=""></div>
                                    <div class="dc_dec-item_right"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
                    </div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="content-dec"><span></span></div>
                </div>
                <!-- section end  -->				
                <!-- section   -->
                 <!-- room view section -->
                <!-- <div class="content-section dark-bg no-padding hidden-content">
                    <div class="row">
                        <div class="st-gallery">
                            <div class="section-title">
                                <h4>Special selection</h4>
                                <h2>Popular Rooms And Suites</h2>
                                <div class="section-separator sect_se_transparent"><span><img src="images/icon-accmod.png" alt=""></span></div>
                                <a href="rooms.php" class="stg_link">View All Rooms</a>	
                            </div>
                            <div class="map-dec2"></div>
                            <div class="footer-separator fs_sin"><span></span></div>
                        </div>
                        <div class="col-lg-3">  </div>
                        <div class="col-lg-9">
                            <div class="rooms-carousel-wrap">
                                <div class="rooms-carousel full-height">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                       
                                            <div class="swiper-slide">
                                                <div class="rooms-carousel-item full-height">
                                                    <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                                        <div class="bg" data-bg="images/room/1.jpg" data-swiper-parallax="10%"></div>
                                                    </div>
                                                    <div class="rooms-carousel-item_container">
                                                        <h3><a href="room-single.php">Garden Family Room</a>  </h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.  </p>
                                                        <div class="room-card-details">
                                                            <ul>
                                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                            </ul>
                                                            <div class="grid-item_price">
                                                                <span>$129/Night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                            </div>
                                          
                                            <div class="swiper-slide">
                                                <div class="rooms-carousel-item full-height">
                                                    <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                                        <div class="bg" data-bg="images/room/2.jpg" data-swiper-parallax="10%"></div>
                                                    </div>
                                                    <div class="rooms-carousel-item_container">
                                                        <h3><a href="room-single.php">Premium Panorama Room</a>  </h3>
                                                        <p>Quisque varius eros ac purus dignissim. Proin eu ultrices libero. Curabitur vulputate vestibulum elementum. Suspendisse id neque a nibh mollis blandit.   </p>
                                                        <div class="room-card-details">
                                                            <ul>
                                                                <li><i class="fa-light fa-user"></i><span>4 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>2 Bath</span></li>
                                                            </ul>
                                                            <div class="grid-item_price">
                                                                <span>$230/Night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                            </div>
                                         
                                            <div class="swiper-slide">
                                                <div class="rooms-carousel-item full-height" >
                                                    <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                                        <div class="bg" data-bg="images/room/3.jpg" data-swiper-parallax="10%"></div>
                                                    </div>
                                                    <div class="rooms-carousel-item_container">
                                                        <h3><a href="room-single.php">Presidential Suite</a>  </h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.  </p>
                                                        <div class="room-card-details">
                                                            <ul>
                                                                <li><i class="fa-light fa-user"></i><span>2 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                            </ul>
                                                            <div class="grid-item_price">
                                                                <span>$543/Night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                            </div>
                                         
                                            <div class="swiper-slide">
                                                <div class="rooms-carousel-item full-height">
                                                    <div class="bg-wrap bg-parallax-wrap-gradien fs-wrapper">
                                                        <div class="bg" data-bg="images/room/4.jpg" data-swiper-parallax="10%"></div>
                                                    </div>
                                                    <div class="rooms-carousel-item_container">
                                                        <h3><a href="room-single.php">Beach Villa Room</a>  </h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare sem sed quam tempus aliquet vitae eget dolor.  </p>
                                                        <div class="room-card-details">
                                                            <ul>
                                                                <li><i class="fa-light fa-user"></i><span>3 Guest</span></li>
                                                                <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                                <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                                            </ul>
                                                            <div class="grid-item_price">
                                                                <span>$321/Night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="like-btn"><i class="fa-light fa-heart"></i> <span>Add to Wislist</span></div>
                                                </div>
                                            </div>
                                           									
                                        </div>
                                    </div>
                                </div>
                                <div class="rc-controls-wrap">
                                    <div class="rc-button rc-button-prev"><i class="fa-solid fa-caret-left"></i></div>
                                    <div class="rc-button rc-button-next"><i class="fa-solid fa-caret-right"></i></div>
                                </div>
                                <div class="sc-controls fwc_pag2">
                                    <div class="ss-slider-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- section   -->	
                <!-- section   -->
              
                <!-- section end  -->	
                <!-- section   -->
                <div class="content-section dark-bg hidden-section  wide-section" data-scrollax-parent="true">
                    <div class="bg"  data-bg="images/bg/25.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                    <div class="overlay overlay-bold"></div>
                    <div class="dec-corner dc_rt"></div>
                    <div class="dec-corner dc_lt"></div>
                    <div class="container">
                        <div class="wide_section-title">
                            <div class="row">
                            <div class="section-title">
                            <h4>THE PERFECT PLACE TO STAY</h4>
                            <h2>SERVICES & AMENITIES</h2>
                            <div class="section-separator"><span><img src="images/icon-accmod.png" style="padding-top: 1px;" alt=""></span></div>
                        </div>
                            </div>
                        </div>
                        <!--boxed-container-->				
                        <div class="boxed-container">
                            <div class="boxed-container-title">
                                <div class="dec-container">
                                    <div class="boxed-container-title_item">
                                        <h4>More about us</h4>
                                        <h2> Premium Hotel In  Tirunelveli, Tamil Nadu </h2>
                                        <p class="has-drop-cap">Our hotel offers a range of well-equipped rooms designed for every type of traveler. Whether you're looking for high-speed internet access to stay connected, personalized concierge services for a seamless experience, or a luxurious couples' room for a romantic getaway, we have it all. Families can enjoy spacious and comfortable rooms, while business travelers can unwind in our executive suites with top-notch amenities </p>
                                        <div class="tbc-separator"></div>
                                        <!-- <div class="signature-opt">
                                            <div class="signature_title">
                                                <img src="images/avatar/7.jpg" alt="">
                                                <div class="signature_title_item">
                                                    <h5>Kevin Cooper</h5>
                                                    <h6>Hotel Manager</h6>
                                                </div>
                                            </div>
                                            <div class="signature_item"><img src="images/signature.png" class="respimg" alt=""></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="boxed-container-wrap">
                                <div class="bg" data-bg="images/bg/6.jpg"></div>
                                <div class="overlay"></div>
                                <div class="promo-video">
                                    <!-- <div class="video-box-btn image-popup color-bg"  id="html5-videos" data-html="#video1"><i class="fas fa-play"></i></div> -->
                                    <div class="bg" data-bg="images/bg/img-3.jpg"></div>
                                    <h4>IT'S PREMIUM</h4>
                                </div>
                            </div>
                            <div style="display:none;" id="video1" class="popup_video" data-videolink="video/1.mp4">
                                <video class="lg-video-object lg-html5" controls preload="none">
                                    <source src="" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <!--boxed-container end-->	
                        <div class="section-separator"><span><span><img src="images/icon-accmod.png" style="padding-top: 1px;" alt=""></span></span></div>
                        <!--aminites-cards-wrap-->
                        <div class="aminites-cards-wrap">
    <div class="row">
        <!--aminites-card-item-->
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-briefcase"></i>
                <h4>Business Centre</h4>
                <p>Fully equipped business center with high-speed internet and office services.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">01.</span>
            </div>
        </div>
        <!--aminites-card-item end-->
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-box"></i>
                <h4>Courier Service</h4>
                <p>Reliable courier services for your documents and parcels.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">02.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-broom"></i>
                <h4>Housekeeping & Laundry</h4>
                <p>Daily housekeeping and professional laundry services.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">03.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-bed"></i>
                <h4>Turn Down Service</h4>
                <p>Relax with our nightly turn-down service for ultimate comfort.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">04.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-snowflake"></i>
                <h4>Ice Machine</h4>
                <p>24/7 access to ice machines for your convenience.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">05.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-print"></i>
                <h4>Printer & Scanner</h4>
                <p>Print, scan, and copy documents at our business center.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">06.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-wifi"></i>
                <h4>Speed Internet Access</h4>
                <p>Stay connected with high-speed internet throughout the hotel.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">07.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-concierge-bell"></i>
                <h4>Concierge Services</h4>
                <p>Our concierge is here to assist with your travel and stay needs.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">08.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-heart"></i>
                <h4>Couples Room</h4>
                <p>Luxurious rooms designed for romantic getaways.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">09.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-users"></i>
                <h4>Family Room</h4>
                <p>Spacious rooms perfect for family stays.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">10.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-building"></i>
                <h4>Executive Suites</h4>
                <p>Premium suites with top-notch amenities.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">11.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-hotel"></i>
                <h4>47 Best Rooms 3 Star</h4>
                <p>Enjoy your stay in our comfortable 3-star rated rooms.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">12.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-utensils"></i>
                <h4>Multi Cuisine Restaurant</h4>
                <p>Experience flavors from around the world in our fine dining restaurant.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">13.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-landmark"></i>
                <h4>3 Banquet Halls</h4>
                <p>Host grand events in our spacious banquet halls.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">14.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-child"></i>
                <h4>Kids Play Area</h4>
                <p>A fun and safe play area for children.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">15.</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="aminites-card-item">
                <i class="fa-light fa-car"></i>
                <h4>Spacious Parking</h4>
                <p>Ample parking space for guests and visitors.</p>
                <div class="tbc-separator"></div>
                <span class="aci_num">16.</span>
            </div>
        </div>
    </div>
</div>
<a href="#"   class="dwonload_btn">LOad More</a>


                        <!--aminites-cards-wrap end-->
                        <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
                        <div class="sc-dec2" style="right:  220px; top: 50%;"></div>
                    </div>
                </div>
                <!-- section end  -->					
                <!-- section   -->

                <!-- section end  -->		

                <div class="content-section" id="secmenu">
  <div class="content-dec2 fs-wrapper"></div>
  <div class="container">
  <div class="section-title">
                            <h4>THE PERFECT PLACE TO STAY</h4>
                            <h2>Our Gallery</h2>
                            <div class="section-separator "><span><img src="images/icon-accmod.png" style="padding-top: 1px;" alt=""></span></div>
                        </div>
    <div class="tabs-act">
      <div class="hero-menu_header">
        <ul class="tabs-menu">
          <!-- Add an All tab along with your other tabs -->
          <li class="current"><a href="#tab-all">ALL</a></li>
          <li><a href="#tab-1">HOTEL & GROUND</a></li>
          <li><a href="#tab-2">DINING</a></li>
          <li><a href="#tab-3">CANDLE LIGHT DINNER</a></li>
          <li><a href="#tab-4"> AAR HALL</a></li>
          <li><a href="#tab-5"> BOARD ROOM</a></li>
        </ul>
      </div>
      <!--hero-menu-wrap-->
      <div class="hero-menu-wrap dec-container anim_tabs">
        <div class="dc_dec-item_left"><span></span></div>
        <div class="dc_dec-item_right"><span></span></div>
        <div class="tabs-container">
          <!-- All Tab Content: shows all team-boxes -->
          <div class="tab-content" id="tab-all">
            <div class="row">
              <!-- Main Dishes Content (from tab-1) -->
              <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/dining/dining1.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/dining/dining2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/board/board_room5.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/board/board_room1.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner4.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner5.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
         
              
            
            </div>
          </div>



          <!-- Tab 1 Content: Main Dishes -->
          <style>
  /* Lightbox Styles */
  .lightbox {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
  }
  .lightbox img {
      max-width: 70%;
      max-height: 70%;
  }
</style>

<!-- Image Gallery -->
<div class="tab-content" id="tab-1" style="display: none;">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground1.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground4.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground5.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground6.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground7.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground8.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hotel/ground9.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox -->
<div id="lightbox" class="lightbox" onclick="closeLightbox()">
    <img id="lightbox-img">
</div>

<!-- JavaScript -->
<script>
    function openLightbox(element) {
        document.getElementById("lightbox-img").src = element.src;
        document.getElementById("lightbox").style.display = "flex";
    }

    function closeLightbox() {
        document.getElementById("lightbox").style.display = "none";
    }
</script>




          <!-- Tab 2 Content: dining -->
          <div class="tab-content" id="tab-2" style="display: none;">
          <div class="row">
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/dining/dining1.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/dining/dining2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/dining/dining3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/dining/dining4.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/dining/dining5.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
        </div>
     
    </div>
          </div>

          <!-- Tab 3 Content: candle -->
          <div class="tab-content" id="tab-3" style="display: none;">
          <div class="row">
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner1.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner4.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner5.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner6.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner7.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
          <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/candle/candle_light_dinner8.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            </div>
          </div>
          
          <!-- Tab 4 Content: hall -->
          <div class="tab-content" id="tab-4" style="display: none;">
            <div class="row">
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall1.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall4.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall5.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/hall/aar_hall6.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            </div>
          </div>
          <!-- Tab 5 Content: board -->
          <div class="tab-content" id="tab-5" style="display: none;">
            <div class="row">
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/board/board_room5.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/board/board_room1.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/board/board_room2.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/board/board_room3.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            <div class="col-lg-2 col-md-4 col-6">
          <div class="team-box">
                <div class="team-photo">
                    <img src="images/gallery/board/board_room4.jpg" alt="Main Dishes" class="respimg img-click" onclick="openLightbox(this)">
                </div>
            </div>
              </div>
            
          
            </div>
          </div>

        </div>
      </div>
      <!--hero-menu-wrap end-->
    </div>
 
  </div>
</div>

<!-- JavaScript for Tab Switching -->
<script>
 document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".tabs-menu li a");
    const tabContents = document.querySelectorAll(".tab-content");

    // Show only "ALL" tab content by default
    tabContents.forEach(tc => {
        if (tc.id === "tab-all") {
            tc.style.display = "block";
        } else {
            tc.style.display = "none";
        }
    });

    tabs.forEach(tab => {
        tab.addEventListener("click", function(event) {
            event.preventDefault();
            let target = document.querySelector(this.getAttribute("href"));

            // Remove 'current' class from all tabs
            tabs.forEach(t => t.parentElement.classList.remove("current"));
            // Hide all tab contents
            tabContents.forEach(tc => tc.style.display = "none");

            // Activate clicked tab
            this.parentElement.classList.add("current");

            // Show the selected tab content
            target.style.display = "block";
        });
    });
});

</script>


<!-- JavaScript for Tab Switching -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".tabs-menu li a");
    const tabContents = document.querySelectorAll(".tab-content");

    tabs.forEach(tab => {
      tab.addEventListener("click", function(event) {
        event.preventDefault();
        let target = document.querySelector(this.getAttribute("href"));

        // Remove 'current' class from all tabs
        tabs.forEach(t => t.parentElement.classList.remove("current"));
        // Hide all tab contents
        tabContents.forEach(tc => tc.style.display = "none");

        // Activate clicked tab
        this.parentElement.classList.add("current");
        target.style.display = "block";
      });
    });
  });
</script>



             

  <div class="content-section" style="padding-top:0px;padding-bottom:100px;">
                    <div class="container">
                        <div class="section-title">
                            <h4>THE PERFECT PLACE TO STAY</h4>
                            <h2>POPULAR AREAS</h2>
                            <div class="section-separator "><span><img src="images/icon-accmod.png" style="padding-top: 1px;"  alt=""></span></div>
                        </div>
                        <div class="cards-wrap">
                            <div class="row">
                                <!--card item --> 
                                <div class="col-lg-4">
                                    <div class="content-inner fl-wrap">
                                        <div class="content-front">
                                            <div class="cf-inner">
                                                <div class="fs-wrapper">
                                                    <div class="bg "  data-bg="images/popular/p1.jpg"></div>
                                                    <div class="overlay overlay-bold"></div>
                                                </div>
                                                <div class="inner">
                                                    <h2>District Science Centre</h2>
                                                    
                                                    <div class="section-separator"><span><img src="images/icon-accmod.png" alt="" style="padding-top: 1px;"></span></div>
                                                </div>
                                                <div class="serv-num">01.</div>
                                            </div>
                                        </div>
                                        <div class="content-back">
                                            <div class="cf-inner">
                                                <div class="inner">
                                                    <div class="dec-icon">
                                                        <i class="fa-light fa-spa"></i>
                                                    </div>
                                                    <p>The District Science Centre was opened to the public on 27th February 1987 with a gallery on "Treasures from Ocean" and a Science Park. Soon the Centre became one of the most popular centres in </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card item end -->
                                <!--card item --> 
                                <div class="col-lg-4">
                                    <div class="content-inner fl-wrap">
                                        <div class="content-front">
                                            <div class="cf-inner">
                                                <div class="fs-wrapper">
                                                    <div class="bg "  data-bg="images/popular/3.jpg"></div>
                                                    <div class="overlay overlay-bold"></div>
                                                </div>
                                                <div class="inner">
                                                    <h2>Courtalam Falls
                                                    </h2>
                                                    <!-- <h4>Quality is the heart</h4> -->
                                                    <div class="section-separator"><span><img src="images/icon-accmod.png" alt="" style="padding-top: 1px;"></span></div>
                                                </div>
                                                <div class="serv-num">02.</div>
                                            </div>
                                        </div>
                                        <div class="content-back">
                                            <div class="cf-inner">
                                                <div class="inner">
                                                    <div class="dec-icon">
                                                        <i class="fa-thin fa-water-ladder"></i>
                                                    </div>
                                                    <p>The 60 ft Peraruvi (Main Falls) the prominent falls has a deep crater at Pongumakadal that controls the rush of water...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card item end -->
                                <!--card item --> 
                                <div class="col-lg-4">
                                    <div class="content-inner fl-wrap">
                                        <div class="content-front">
                                            <div class="cf-inner">
                                                <div class="fs-wrapper">
                                                    <div class="bg "  data-bg="images/popular/p3.jpg"></div>
                                                    <div class="overlay overlay-bold"></div>
                                                </div>
                                                <div class="inner">
                                                    <h2>Agasthiyar Falls</h2>
                                                  
                                                    <div class="section-separator"><span><img src="images/icon-accmod.png" style="padding-top: 1px;"alt=""></span></div>
                                                </div>
                                                <div class="serv-num">03.</div>
                                            </div>
                                        </div>
                                        <div class="content-back">
                                            <div class="cf-inner">
                                                <div class="inner">
                                                    <div class="dec-icon">
                                                        <i class="fa-thin fa-water-ladder"></i>
                                                    </div>
                                                    <p>Agasthiar falls are located in the Tirunelveli district of the south Indian state of Tamil Nadu. They can be placed at a distance of 60 kilometers from the district headquarters.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card item end -->                                                 
                            </div>
                            <div class="dc_dec-item_left"><span></span></div>
                            <div class="dc_dec-item_right"><span></span></div>
                        </div>
                        <!-- <a href="contact.php"   class="dwonload_btn">Get In touch With Us</a> -->
                        <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
                        <div class="sc-dec2" style="right: -220px; top: -100px;"></div>
                    </div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="content-dec"><span></span></div>
                </div>

            <?php include './includes/footer.php'; ?>