<?php
session_start();
include("connection.php");
if (empty($_SESSION['id'])) {
  header("Location: ./");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->

  <title>
    <?php echo $_SESSION['name']; ?> - Dashboard
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />



  <style>
    .btn_view_service {
      font-family: "Raleway", sans-serif;
      font-weight: 500;

      letter-spacing: 1px;
      display: inline-block;
      padding: 14px 32px;
      border-radius: 4px;
      transition: 0.5s;
      line-height: 1;
      color: #fff;
      animation-delay: 0.8s;
      background: #ed502e;
      /* margin-top: 15px; */
    }

    #v-pills-tab button {
      margin-bottom: 5%;
      margin-top: 5%;
      font-weight: 700;
      color: black;
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

    #v-pills-account th,
    #v-pills-account td {
      width: 200px;
      padding-bottom: 5%;

    }
  </style>
</head>

<body>
  <div id="loading" style="display: none;"></div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="./">Cloud97</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logodark"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="./#hero">Home</a></li>
          <li><a href="new_service.php">New Service</a></li>
          <li><a class="nav-link scrollto" href="../#about">About</a></li>
          <li><a class="nav-link scrollto" href="../#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span class="material-symbols-outlined px-2">person</span>
              <span>
                <?php print($_SESSION['name']);?>
              </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#dashboard_tab">Dashboard</a></li>
              <li><a class="nav-link scrollto" href="#service_tab">Service</a></li>
              <li><a class="nav-link scrollto" href="#account_tab">Account</a></li>
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

  <!-- side menu -->
  <!-- <section> -->
  <br><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2" style="min-height: 99vh; background: #ced4da; padding-bottom:30px">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <br><br><br>
          <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard"
            aria-selected="true">
            <span class="material-symbols-outlined ">grid_view</span>Dashboard</button>
          <button class="nav-link" id="v-pills-services-tab" data-bs-toggle="pill" data-bs-target="#v-pills-services"
            type="button" role="tab" aria-controls="v-pills-services" aria-selected="false">
            <span class="material-symbols-outlined">laptop_chromebook</span>Services</button>
          <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
            type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
            <span class="material-symbols-outlined">account_circle</span> Settings</button>
          <button class="nav-link" id="v-pills-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-account"
            type="button" role="tab" aria-controls="v-pills-account" aria-selected="false">
            <span class="material-symbols-outlined">settings</span>Account</button>
            

        </div>
      </div>
      <div class="col-md-10" style="min-height: 99vh; background:#f8f9fa">
        <div class="tab-content px-4" id="v-pills-tabContent">
          <div class="tab-pane show active fade" id="v-pills-dashboard" role="tabpanel"
            aria-labelledby="v-pills-dashboard-tab">
            <section>
              <div class="row">
                <div class="col-12 mx-auto">
                  <div class="card">
                    <div class="card-body d-flex ">
                      <h6 class="card-title"> <strong><span class="material-symbols-outlined mt-2">person</span> Welcome
                          <?php print($_SESSION['name']);?>
                        </strong> </h6>
                      <a href="#service_tab" id="view_service" class="ms-auto btn_view_service">
                        View
                        Services</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php /*
              
              <!-- card style end here    -->
              */ ?>
              <!-- <div class="row">
                <div class="col-11 mx-auto">
                  <div class="container overflow-hidden py-4">
                    <div class="row gx-5 text-center ">
                      <div class="col">
                        <div class="p-3 border bg-light"> <span class="material-symbols-outlined">database</span>
                          Database
                          Management</div>
                      </div>
                      <div class="col">
                        <div class="p-3 border bg-light"> <span class="material-symbols-outlined">settings</span>
                          Settings
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="row mt-3">
                <div class="col-8 mx-auto card text-center py-5">
                  <div class="py-5">
                    <span class="material-symbols-outlined" style="font-size: 80px; color: #ed502e;">check_circle</span>

                    <h5><strong>Your service is running smoothly </strong></h5>
                    <p><strong>
                        <?php echo (!empty($_SESSION['new_service_msg'])) ? $_SESSION['new_service_msg']: "No issues were found"; ?>
                      </strong></p>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-services-tab">
            <br>
            <div id="msg"></div>
            <br>
            <a href="new_service.php"
              style="padding: 10px 20px 10px 20px; background: #ed502e; color:#fff; margin-left: 80%; border-radius: 4px;">
              + New
              service</a>
            <br><br>

            <div class="container">

              <table class="table table-hover mb-5">
                <thead>
                  <tr>
                    <th>Service Name</th>
                    <th>Service URL</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>&nbsp</th>
                  </tr>
                </thead>
                <tbody id="service_tbody">
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            <section>
              <h1>settings</h1>
            </section>
          </div>
          <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
            <section>
              <div class="row mt-5">
                <div class="col-6  mx-auto">
                  <div class="card text-dark ">
                    <div class="card-body mx-auto">
                      <p class="card-text ">
                      <table class="py-5">
                        <!-- ======= Customer Details ======= -->
                        <tbody>
                          <tr>
                            <th scope="col">Name </th>
                            <td scope="col">
                              <?php print($_SESSION['name']); ?>
                              </th>
                          </tr>
                          <tr>
                            <th scope="col">User ID</th>
                            <td scope="col">
                              <?php print($_SESSION['username']); ?>
                              </th>
                          </tr>
                          <tr>
                            <th scope="col">Phone</th>
                            <td scope="col">
                              <?php print($_SESSION['phone']); ?>
                              </th>
                          </tr>
                          <tr>
                            <th scope="col">E-mail</th>
                            <td scope="col">
                              <?php print($_SESSION['email']); ?>
                              </th>
                          </tr>
                        </tbody>
                        <!-- ======== =======================  ======= -->

                      </table>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- </section> -->

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
        Designed by <a href="https://cloud97.io">Cloud97</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
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

</body>

</html>