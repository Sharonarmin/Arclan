<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


    <!-- header -->
    <?php include 'includes/header.php'; ?>
    <!-- header end-->

    <!-- banner section start -->
    <div class="banner-section">
        <div class="container">
            <div class="breadcrumb-section">
                <h3>Contact Us</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- banner section end -->

    <!-- contact form section start -->
    <div class="contact--form-section">
        <div class="container">
        <h2>SEND US <br>
            A MESSAGE</h2>
        <div class="row">
            <div class="col-md-6 col-12">
            <div class="hp-contact-left">
                <p>Have a question or interested in our services? We're here to help! Get in touch using the information
                below or fill out the contact form. We can't wait to connect with you</p>
                <div class="hp-contact-address">
                <a href="tel:+918281033566"><i class="fa-solid fa-phone me-1"></i>  <span>+91 8281033566</span></a>
                <a href="#"><i class="fa-solid fa-envelope me-1"></i>  <span>info@arclan.com</span></a>
                <a disabled><i class="fa-solid fa-location-dot me-1"></i>  <span>Karanthur kozhikode</span></a>
                </div>
                <div class="hp-sm-icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-12">
            <div class="hp-contact-right">
                <form action="">
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="Your Email">
                <input type="text" placeholder="Your Subject">
                <textarea placeholder="Your Messge"></textarea>
                <button class="hp-contact-button">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>

    </div>
    <!-- contact form section end -->


    <!-- contact page map start -->
        <div class="contact-map">
            <div class="container" data-aos="fade-up">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125218.35709451426!2d75.72841289995846!3d11.25599177352114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65938563d4747%3A0x32150641ca32ecab!2sKozhikode%2C%20Kerala!5e0!3m2!1sen!2sin!4v1687590977168!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    <!-- contact page map end -->


    <!-- footer section start -->
    <div class="footer-copyright-section">
        <div class="container">
            <div class="copyrigts-para">        <p>Copyright © 2023 Arclan. All Rights Reserved | Designed by <a href="https://www.mentegoz.com/"
            target="_blank">Mentegoz Technologies</a></p></div>
            <div class="ftr-links">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="project.php">Projects</a>
                <a href="career.php">Careers</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- footer section end -->

    <script>
        document.querySelectorAll(".contact-nav-link").forEach((item) => item.classList.add('active'));
    </script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>  
    <script src="assets/js/aos.js"></script>  
    <!-- smooth scroll js -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
    
</body>
</html>