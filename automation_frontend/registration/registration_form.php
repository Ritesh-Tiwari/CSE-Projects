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

            <!-- <h1 class="logo"><a href="../">Cloud97</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="./" class="logo"><img src="../assets/img/logo.jpg" alt="" width=65px class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="../">Home</a></li>
                    <li><a class="nav-link scrollto" href="../#about">About</a></li>
                    <li><a class="nav-link scrollto" href="../#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="../#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="../logIn-singIn/login.php">Get Started</a></li>
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
                            <h4 class="mb-4 pb-2 pb-md-0 mb-md-5"><b>Registration Form </b></h4>

                            <!-- ======= Registration Form ======= -->
                            <form id="registration_form" >
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

                                            <input type="text" name="fname" id="firstName"
                                                class="form-control form-control-lg" autofocus required />
                                            <label class="form-label" for="Name">First Name <span
                                                    class="text-danger">*</span></label>
                                            <br>
                                            <span class="text-danger" id="name_error"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lname" name="lname"
                                                class="form-control form-control-lg"/>
                                            <label class="form-label" for="lname">Last Name </label>
                                            <br>
                                            <span class="text-danger" id="lname_error"></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flexalign-items-center">
                                        <div class="form-outline">
                                            <input type="text" id="username" name="user_id"
                                                class="form-control form-control-lg" required />
                                            <label class="form-label" for="userid">User Name <span
                                                    class="text-danger">*</span></label>
                                            <br>
                                            <span class="text-danger" id="username_error"></span>
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="tel" name="phone" id="phoneNumber"
                                                class="form-control form-control-lg" required />
                                            <label class="form-label" for="phoneNumber">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <br>
                                            <span class="text-danger" id="phone_error"></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" name="email" id="email"
                                                class="form-control form-control-lg" required />
                                            <label class="form-label" for="emailAddress">Email <span
                                                    class="text-danger">*</span></label>
                                            <br>
                                            <span class="text-danger" id="email_error"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-lg" required />
                                            <label class="form-label" for="password">Password <span
                                                    class="text-danger">*</span></label>
                                            <br>
                                            <span class="text-danger" id="password_error"></span>
                                        </div>

                                    </div>
                                </div>


                                <div class="mt-4 pt-2 text-center">
                                    <input class="btn btn-primary btn-lg form-control" type="submit" id="submitBtn" value="Register" />
                                   
                                   <br><br> <span>Already Account?</span><a href="../logIn-singIn/login.php"> Login Now</a>
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