<?php include './includes/header.php'; ?>
            <div class="header-overlay close_cart-init"></div>
            <!--  header end  -->
            <!--  section  -->
            <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
                <div class="bg par-elem " data-bg="images/bg/7.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Our Contact</h2>
                        <div class="section-separator"><span><img src="images/icon-accmod.png" style="padding-top: 1px;" alt=""></span></div>
                    </div>
                </div>
                <div class="hero-section-scroll">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <div class="dec-corner dc_lb"></div>
                <div class="dec-corner dc_rb"></div>
                <div class="dec-corner dc_rt"></div>
                <div class="dec-corner dc_lt"></div>
            </div>
            <!-- section end  -->
            <!--content-->
            <div class="content">
                <!-- breadcrumbs-wrap  -->
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <a href="#">Home</a><a href="#">Pages</a><span>Contact</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container">
                        <!-- contacts-cards-wrap  -->	
                        <div class="contacts-cards-wrap">
    <div class="dec-container">
        <div class="text-block">
            <div class="row">
                <!-- contacts-card-item -->	
                <div class="col-lg-4">
                    <div class="contacts-card-item">
                        <i class="fa-light fa-location-dot"></i>
                        <span>Our Location</span>
                        <p>Located in the heart of Tirunelveli, we offer a comfortable stay with modern amenities.</p>
                        <a href="#">9/1, Madurai Road, Tirunelveli – 627 001</a>
                    </div>
                </div>
                <!-- contacts-card-item end-->	
                <!-- contacts-card-item -->	
                <div class="col-lg-4">
                    <div class="contacts-card-item">
                        <i class="fa-light fa-phone-rotary"></i>
                        <span>Our Phone</span>
                        <p>For reservations and inquiries, feel free to contact us anytime.</p>
                        <a href="tel:04622323555">0462 – 2323555</a>
                        <a href="tel:04622323556">0462 – 2323556</a>
                        <a href="tel:04622323557">0462 – 2323557</a>
                        <a href="tel:+919489115557">+91 94891 15557</a>
                        <a href="tel:+919487235565">+91 94872 35565</a>
                        <a href="tel:+919488235565">+91 94882 35565</a>
                    </div>
                </div>
                <!-- contacts-card-item end-->
                <!-- contacts-card-item -->	
                <div class="col-lg-4">
                    <div class="contacts-card-item">
                        <i class="fa-light fa-mailbox"></i>
                        <span>Our Mail</span>
                        <p>Reach out to us via email for bookings, queries, and support.</p>
                        <a href="mailto:info@saphotel.in">info@saphotel.in</a>
                        <a href="https://www.sreeannamalaiyarpark.com" target="_blank">www.sreeannamalaiyarpark.com</a>
                    </div>
                </div>
                <!-- contacts-card-item end-->
            </div>
        </div>
    </div>
</div>

                        <!-- contacts-cards-wrap end   -->
                        <div class="row">
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="col-lg-6">
    <div class="dec-container">
        <div class="text-block">
            <div class="text-block">
                <div class="tbc_subtitle">Get In Touch</div>
                <div class="tbc-separator"></div>
                <div class="contactform-wrap">
                    <form class="comment-form" id="contactform">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:" required></textarea>
                            <button class="commentssubmit" id="submit_cnt" type="submit">Send Message</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                            <div class="col-lg-6">
    <div class="map-container mapC_vis">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.239843261627!2d77.7123178!3d8.7386151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b041190c77f4753%3A0x7fd120008a77b848!2sHotel%20Sree%20Annamalaiyar%20Park!5e0!3m2!1sen!2sin!4v1708600000000!5m2!1sen!2sin" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

                        </div>
                        <div class="dc_dec-item_left"><span></span></div>
                        <div class="dc_dec-item_right"><span></span></div>
                    </div>
                </div>
                <!-- section end  -->
                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->
            <script>
document.getElementById("contactform").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent page reload

    let formData = new FormData(this);

    fetch("support_mail.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // Expect JSON response
    .then(data => {
        if (data.success) {
            Swal.fire("Success!", data.message, "success");
            document.getElementById("contactform").reset(); // Reset form on success
        } else {
            Swal.fire("Error!", data.message, "error");
        }
    })
    .catch(error => {
        Swal.fire("Error!", "Something went wrong. Try again later.", "error");
        console.error("Error:", error);
    });
});
</script>


            <?php include './includes/footer.php'; ?>





