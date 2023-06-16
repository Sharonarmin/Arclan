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
            <a class="navbar-brand" href="#"><img src="assets/img/logo with white.png" alt=""></a>
            <div></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasmobile"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img class="hamburger-img" src="assets/img/hamburger.png" alt="">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
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




    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>