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
    
</body>
</html>