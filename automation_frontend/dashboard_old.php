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

  <title>Cloud97</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


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
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


  <!-- =======================================================
  * Template Name: Cloud97
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/Cloud97-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .btn_view_service {
      font-family: "Raleway", sans-serif;
      font-weight: 500;
      font-size: 14px;
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

    .material-symbols-outlined {
      font-style: 20px;

    }

    #v-pills-tab a {
      margin-bottom: 20%;
      margin-top: 20%;
      font-weight: 700;
      color: black;
    }

    tbody a {
      color: blue;
    }

    #v-pills-tab a:hover,
    tbody td:hover,
    tbody th:hover,
    .thead-info th:hover {
      color: #ed502e;
    }
  </style>
</head>

<body>

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
          <li><a class="nav-link scrollto" href="./#about">About</a></li>
          <li><a class="nav-link scrollto" href="./#contact">Contact</a></li>
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

  <section>
    <div class="container-fluid">
      <div class="row">
        <script>
          $("#v-pills-tab a").each(function (index) {
            $(this).on("click", function () {
              var linkid = $(this).attr('id');
              var winloc = "http://Cloud97.io/dashboard.php#" + linkid;
              window.location = winloc;
            });
          });
        </script>

        <!-- ======= Menu Tab ======= -->
        <div class="col-lg-2 col-md-3 position-sticky "
          style="min-height: 99vh; background: #ced4da; padding-bottom:30px">
          <br><br><br>
          <div class="row">
            <div class="col-8 mx-auto ">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                  aria-controls="v-pills-home" aria-selected="true">
                  <span class="material-symbols-outlined ">grid_view</span> Dashboard </a>

                <a id="v-pills-service-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                  aria-controls="v-pills-messages" aria-selected="false">
                  <span class="material-symbols-outlined">laptop_chromebook</span> Service</a>


                <!-- <a id="v-pills-database-tab" data-toggle="pill" href="#v-pills-database" role="tab"
                  aria-controls="v-pills-database" aria-selected="false">
                  <span class="material-symbols-outlined">database</span> Database</a> -->

                <a id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab"
                  aria-controls="v-pills-account" aria-selected="false">
                  <span class="material-symbols-outlined">account_circle</span> Account</a>

                <a id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                  aria-controls="v-pills-settings" aria-selected="false">
                  <span class="material-symbols-outlined">settings</span> Settings</a>

              </div>
            </div>
          </div>
        </div>














        <!-- ======= Dashboard Tab ======= -->
        <div class="col-lg-10 col-md-9" id="dashboard_tab" style="min-height: 99vh; background:#f8f9fa">
          <section>
            <div class="row">
              <div class="col-11 mx-auto">
                <div class="card  ">
                  <div class="card-body d-flex ">
                    <h6 class="card-title"> <strong><span class="material-symbols-outlined mt-2">person</span> Welcome
                        <?php print($_SESSION['name']);?>
                      </strong> </h6>
                    <a href="#service_tab" id="view_service" class="ms-auto btn_view_service"> View
                      Services</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-11 mx-auto">
                <div class="container overflow-hidden py-4">
                  <div class="row gx-5 text-center ">
                    <div class="col">
                      <div class="p-3 border bg-light"> <span class="material-symbols-outlined">database</span> Database
                        Management</div>
                    </div>
                    <div class="col">
                      <div class="p-3 border bg-light"> <span class="material-symbols-outlined">settings</span> Settings
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8 mx-auto card text-center py-5">
                <div class="py-5">
                  <span class="material-symbols-outlined" style="font-size: 80px; color: #ed502e;">check_circle</span>

                  <h5><strong>Your service is running smoothly </strong></h5>
                  <p><strong>No issues were found</strong></p>
                </div>
              </div>
            </div>
          </section>
        </div>


        <!-- ======= service Tab ======= -->
        <div class="col-lg-10 col-md-9" id="service_tab" style="min-height: 99vh; background:#f8f9fa">
          <section>
            <a href="new_service.php"
              style="padding: 10px 20px 10px 20px; background: #ed502e; color:#fff; margin-left: 80%;"> + New
              service</a>

            <br>
            <br>
            <table class="table">
              <thead class="thead-info">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Service Name</th>
                  <th scope="col">Service URL</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                  $si = 0;
                  $service_details = $models->execute_kw($db, $uid, $password, 'customer.services', 'search_read', array(array(array('customer_id', '=', $_SESSION['id']))), array('fields' => array('id', 'service_name','service_url', 'odoo_cont_name', 'db_cont_name', 'state')));
                  foreach ($service_details as $w) {
                    $si = $si + 1; 
                    $_SESSION['web_id']         = $w['id'];
                    $_SESSION['service_name']   = $w['service_name'];
		                $_SESSION['service_url']    = $w['service_url'];
                    $_SESSION['odoo_cont_name'] = $w['odoo_cont_name'];
                    $_SESSION['db_cont_name']   = $w['db_cont_name'];
                    $_SESSION['state']          = $w['state'];

                   
                  ?>
                <!-- ======= services Details ======= -->
                <tr>
                  <th scope="row">
                    <?php print($si); ?>
                    <input type="hidden" id="web_id" value="<?php print($w['id']); ?>" />
                  </th>
                  <td>
                    <a href="<?php print ($_SESSION['service_url']); ?>" target="_blank">
                      <?php print($w['service_name']); ?>
                    </a>
                  </td>
                  <td>
                    <a href="<?php print($_SESSION['service_url']); ?>" target="_blank">
                      <?php print($_SESSION['service_url']); ?>
                    </a>
                  </td>

                    <?php if ($w['state'] == "running") {
                        ?>
                    <td> <span class='badge bg-success'><?php echo $_SESSION['state'] ;?></span></td>
                    <td> <a href="stop.php?web_id=<?php print($w['id']); ?>" id="stopbtn" class="btn btn-secondary">Stop</a>
                    </td>

                    <?php
                        } else {
                        ?>
                      <td> <span class='badge bg-warning'><?php echo $_SESSION['state'] ;?></span></td>
                    <td><a href="start.php?web_id=<?php print($w['id']); ?>" id="startbtn" class="btn btn-danger">Start</a>
                  </td>
                  <?php } ?>
                  <td>  <a href="delete.php?service_id=<?php print($w['id']); ?>" class="btn btn-primary"><span class="material-symbols-outlined">delete</span></a>
                  </td>
                  <td>
                    <!-- Button trigger deleteServiceModal -->
                    <!-- <input type="hidden" name="service_id" value="<?php print($w['id']);?>"> -->
                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                      data-bs-target="#deleteServiceModal">
                      <span class="material-symbols-outlined">delete</span></button>
                    <!-- Service Delete popup Modal -->
                    <div class="modal fade" id="deleteServiceModal" tabindex="-1"
                    aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-danger" id="deleteServiceModalLabel"> Warning</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-dark">
                          Once your service is deleted all files and data will be lost, it cannot be restored.
                          Are you sure you want to remove {service name} service?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <!-- <button type="button" id="#deleteBtn" class="btn btn-secondary" data-bs-dismiss="modal"> Delete</button> -->
                          <script language="javascript" type="text/javascript">
                            var service_id= document.getElementById("#web_id").value;
                            </script>
                            <!-- <a href="delete.php"
                                onclick="location.href=this.href+'?service_id='+service_id;return false;" -->
                                <!-- class="btn btn-primary">Delete</a> -->
                          <a href="delete.php?service_id=<?php print ($w['id']); ?>"  id="deleteBtn" class="btn btn-primary" >Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>

                    
                  </td>

                  <?php }
                  
                      ?>
                </tr>

                <!-- ============ END ======= -->
              </tbody>
            </table>

          </section>
        </div>

        <!-- ======= Database Tab ======= -->
        <div class="col-lg-10 col-md-9" id="database_tab" style="min-height: 99vh; background:#f8f9fa">
          <section>
            <h5><strong> Management</strong> </h5>
            <br>
            <div class="row">
              <div class="col-10 mx-auto card pt-4">

                <h6><strong>List of Current PostgreSQL Databases And Users </strong></h6>
                <hr>

                <!-- ======= Database Details ======= -->
                <table class="table">
                  <thead class="thead-info">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Database container</th>
                      <th scope="col">PostgreSQL Database</th>
                      <th scope="col">PostgreSQL User</th>
                      <th scope="col">service</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"> 1 </th>
                      <td> db_service500 </td>
                      <td>postgres</td>
                      <td>avcdev</td>
                      <td>service500</td>
                    </tr>
                    <tr>
                      <th scope="row"> 2 </th>
                      <td> db_service600 </td>
                      <td>postgres</td>
                      <td>avcdev</td>
                      <td>service600</td>
                    </tr>
                  </tbody>
                </table>
                <!-- ============= END ============ -->

              </div>
            </div>

          </section>
        </div>


        <!-- ======= Domain Tab ======= -->
        <div class="col-lg-10 col-md-9" id="domain_tab" style="min-height: 99vh; background:#f8f9fa">
          <section>
            <h1> your domain name</h1>
          </section>
        </div>


        <!-- ======= Setting Tab ======= -->
        <div class="col-10 col-md-9" id="setting_tab" style="min-height: 99vh; background:#f8f9fa">
          <section>
            <h1>settings</h1>
          </section>
        </div>

        <!-- ======= Account Tab ======= -->
        <div class="col-lg-10 col-md-9" id="account_tab" style="min-height: 99vh; background:#f8f9fa">
          <section>
            <div class="row mt-5">
              <div class="col-6  mx-auto">
                <div class="card text-dark ">
                  <div class="card-body mx-auto">
                    <p class="card-text ">
                    <table class="py-5">
                      <style>
                        #account_tab th,
                        #account_tab td {
                          width: 200px;
                          padding-bottom: 5%;

                        }
                      </style>

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

  </section>




  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Cloud97</h3>
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em>
              </p>
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
      </div>
        &copy; Copyright <strong><span>Cloud97</span></strong>. All Rights Reserved
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Cloud97-responsive-bootstrap-template/ -->
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

  <script>
    

    $(document).ready(function () {
      $("#domain_tab").hide();
      $("#service_tab").hide();
      $("#setting_tab").hide();
      $("#account_tab").hide();
      $("#database_tab").hide();
      $("#dashboard_tab").show();
      
      $("#v-pills-dashboard-tab").click(function () {
        $("#domain_tab").hide();
        $("#service_tab").hide();
        $("#setting_tab").hide();
        $("#account_tab").hide();
        $("#database_tab").hide();
        $("#dashboard_tab").show();

      });

      $("#v-pills-domain-tab").click(function () {
        $("#dashboard_tab").hide();
        $("#service_tab").hide();
        $("#setting_tab").hide();
        $("#account_tab").hide();
        $("#database_tab").hide();
        $("#domain_tab").show();

      });

      $("#v-pills-service-tab").click(function () {
        $("#dashboard_tab").hide();
        $("#setting_tab").hide();
        $("#domain_tab").hide();
        $("#account_tab").hide();
        $("#database_tab").hide();
        $("#service_tab").show();

      });

      $("#v-pills-database-tab").click(function () {
        $("#dashboard_tab").hide();
        $("#setting_tab").hide();
        $("#domain_tab").hide();
        $("#account_tab").hide();

        $("#service_tab").hide();
        $("#database_tab").show();

      });


      $("#v-pills-settings-tab").click(function () {
        $("#dashboard_tab").hide();
        $("#service_tab").hide();
        $("#domain_tab").hide();
        $("#account_tab").hide();
        $("#database_tab").hide();
        $("#setting_tab").show();

      });

      $("#v-pills-account-tab").click(function () {
        $("#dashboard_tab").hide();
        $("#service_tab").hide();
        $("#domain_tab").hide();
        $("#account_tab").show();
        $("#setting_tab").hide();
        $("#database_tab").hide();
      });

      $("#view_service").click(function () {
        $("#dashboard_tab").hide();
        $("#domain_tab").hide();
        $("#account_tab").hide();
        $("#setting_tab").hide();
        $("#database_tab").hide();
        $("#service_tab").show();

      });

    });

    $(function () {
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        localStorage.setItem('focustab', $(e.target).attr('href'));
      });

      var focustab = localStorage.getItem('focustab');
      if (focustab) {
        $('[href="' + focustab + '"]').tab('show');
      }
    });


// Refresh Page and Keep Scroll Position
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      var scrollpos = localStorage.getItem('scrollpos');
      if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function (e) {
      localStorage.setItem('scrollpos', window.scrollY);
    };
  </script>
</body>

</html>