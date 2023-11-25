<?php
session_start();
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sign up | Cloud97</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    <style>
    .gradient-custom {
        background: #dee2e6;
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

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

    .btn-primary {
        color: white;
        background-color: #0b2341;
    }

    .btn-primary:hover {
        color: white;
        background-color: #1f579b;
    }

    .notification {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 10px;
        display: none;
        /* hide the notification by default */
    }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="./">Cloud97</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="../" class="logo"><img src="../assets/img/logo.jpg" alt="Logo" class="img-fluid" width=65px></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="../#about">About</a></li>
                    <li><a class="nav-link scrollto" href="../#services">Services</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                    <li><a class="nav-link scrollto" href="../#contact">Contact</a></li>
                    <?php if(empty($_SESSION['id'])){
            echo '<li><a class="getstarted scrollto" href="logIn-singIn/login.php">Login</a></li>';
            }else{
              ?>
                    <li class="dropdown"><a href="#"><span class="material-symbols-outlined px-2">person</span>
                            <span>
                                <?php print($_SESSION['name']);?>
                            </span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="../dashboard">Dashboard</a></li>
                            <li><a class="nav-link scrollto" href="#service_tab">Service</a></li>
                            <li><a class="nav-link scrollto" href="#account_tab">Account</a></li>
                            <li style="background: #ed502e;"><a style="color: #ffff;" href="../logIn-singIn/logout.php">
                                    <?php echo "Logout" ?>
                                </a></li>
                        </ul>
                    </li>
                    <?php
          }
     ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <div class="mb-4 pb-2 pb-md-0 mb-md-5">
                            <h4 ><b>Shopify - Free Trail </b><br></h4>
                            <span> $0 / month
</span>
                            </div>
                             
                            

                            <!-- ======= New Project Form ======= -->
                            <form action="../new_service_create.php" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-outline">

                                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                            <label class="form-label" for="Name">Name</label>
                                            <input type="text" name="full_name" id="firstName"
                                                class="form-control form-control-lg" value="Ritesh Tiwari" readonly />
                                            <br>
                                            <span class="text-danger" id="name_error"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            
                                            <label class="form-label" for="Name">Project Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="project_name" id="project_name"
                                                class="form-control form-control-lg" autofocus required />
                                            <br>
                                            <span class="text-danger" id="project_name_error"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-12">

                                        <div class="form-outline">

                                            <label class="form-label">Create Password <span
                                                    class="text-danger">*</span></label>

                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-lg" autofocus required />
                                            <br>
                                            <span class="text-danger" id="password_error"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-12">

                                        <div class="form-outline">
                                            <label class="form-label">Confirm Password <span
                                                    class="text-danger">*</span></label>

                                            <input type="password" name="confirm_password" id="confirm_password"
                                                class="form-control form-control-lg" autofocus required />
                                            <br>
                                            <span class="text-danger" id="name_error"></span>
                                        </div>

                                    </div>
                                </div>


                                <div class="mt-4 pt-2 text-center">
                                    <input class="btn btn-primary btn-lg form-control" type="submit" id="submitBtn"
                                        value="Submit" />

                                    <!-- <br><br> <span>Already Account?</span><a href="../logIn-singIn/login.php"> Login
                                        Now</a> -->
                                </div>

                            </form>
                            <!-- ======= END Form ======= -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notification badge bg-danger text-light"><span id="errorMsg"></span><br></div>
    </section>

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
                Designed by <a href="https://cloud97.io/">Cloud97</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <div id="loading" style="display: none;"></div>
    <div id="preloader"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/validation.js"></script>

</body>

</html>