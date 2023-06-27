<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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

    <!-- header start -->
    <?php include 'includes/header.php'; ?>
    <!-- header end -->



    <!-- banner section start -->
    <div class="banner-section">
        <div class="container">
            <div class="breadcrumb-section">
                <h3>Projects</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- banner section end -->

    <!-- projects filter section start -->

    <div class="project-filter-section">
        <div class="container">
            <div class="project-nav-tab">
                <ul class="project-nav-tab-ul">
                    <li>
                        <a data-filter="all" class="active project-btn">All</a>
                    </li>
                    <li>
                        <a data-filter="architecture" class="project-btn">Architecture</a>
                    </li>
                    <li>
                        <a data-filter="interiors" class="project-btn">Interiors</a>
                    </li>
                    <li>
                        <a data-filter="landscape" class="project-btn">Landscape</a>
                    </li>
                </ul>
            </div>
            <div class="project-boxes">
                <div class="project-box interiors" >
                    <a href="project-details.php">
                        <img class="img-fluid project-img" src="assets/img/proejcts/vtrust/vtrust---1.jpg" alt="">
                        <div class="project-desc">
                            <div class="project-dtls">
                                <p class="project-name">V Trust Eye Care</p>
                                <p class="project-type">Interior</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-box interiors landscape" >
                    <a href="project-details.php">
                        <img class="img-fluid project-img" src="assets/img/proejcts/gaya sanctury/gaya-sanctury---1.jpg" alt="">
                        <div class="project-desc">
                            <div class="project-dtls">
                                <p class="project-name">V Trust Eye Care</p>
                                <p class="project-type">Interior</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-box architecture" >
                    <a href="project-details.php">
                        <img class="img-fluid project-img" src="assets/img/proejcts/mosque/mosque--1.jpg" alt="">
                        <div class="project-desc">
                            <div class="project-dtls">
                                <p class="project-name">Mosque</p>
                                <p class="project-type">Interior</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-box architecture">
                    <a href="project-details.php">
                        <img class="img-fluid project-img" src="assets/img/proejcts/mosque/mosque--1.jpg" alt="">
                        <div class="project-desc">
                            <div class="project-dtls">
                                <p class="project-name">Mosque</p>
                                <p class="project-type">Interior</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-box interiors" >
                    <a href="project-details.php">
                        <img class="img-fluid project-img" src="assets/img/proejcts/vtrust/vtrust---1.jpg" alt="">
                        <div class="project-desc">
                            <div class="project-dtls">
                                <p class="project-name">V Trust Eye Care</p>
                                <p class="project-type">Interior</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project-box interiors landscape" >
                    <a href="project-details.php">
                        <img class="img-fluid project-img" src="assets/img/proejcts/gaya sanctury/gaya-sanctury---1.jpg" alt="">
                        <div class="project-desc">
                            <div class="project-dtls">
                                <p class="project-name">V Trust Eye Care</p>
                                <p class="project-type">Interior</p>
                            </div>
                        </div>
                    </a>
                </div>

                
            </div>
        </div>
    </div>

    <!-- projects filter section end -->


    <!-- footer start -->
        <?php include 'includes/footer.php' ?>
    <!-- footer end -->

    <script>
        document.querySelectorAll(".project-nav-link").forEach((item) => item.classList.add('active'));
    </script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- project filter -->
    <script src="assets/js/filter.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/aos.js"></script>
    <!-- smooth scroll js -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>