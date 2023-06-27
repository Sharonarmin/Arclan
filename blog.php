<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog</title>

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
                <h3>Blog</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- banner section end -->

    <div class="blog-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <!-- Blog post-->
                    <div class="blog-card" data-aos="fade-up">
                        <a href="#!"><img class="card-img-top" src="assets/img/blog/blog-1.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Lorem ipsum dolor</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                                aliquid atque, nulla.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                nulla.
                            </p>
                            <a class="blog-btn" href="#!">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Blog post-->
                    <div class="blog-card" data-aos="fade-up">
                        <a href="#!"><img class="card-img-top" src="assets/img/blog/blog-2.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Lorem ipsum dolor</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                                aliquid atque, nulla.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                nulla.
                            </p>
                            <a class="blog-btn" href="#!">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Blog post-->
                    <div class="blog-card" data-aos="fade-up">
                        <a href="#!"><img class="card-img-top" src="assets/img/blog/blog-3.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Lorem ipsum dolor</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                                aliquid atque, nulla.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                nulla.
                            </p>
                            <a class="blog-btn" href="#!">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Blog post-->
                    <div class="blog-card" data-aos="fade-up">
                        <a href="#!"><img class="card-img-top" src="assets/img/blog/blog-1.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Lorem ipsum dolor</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                                aliquid atque, nulla.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                                nulla.
                            </p>
                            <a class="blog-btn" href="#!">Read more</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">

                <ul class="pagination justify-content-center my-4 blog-pagination">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                            aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
    </div>


    <!-- footer start -->
    <?php include 'includes/footer.php' ?>
    <!-- footer end -->

    <script>
        document.querySelectorAll(".blog-nav-link").forEach((item) => item.classList.add("active"));
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