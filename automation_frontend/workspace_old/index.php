<?php
session_start();
include("connection.php");
if (empty($_SESSION['id'])) {
  header("Location: ../");
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_SESSION['name']; ?> - Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="../assets/css/normalize.min.css">
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style_one.css">


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style_one.css"> -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style>


    </style>

</head>

<body>

    <div class="toast-container top-0 end-0 p-5" style="position: fixed;">
        <!-- Then put toasts within -->
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        </div>
    </div>
    <div id="loading" style="display: none;"></div>

    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a id="dashboard_tab" role="button"><i class="menu-icon fa fa-laptop"></i>Dashboard
                        </a>

                    </li>
                    <li>
                        <a id="servies_tab" role="button"> <i class="menu-icon fa fa-tasks"></i>Projects</a>

                    </li>
                    <li>
                        <a id="settings_tab" role="button"> <i class="menu-icon fa fa-cog"></i>Settings</a>

                    </li>
                    <li>
                        <a id="account_info_tab" role="button"> <i class="menu-icon fa fa-user"></i>Account info</a>

                    </li>
                    <li>
                        <a href="../logIn-singIn/logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout</a>

                    </li>
                    <li>
                        <div id="msg"></div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand " href="./" style="color:#0B2341;"> <img src="../assets/img/logo.jpg" alt="Logo" class="pl-5" width="55px" srcset=""></a>
                    <a class="navbar-brand hidden" href="./" style="color:#0B2341;"> <strong>Cloud97 </strong></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red"><i class="fa fa-check"></i>You have 3 Notification</p>

                                <p>Server #1 overloaded.</p>
                                <a class="dropdown-item media" role="button">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" role="button">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../assets/img/images.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" id="myProfile_tab" role="button"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" role="button"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="../logIn-singIn/logout.php"><i
                                    class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="response">
            <!-- Page contant will load here and default contant is dashboard page -->
        </div>

        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2023 Cloud97
                    </div>
                    <div class="col-sm-6 text-end">
                        Designed by <a href="https://cloud97.io/">Cloud97</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- loading -->
    <div id="loading" style="display: none;"></div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main_new.js"></script>
    <!--  Chart js -->
    <script src="../assets/js/Chart.bundle.min.js"></script>
    <!--Flot Chart-->
    <script src="../assets/js/jquery.flot.min.js"></script>
    <script src="../assets/js/jquery.flot.spline.min.js"></script>
    <!-- local -->
    <script src="../assets/js/widgets.js"></script>

    <?php 
    // <!-- Scripts -->
    // <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script> -->
    // <script src="../assets/js/jquery.min.js"></script>
    // <script src="../assets/js/popper.min.js"></script>
    // <script src="../assets/js/bootstrap.min.js"></script>
    // <script src="../assets/js//jquery.matchHeight.min.js"></script>
    // <!--  Chart js -->
    // <script src="../assets/js/Chart.bundle.min.js"></script>
    // <!--Flot Chart-->
    // <script src="../assets/js/jquery.flot.min.js"></script>
    // <script src="assets/js/jquery.flot.spline.min.js"></script>
    // <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    // <!-- local -->
    // <script src="../assets/js/jquery.min.js"></script>
    // <script src="../assets/js/widgets.js"></script>
    // <script src="../assets/js/main_new.js"></script>
    
    //
    ?>

    <script>
    $(document).ready(function() {

        if (localStorage.getItem('ajaxResponse')) {
            var storedResponse = localStorage.getItem('ajaxResponse');

            // Display the stored response on the page
            // You can update the appropriate HTML element with the retrieved data
            $('.response').html(storedResponse);

            // Clear the stored response to prevent displaying outdated data on subsequent reloads
            // localStorage.removeItem('ajaxResponse');
        } else {
            $.ajax({
                type: "GET",
                url: "dashboard_page.php",
                // data: "data",
                dataType: "html",
                success: function(response) {

                    $(".response").html(response);
                }
            });
        }

        function hideMenu(){
            var windowWidth = $(window).width();   	
            if (windowWidth<760){ 
				$('#left-panel').slideToggle(); 
			} else {
				$('#left-panel').toggleClass('open-menu');  
			} 
        }

        $("#dashboard_tab").click(function() {
            $("#loading").show();
            $.ajax({
                type: "GET",
                url: "dashboard_page.php",
                // data: "data",
                dataType: "html",
                success: function(response) {
                    localStorage.setItem('ajaxResponse', response);
                    $(".response").html(response);
                    $("#loading").hide();
                    hideMenu();
                },
                complete: function() {
                    // Hide the loading spinner
                    $("#loading").hide();
                },

            });

        });

        $("#servies_tab").click(function() {
            $("#loading").show();

            $.ajax({
                type: "GET",
                url: "services-page.php",
                // data: "data",
                dataType: "html",
                success: function(response) {
                    localStorage.setItem('ajaxResponse', response);
                    $(".response").html(response);
                    $("#loading").hide();
                    hideMenu();
                },
                complete: function() {
                    // Hide the loading spinner
                    $("#loading").hide();
                },
            });
        });


        $("#account_info_tab,#myProfile_tab").click(function() {
            $("#loading").show();
            $.ajax({
                type: "GET",
                url: "account_info.php",
                // data: "data",
                dataType: "html",
                success: function(response) {
                    console.log(response);
                    localStorage.setItem('ajaxResponse', response);
                    $(".response").html(response);
                    $("#loading").hide();
                    hideMenu();
                },
                complete: function() {
                    // Hide the loading spinner
                    $("#loading").hide();
                },
            });
        });
    });
    </script>
</body>

</html>