<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-box arclanNavbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo with white.png" alt=""></a>
            <div></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasmobile"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img class="hamburger-img" src="assets/img/hamburger.png" alt="">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- off canvas start -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasmobile" aria-labelledby="offcanvasmobileLabel">
        <div class="offcanvas-header">
            <img class="img-fluid" src="assets/images/logo/logo.png" alt="">
            <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa-solid fa-xmar">X</i></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link home-pg-nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about-pg-nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link service-pg-nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link project-pg-nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact-pg-nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- off canvas end -->
    <!-- navbar end -->

    <!-- banner section start -->
    <div class="banner-section">
        <div class="container">
            <div class="breadcrumb-section">
                <h3>About Us</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- banner section end -->

    <!-- about section start -->
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="abt-left">
                        <h4>Architecture | Interiors | Landscape</h4>

                        <hr class="about-head-underline">
                        <p class="abt-head-para">At Arclan, we are driven by a deep passion for design that transcends time.</p>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="options">
                        <div class="option active" style="Background:url(assets/arclan1.png);">
                        </div>
                        <div class="option" style="Background:url(assets/arclan2.png);">
                        </div>
                        <div class="option" style="Background:url(assets/arclan3.png);">
                        </div>
                        <div class="option" style="Background:url(assets/arclan4.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-md-5 mt-3">
                    <p class="about-us-description">
                        We are a team headed by four principle architects with a passion for creating stunning,
                        functional spaces that exceed our clients' expectations. With two plus years of experience in
                        the industry, we have established ourselves as a leading architectural firm, specializing in
                        both residential and commercial projects.
                        At the heart of our approach is the belief that every project is unique and deserves a tailored
                        design solution. We work closely with our clients to understand their vision, goals, and budget,
                        and then develop a customized design plan that brings their ideas to life.
                        Our team is committed to delivering exceptional results, no matter the scale or complexity of
                        the project. From initial concept to final execution, we are dedicated to providing our clients
                        with a seamless, stress-free experience. We understand the importance of communication and
                        collaboration, and we work closely with our clients every step of the way to ensure their
                        satisfaction.
                    </p>
                    <p class="about-us-description">
                        Our portfolio is a testament to our expertise and versatility. Whether it's a modern, minimalist
                        home or a sprawling commercial complex, we have the skills and experience to tackle any project.
                        We take pride in our ability to design spaces that are not only beautiful but also functional
                        and sustainable.
                        We believe that architecture has the power to transform lives, and we are honored to be a part
                        of this transformative process. Our team is passionate about what we do, and we are committed to
                        pushing the boundaries of design to create spaces that inspire and delight.
                    </p>
                    <p class="about-us-description">
                        Thank you for considering our firm for your architectural needs. We look forward to the
                        opportunity to work with you and bring your vision to life.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->

    <!-- about service section start -->

    <!-- about service section end -->



    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- image reveal -->
    <script src="assets/js/image-reveal.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>