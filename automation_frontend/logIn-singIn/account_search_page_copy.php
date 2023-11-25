<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reset Password | Cloud97</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- <link href="../assets/css/style_one.css" rel="stylesheet"> -->
    <style>
        /* Forms */
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
            background-color: rgba(255, 255, 255);
            color: #081658;
            border-radius: 5px 5px 5px 5px;
            top: 100px;
            left: 40%;
            text-align: center;
            padding: 10px 20px 10px 20px;
            display: none;
            /* border-style: groove; */
            border: 1px solid rgb(121, 120, 120,0.5);
            font-weight: bold;

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
                    <li><a class="getstarted scrollto" href="login.php">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section class="mt-5">
        <div class="animated fadeIn">
            <div class="col-lg-5 col-sm-8 col-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">Reset Your Password! </div>
                    <div class="card-body card-block">
                        <form action="#" method="post" name="resetPasswordForm">
                            <div class="form-group text-left py-2">
                                <label for="email"><b>Email Address</b></label><br>
                                <div class="input-group pt-2">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input type="email" id="email" name="email" placeholder="Email" class="form-control"
                                        require />
                                </div>
                            </div>
                            <div class="form-group py-2" id="otp__sec">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <input type="text" id="otp" name="otp" placeholder="OTP" class="form-control"
                                        require />
                                </div>
                            </div>
                            <div class="form-group py-2" id="pass__sec">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <input type="password" id="password" name="password" placeholder="Password"
                                        class="form-control" require />
                                </div>
                            </div>

                            <div class="form-group py-2" id="cpass__sec">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                    <input type="password" id="cpassword" name="cpassword"
                                        placeholder="Confirm Password" class="form-control" require />
                                </div>
                            </div>

                            <div class="form-group text-center pt-3">
                                <button type="button" class="btn btn-primary form-control" id="send__otp">
                                    Send OTP
                                </button>
                                <button type="button" class="btn btn-primary form-control" id="rest__btn">
                                    Reset Now
                                </button>
                                <br><br>
                                <p>Dont Have Account ? <b><a href="../registration/registration_form.php"
                                            style="color: rgb(15, 15, 27);">Register Now</p></a> </b>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .animated -->

        <div class="notification">
            </p><i class="fa fa-bell" aria-hidden="true"></i>
            <span id="errorMsg"></span>
            <button type="button" class="btn-close"></button>
            <br>
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
    <script>
        $(function () {
            $("#otp__sec, #pass__sec, #cpass__sec, #rest__btn").hide();

            //  sending otp to the user
            $("#send__otp").click(function () {
                let email = $("#email").val();
                $.ajax({
                    url: "fgt_pass.php",
                    type: "GET",
                    data: {
                        serachEmail: email
                    },
                    // dataType: "text",
                    success: function (response) {
                        if (response == 0) {
                            $("#errorMsg").text("Email adress not found !");
                            $(".notification").show();

                        } else {
                            $(".card-footer").html(response);
                            $("#otp__sec, #pass__sec, #cpass__sec, #rest__btn").show();
                            $("#send__otp").hide();
                        }
                    }
                });

            });

            // Reset the password 
            $("#rest__btn").click(function () {
                event.preventDefault(); // prevent the default form submission
                // var formData    = $(this).serialize();
                var otp = $("#otp").val();
                var password = $("#password").val();
                var cpassword = $("#cpassword").val();

                if (password != cpassword) {
                    $("#errorMsg").text("Password mismatch  !");
                    $(".notification").show();

                } else {

                    $.ajax({
                        type: "POST",
                        url: "fgt_pass.php",
                        data: {
                            otp: otp,
                            password: password
                        },
                        // dataType: "dataType",
                        success: function (response) {
                            if (response == 1) {
                                window.location.href = './login.php'
                            } else {
                                $("#errorMsg").text(response);
                                $(".notification").show();
                            }

                        }
                    });
                }


            });

            $(".btn-close").click(function (e) {
                $(".notification").hide();;

            });
        });
    </script>


</body>

</html>