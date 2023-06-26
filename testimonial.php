<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <h3>Testimonial</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- banner section end -->


    <!-- testimonial section start -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="testimonial-box">
                        <div class="top">
                            <img src="assets/img/testimonial/testimonial-1.png" alt="">
                            <div class="testimonial-account-dtls">
                                <h4>Adil Shabab</h4>
                                <h6>Manager at Malabar Gold</h6>
                            </div>                                
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur corrupti, mollitia, fugit provident delectus ullam voluptates recusandae praesentium ex quibusdam perferendis nihil veritatis porro quod explicabo debitis consectetur? Corporis, corrupti.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="testimonial-box">
                        <div class="top">
                            <img src="assets/img/testimonial/testimonial-1.png" alt="">
                            <div class="testimonial-account-dtls">
                                <h4>Adil Shabab</h4>
                                <h6>Manager at Malabar Gold</h6>
                            </div>                                
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur corrupti, mollitia, fugit provident delectus ullam voluptates recusandae praesentium ex quibusdam perferendis nihil veritatis porro quod explicabo debitis consectetur? Corporis, corrupti.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->

    <!-- footer start -->
    <?php include 'includes/footer.php' ?>
    <!-- footer end -->



    <script>
        document.querySelectorAll(".testimonial-nav-link").forEach((item) => item.classList.add('active'));
    </script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- smooth scroll js -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>    
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>
</html>