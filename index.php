<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
      <a class="navbar-brand" href="#"><img src="assets/img/logo with white.png" alt=""></a>
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
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project.php">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonial.php">Testimonials</a>
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
          <a class="nav-link project-pg-nav-link" href="projects.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link service-pg-nav-link" href="testimonial.php">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contact-pg-nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- off canvas end -->

  <!-- navbar end -->

  <!-- main section start -->

  

  <!-- hero section start -->
  <section class="panel hero-section">
    <div></div>
    <div>
      <h2 class="hero-head">Crafted for Perfection</h2>
    </div>
    <div>
      <a href="#project-section1">
        <div class="mouse" style="width: 2em; height: 2em; background-color: transparent; z-index: 80; 
                bottom: 25px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; border-color: #bbb8b8; animation: scrolldown 1.2s ease-in-out infinite 0.15s;">
        </div>
        <div class="mouse" style="width: 2em; height: 2em; background-color: transparent; z-index: 80; 
                bottom: 40px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; border-color: #bbb8b8; animation: scrolldown 1.2s ease-in-out infinite;">
        </div>
      </a>
      <div class="hero-contact-btn1">
        <div class="hero-contact-btn">
          <a href="#">
            <span class="label-up">Contact Now<span class="ms-md-2 ms-2"><img src="assets/img/targerArr.svg" alt=""></span></span>
            <span class="label-up">Contact Now<span class="ms-md-2 ms-2"><img src="assets/img/targerArr.svg" alt=""></span></span>
          </a>
        </div>
      </div>
      <div class="hero-social-btn">
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
            
  </section>
  <!-- hero section end -->

  <!-- projects section start -->

  <section class="panel hp-project-section" id="project-section1">
    <div class="container">
      <div class="box-padding">
        <div class="latest-projects">
          <img src="assets/img/proejcts/gaya sanctury/gaya-sanctury---1.jpg" alt="">
          <div class="project-details-bottom">
            <p class="client-name"><i class="fa-solid fa-user me-2"></i>Gaya Sanctury</p>
            <p class="place"><i class="fa-solid fa-location-dot me-2"></i>Kozhikode</p>
            <p class="type-work"><i class="fa-solid fa-building me-2"></i>Office</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="panel hp-project-section">
    <div class="container">
      <div class="box-padding">
        <div class="latest-projects">
          <img src="assets/img/proejcts/vtrust/vtrust---1.jpg" alt="">
          <div class="project-details-bottom">
            <p class="client-name"><i class="fa-solid fa-user me-2"></i>Gaya Sanctury</p>
            <p class="place"><i class="fa-solid fa-location-dot me-2"></i>Kozhikode</p>
            <p class="type-work"><i class="fa-solid fa-building me-2"></i>Office</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="panel hp-project-section">
    <div class="container">
      <div class="box-padding">
        <div class="latest-projects">
          <img src="assets/img/proejcts/mosque/mosque--1.jpg" alt="">
          <div class="project-details-bottom">
            <p class="client-name"><i class="fa-solid fa-user me-2"></i>Gaya Sanctury</p>
            <p class="place"><i class="fa-solid fa-location-dot me-2"></i>Kozhikode</p>
            <p class="type-work"><i class="fa-solid fa-building me-2"></i>Office</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="panel hp-project-section">
    <div class="container">
      <div class="box-padding">
        <div class="latest-projects">
          <img src="assets/img/proejcts/projects-1/projects---1.jpg" alt="">
          <div class="project-details-bottom">
            <p class="client-name"><i class="fa-solid fa-user me-2"></i>Gaya Sanctury</p>
            <p class="place"><i class="fa-solid fa-location-dot me-2"></i>Kozhikode</p>
            <p class="type-work"><i class="fa-solid fa-building me-2"></i>Office</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="panel hp-project-section">
    <div class="container">
      <div class="box-padding">
        <div class="latest-projects">
          <img src="assets/img/proejcts/projects-1/projects---2.jpg" alt="">
          <div class="project-details-bottom">
            <p class="client-name"><i class="fa-solid fa-user me-2"></i>Gaya Sanctury</p>
            <p class="place"><i class="fa-solid fa-location-dot me-2"></i>Kozhikode</p>
            <p class="type-work"><i class="fa-solid fa-building me-2"></i>Office</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- projects section end -->

  <!-- service section start -->
  <div class="panel hp-service-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="hp-service-box">
            <img src="assets/img/Architecture1.jpg" class="img-fluid service-main-card-img" alt="">
            <div class="service-dtls-box">
              <img src="assets/img/icons/Architecture.png" alt="">
              <h4>Architecture</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="hp-service-box">
            <img src="assets/img/Interiors-1.jpg" class="img-fluid service-main-card-img" alt="">
            <div class="service-dtls-box">
              <img src="assets/img/icons/Interiors.png" alt="">
              <h4>Interiors</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="hp-service-box">
            <img src="assets/img/Landscape1.jpg" class="img-fluid service-main-card-img" alt="">
            <div class="service-dtls-box">
              <img src="assets/img/icons/Landscape.png" alt="">
              <h4>Landscape</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- service section end -->


  <!-- footer  start -->

  <div class="panel hp-contact-section">
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
              <a disabled><i class="fa-solid fa-location-dot me-1"></i>  <span> Karanthur kozhikode</span></a>
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
    <div class="copyright-section">
      <div class="container">
        <p>Copyright © 2023 Arclan. All Rights Reserved | Designed by <a href="https://www.mentegoz.com/"
            target="_blank">Mentegoz Technologies</a></p>
      </div>
    </div>
  </div>

  <!-- footer start -->

  <script>
    document.querySelectorAll(".hp-nav-link").forEach((item) => item.classList.add('active'));
  </script>


  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- gsap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/gsap.min.js"></script>
  <!-- scroll trigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollTrigger.min.js"></script>
  <!-- scroll to -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/ScrollToPlugin.min.js"></script>
  <!-- smooth scroll -->
  <script src="assets/js/SmoothScrollMouseWheel.js"></script>

  <!-- main js -->
  <script src="assets/js/main.js"></script>
  </div>
  </div>
</body>

</html>