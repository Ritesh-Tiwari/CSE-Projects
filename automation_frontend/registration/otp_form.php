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

    <title>Verification Form | Cloud97</title>
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
    <script src="../assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

    .input-group-addon {
        background-color: transparent;
        border-left: 0;
    }

    .input-group-addon,
    .input-group-btn {
        white-space: nowrap;
        vertical-align: middle;
    }

    .input-group-addon {
        padding: .5rem .75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.25;
        color: #495057;
        text-align: center;
        background-color: #e9ecef;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: .25rem;
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

<body style="background-color: rgb(226, 227, 228);">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="../">Cloud97</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="../">Home</a></li>
                    <li><a class="nav-link scrollto" href="../#about">About</a></li>
                    <li><a class="nav-link scrollto" href="../#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="../#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="login.php">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section class="mt-5">
        <div class="col-lg-5 col-11 mx-auto">
            <div class="card">
                <form id="OTP_form">
                    <div class="card-header py-3 text-center">Reset Your Password! </div>
                    <div class="card-body card-block">
                        <div class="form-group text-left py-2">
                            <label for="email">Please enter the OTP you received at
                                <?php echo $_SESSION['email'] ?></label><br>
                            <div class="input-group py-3">
                                <div class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <input type="text" id="otp" name="otp" placeholder="One Time Password"
                                    class="form-control" require />
                                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                <br>
                                <span class="badge bg-warning text-dark" id="username_error"></span>
                                <!-- <button type="reset" class="btn btn-dark">Resend</button> -->
                            </div>
                            <div class="input-group py-3">
                                <button type="submit" id="verifyBtn" class="btn btn-primary form-control">
                                    Submit</button>


                            </div>
                        </div>

                    </div>
                    <div class="card-footer py-3">
                        <span style="float:left">Don't received the code ? </span><a
                            href="account_verification.php?resendOtp">Resend</a>
                        <span style="float:right" id="timer">02:00 minutes</span>

                    </div>
                </form>
                <script>
                $(document).ready(function() {
                    var duration = 120; // 2 minutes in seconds
                    var timerDisplay = $('#timer');

                    var interval = setInterval(function() {
                        var minutes = Math.floor(duration / 60);
                        var seconds = duration % 60;

                        // Add leading zero if necessary
                        var minutesDisplay = (minutes < 10 ? '0' : '') + minutes;
                        var secondsDisplay = (seconds < 10 ? '0' : '') + seconds;

                        // Update the timer display
                        timerDisplay.text(minutesDisplay + ':' + secondsDisplay + ' minutes');

                        // Check if the timer has reached 0
                        if (duration === 0) {
                            clearInterval(interval);
                            // Timer has finished, perform any actions needed here
                            alert('Time is up!');
                        }

                        duration--; // Decrease the duration by 1 second
                    }, 1000); // Update every 1 second
                });
                </script>
            </div>
        </div>
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