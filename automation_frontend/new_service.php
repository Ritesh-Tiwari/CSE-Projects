<?php
session_start();
if (empty($_SESSION['id'])) {
  header("Location: ./");
}
include("connection.php");
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>New Service | Cloud97</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>



    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
    #loading {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        overflow: hidden;
        background: #fff;
    }

    #loading:before {
        content: "";
        position: fixed;
        top: calc(50% - 30px);
        left: calc(50% - 30px);
        border: 6px solid #ed502e;
        border-top-color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: animate-preloader 1s linear infinite;
    }

    @keyframes animate-preloader {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .box {
        width: 300px;
        margin: 25px 0;
        display: flex;
        align-items: center;
        user-select: none;
    }

    .box label {
        font-size: 16px;
        color: #4D4D4D;
        position: absolute;
        z-index: 10;
        padding-left: 50px;
        cursor: pointer;
    }

    .box input {
        opacity: 0;
        visibility: hidden;
        position: absolute;
    }

    .box input:checked~.check {
        border-color: #00EA90;
        box-shadow: 0px 0px 0px 15px #00EA90 inset;
    }

    .box input:checked~.check::after {
        opacity: 1;
        transform: scale(1);
    }

    .box .check {
        width: 20px;
        height: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        border-radius: 100px;
        background-color: #FFF;
        border: 2px solid #00EA90;
        box-shadow: 0px 0px 0px 0px #00EA90 inset;
        transition: all 0.15s cubic-bezier(0, 1.05, 0.72, 1.07);
    }

    .box .check::after {
        content: "";
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 4;
        position: absolute;
        transform: scale(0);
        background-size: 50%;
        background-image: url("https://s6.picofile.com/d/8392306668/bacc888c-bed7-41a9-bf24-f6ff0718f471/checkmark.svg");
        background-repeat: no-repeat;
        background-position: center;
        transition-delay: 0.2s !important;
        transition: all 0.25s cubic-bezier(0, 1.05, 0.72, 1.07);
    }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="./">Cloud97</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="./#hero">Home</a></li>
                    <li><a class="nav-link scrollt active " href="new_service.php">New Service</a></li>
                    <li><a class="nav-link scrollto" href="./#about">About</a></li>
                    <li><a class="nav-link scrollto" href="./#contact">Contact</a></li>
                    <li class="dropdown"><a href="#"><span class="material-symbols-outlined px-2">person</span>
                            <span>
                                <?php print($_SESSION['name']);?>
                            </span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Account</a></li>
                            <li style="background: #ed502e;"><a style="color: #ffff;" href="logIn-singIn/logout.php">
                                    <?php echo "Logout" ?>
                                </a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <section id="service_section" style="background: #dee2e6;">
        <form id="service_form" class="pt-5">
            <br><br>

            <br>
            <div class="col-md-6 mb-4 mx-md-auto mx-3">

                <span id="validation_errors" class="badge bg-danger text-light mb-3"></span><br>
                <label class="form-label" for="Name"> <strong> Create New Service </strong>
                    <span class="text-danger" id="service_error">*</span></label>

                <div class="form-outline d-flex pt-2">
                    <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                    <input type="text" name="name" id="service_name" class="form-control form-control-lg "
                        placeholder="Enter your service name..." autofocus required />
                    <button type="submit" name="submit" id="submit_service_name" class="btn btn-success"
                        style="margin-left: -75px;">Create</button>
                </div>
                <br>
                <strong> <span id="final_service_name" style="color: #ed502e;"></span></strong>


            </div>
            <div class="col-6 mx-auto">
                <strong>Select your application</strong>
                <hr>
                <div class="row">

                    <?php 

$app_details = $models->execute_kw($db, $uid, $password, 'res.apps.data', 'search_read', 
array(array(array('id', '>',0))), array('fields' => array('id', 'name')));

        ?>
                    <div class="row">
                        <?php 
            foreach($app_details as $data){

            
          ?>
                        <div class="col-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="appName[]" id=""
                                        value="<?php echo $data['id']; ?>">
                                    <?php echo $data['name']; ?>
                                </label>
                            </div>

                        </div>
                        <?php }?>
                    </div>

                </div>
            </div>
        </form>
    </section>

    <div id="loading" style="display: none;"></div>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Cloud97</h3>
                            <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam
                                    excepturi quod.</em></p>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Cloud97</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://cloud97.i">Cloud97</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <div id="preloader">
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/validation.js"></script>
    <script>
    $(document).ready(function() {
        $('#service_section').height($(window).height());

    });
    </script>

</body>

</html>