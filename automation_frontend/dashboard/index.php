<?php 
session_start();
$pageTitle = 'Dashboard'; 
include '../base/header.php';
include '../base/navbar.php';


?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0">

</head>

<!-- Left Panel -->
<aside id="left-panel" class="left-panel animate__animated animate__fadeInLeft">
    <nav class="navbar navbar-expand-sm navbar-default" >
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li data-aos="fade-up">
                    <a id="dashboard_tab" class="active" role="button"><i class="menu-icon fa fa-laptop"></i>Dashboard
                    </a>

                </li>
                <li data-aos="fade-up">
                    <a id="servies_tab" role="button"> <i class="menu-icon fa fa-tasks"></i>Projects</a>

                </li>
                <li data-aos="fade-up">
                    <a id="settings_tab" role="button"> <i class="menu-icon fa fa-cog"></i>Settings</a>

                </li>
                <li data-aos="fade-up">
                    <a id="account_info_tab" role="button"> <i class="menu-icon fa fa-user"></i>Account info</a>

                </li>
                <li class="animate__animated animate__fadeInUp">
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
<div id="right-panel" class="right-panel" style="height: 100vh;">


    <div class="response">
        <!-- Page contant will load here and default contant is dashboard page -->
    </div>

    <div class="clearfix"></div>
    <!-- Footer -->
    <footer class="site-footer" data-aos="fade-up" style="bottom: 0px;">
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
<script src="../assets/js/jquery.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>



<script>
    $(document).ready(function () {

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
                success: function (response) {

                    $(".response").html(response);
                }
            });
        }

        function hideMenu() {
            var windowWidth = $(window).width();
            if (windowWidth < 760) {
                $('#left-panel').slideToggle();
            } else {
                $('#left-panel').toggleClass('open-menu');
            }
        }

        $("#dashboard_tab").click(function () {
            $("#loading").show();
            $.ajax({
                type: "GET",
                url: "dashboard_page.php",
                // data: "data",
                dataType: "html",
                success: function (response) {
                    localStorage.setItem('ajaxResponse', response);
                    $(".response").html(response);
                    $("#loading").hide();
                    hideMenu();
                },
                complete: function () {
                    // Hide the loading spinner
                    $("#loading").hide();
                },

            });

        });

        $("#servies_tab").click(function () {
            $("#loading").show();

            $.ajax({
                type: "GET",
                url: "services-page.php",
                // data: "data",
                dataType: "html",
                success: function (response) {
                    localStorage.setItem('ajaxResponse', response);
                    $(".response").html(response);
                    $("#loading").hide();
                    hideMenu();
                },
                complete: function () {
                    // Hide the loading spinner
                    $("#loading").hide();
                },
            });
        });


        $("#account_info_tab,#myProfile_tab").click(function () {
            $("#loading").show();
            $.ajax({
                type: "GET",
                url: "account_info.php",
                // data: "data",
                dataType: "html",
                success: function (response) {
                    console.log(response);
                    localStorage.setItem('ajaxResponse', response);
                    $(".response").html(response);
                    $("#loading").hide();
                    hideMenu();
                },
                complete: function () {
                    // Hide the loading spinner
                    $("#loading").hide();
                },
            });
        });
    });
</script>

</body>

</html>