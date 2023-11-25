<?php 
session_start();
$pageTitle = 'Dashboard'; 
include '../base/header.php';


?>
<style>
aside.left-panel {
    top: 0px;
}

.right-panel {
    margin-top: 0px;
}
</style>

<!-- Left Panel -->
<aside id="left-panel" class="left-panel animate__animated animate__fadeInLeft" style="background-color: #001F3F; ">
    <nav class="navbar navbar-expand-sm navbar-default" style="background-color: #001F3F;">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li data-aos="fade-up">
                    <a class="active" href="#"><i class="menu-icon fa fa-laptop"></i>Quick View
                    </a>

                </li>
                <li data-aos="fade-up">
                    <a id="project_tab" role="button"> <i class="menu-icon bi bi-window-desktop"></i>Project Details</a>

                </li>

                <li data-aos="fade-up">
                    <a id="cron_tab" role="button"> <i class="menu-icon bi bi-calendar3"></i>Scheduled Actions</a>

                </li>

                <li data-aos="fade-up">
                    <a id="settings_tab" role="button"> <i class="menu-icon bi bi-database-fill-down"></i>Data
                        Backups</a>

                </li>
                <li data-aos="fade-up">
                    <a id="settings_tab" role="button"> <i class="menu-icon fa fa-cog"></i>Settings</a>

                </li>

                <li class="animate__animated animate__fadeInUp">
                    <a href="../dashboard/"> <i class="menu-icon bi bi-box-arrow-in-left"></i>Go Back</a>

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
            url: "cron_details.php",
            // data: "data",
            dataType: "html",
            success: function(response) {

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

    $("#cron_tab").click(function() {
        $("#loading").show();

        $.ajax({
            type: "GET",
            url: "cron_details.php",
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


    $("#project_tab,#myProfile_tab").click(function() {
        $("#loading").show();
        $.ajax({
            type: "GET",
            url: "project_details.php",
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