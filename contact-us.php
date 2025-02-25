<?php
$themeLight = "themeLight";
include "include/header.php";
?>

<section class="pagetitle">
    <img src="images/banner.png" alt="image" class="img-fluid">
    <div class="pagetitle-content">
        <div class="container">
            <h2 class="heading text-white">Contact Us</h2>
        </div>
    </div>
</section>


<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="heading">Get in Touch</h2>
                <form class="contact-form" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder=" Enter Subject">
                        </div>
                        <div class="col-lg-6">
                            <input type="tel" class="form-control" placeholder="Enter Phone">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="7" placeholder="Enter Message"></textarea>
                            <button type="submit" class="themeBtn">Get Help Now</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="subHeading">Need any help?</h2>
                <p>
                    We are available 24/7 to help you with all type of roofing crisis, providing high-quality, durable and long lasting services to everyone.
                </p>
                <a href="tel:+11234567890" class="contact-content">
                    <div class="contact-contentIcon"><i class="fal fa-phone-plus"></i></div>
                    <h5>Have any question?<span>Free +1 (123) 456 7890</span></h5>
                </a>
                <a href="mailto:info@gmail.com" class="contact-content">
                    <div class="contact-contentIcon"><i class="fas fa-envelope"></i></div>
                    <h5>Email<span>info@gmail.com</span></h5>
                </a>
                <a href="" class="contact-content">
                    <div class="contact-contentIcon"><i class="fal fa-paper-plane"></i></div>
                    <h5>Visit anytime<span> Lorem ipsum dolor sit amet</span></h5>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include "include/footer.php" ?>