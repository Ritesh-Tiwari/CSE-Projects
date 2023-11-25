<?php
session_start();

$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;


$pageTitle = 'New Project'; 
include '../base/header.php';
include '../base/navbar.php';

?>
<style>
    .form-group {
        margin-bottom: 1rem;
    }

    .new_project .card {
        padding: 50px 10px 50px 10px;
    }
</style>

<!-- Product price box -->
<section style="background-color: #f5fafd; margin-top: 50px;">

    <style>
        .Shopify_box,
        .eCommmerce_box {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 30px 0px 30px 20px;
            border-radius: 20px;
            border-style: initial;
            border-color: #494b4d;
            box-shadow: 5px 5px 5px #39414b;
        }


        .WooCommerce_box {
            background-color: rgb(17, 62, 112);
            color: white;
            border-radius: 20px;
            padding: 30px 0px 30px 20px;
            border-radius: 20px;
            border-style: initial;
            border-color: #494b4d;
            box-shadow: 5px 5px 5px #0f0f1f;

        }


        @media screen and (max-width: 600px) {

            .WooCommerce_box,
            .eCommmerce_box,
            .Shopify_box {
                margin-bottom: 50px;
            }

        }

        @media screen and (max-width: 1080px) {

            .WooCommerce_box,
            .eCommmerce_box,
            .Shopify_box {
                margin-bottom: 50px;
                box-shadow: none;
                width: 100%;
            }

        }



        .WooCommerce_box h4,
        .eCommmerce_box h4,
        .Shopify_box h4 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: large;
            font-weight: bold;
            color: #0b2341;
        }

        .WooCommerce_box h4 {
            color: #f5fafd;
        }

        .Shopify_box span,
        .eCommmerce_box span {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: larger;
            font-weight: bolder;
            color: rgb(20, 57, 112);
        }

        .WooCommerce_box span {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: larger;
            font-weight: bolder;
            color: rgb(207, 218, 235);
        }

        .WooCommerce_box a,
        .eCommmerce_box a,
        .Shopify_box a {
            width: 90%;
            font-weight: bold;
            padding: 10px 0px 10px 0px;
            margin-top: 50px;
            border-radius: 10px;
        }

        .WooCommerce_box li,
        .eCommmerce_box li,
        .Shopify_box li {
            list-style-type: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        hr {
            color: rgb(255, 255, 255);
            border-width: 2px;
            margin-right: 20px;
            margin-bottom: 40px;
        }

        /*
.WooCommerce_box li::marker, .eCommmerce_box li::marker, .Shopify_box li::marker {
  content: "✔️";
} */
    </style>
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Services</h2>
            <h4 style="text-transform: capitalize; color: #0b2341; font-weight: bold;">Choose your business plan
                for your project</h4>
        </div>

        <!-- one month -->
        <div class="row py-3 mb-5 gx-5">
            <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="Shopify_box">
                    <div>
                        <h4><strong>Shopify System</strong></h4>

                        <h5><span>$29</span> / month</h5>

                    </div>
                    <p
                        style="background-color: #eff1f1; color: #0b2341; height: 40px; line-height: 40px; margin: 40px 0px 40px -20px; text-align: center;">
                        <strong>What's included on package</strong></p>

                    <div>
                        <table>
                            <li> <img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                                Basic application</li>
                            <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                                Shopify Integration</li>
                            <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                                Customer Service 24x7 hr
                            </li>
                            <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                                Manage backend Problems
                            </li>
                            <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset=""
                                    class="ml-5">etc</li>

                        </table>

                    </div>
                    <div>
                        <a href="free_trail/free_trail_signup_page.html" class="btn btn-dark"> Try for free</a>
                    </div>
                    <!-- <button type="button">Primary</button>
        <button type="button" >Primary</button>
        <button type="button">Primary</button> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="WooCommerce_box">
                    <h4><strong>WooCommerce System </strong></h4>
                    <h5><span>$29</span> / month</h5>
                    <p
                        style="background-color: #eff1f1; color: #0b2341; height: 40px; line-height: 40px; margin: 40px 0px 40px -20px; text-align: center;">
                        <strong>What's included on package</strong></p>
                    <table>
                        <style></style>
                        <li> <img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            Basic application </li>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            WooCommerce Integration</li>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            Customer Service 24x7 hr
                        </li>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            Manage backend Problems</li>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5"> etc
                        </li>
                    </table>
                    <a href="free_trail/free_trail_signup_page.html" class="btn btn-light"> Try for free</a>
                    <!-- <button type="button" style="margin-top: 50px;">$29/ month</button> -->
                    <!-- <button type="button" >Primary</button>
        <button type="button">Primary</button> -->
                </div>

            </div>
            <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="eCommmerce_box">
                    <h4><strong>Customized ERP System</strong></h4>
                    <h5><span>$39</span> / month</h5>

                    <p
                        style="background-color: #eff1f1; color: #0b2341; height: 40px; line-height: 40px; margin: 40px 0px 40px -20px; text-align: center;">
                        <strong>What's included on package</strong></p>
                    <table>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5"> Basic
                            application</li>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            Providing eCommmerce
                            Platform</li>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            Customer Service 24x7 hr
                        </li>
                        <li><img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            Manage backend Problems</li>
                        <li> <img src="assets/img/icons/check-mark.png" alt="" width="25px" srcset="" class="ml-5">
                            Manage frontend Problems
                        </li>
                    </table>
                    <a href="free_trail/free_trail_signup_page.html" class="btn btn-dark"> Try for free</a>
                    <!-- <button type="button">Primary</button>
        <button type="button" >Primary</button>
        <button type="button">Primary</button>  -->
                </div>

            </div>
        </div>

    </div>

</section>





<section>

    <div class="content new_project">
        <div class="animated fadeIn">
            <div class="text-center my-4">
                <h2>Create New Project </h2>
            </div>
            <div class="row">


                <div class="col-lg-7 mx-auto">

                    <div class="card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Select System</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="system_name" class="form-control" id="">
                                            <option select> --select--</option>
                                            <option> Shopify System</option>
                                            <option> Woocommorce System</option>
                                            <option> Shopify System</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Project Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" class="form-control" name="project_name"
                                            placeholder="example">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <!-- <label class="form-control-label">Site URL</label> -->
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static">https://automation.example.io</p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class="form-control-label">Create Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" name="password" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class="form-control-label">Confirm Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" name="password" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="phone" class="form-control-label">Price.</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" name="price" id="" class="form-control" placeholder="$9">
                                    </div>
                                    <div class="col col-md-3">
                                        <label for="phone" class="form-control-label">Duration.</label>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="text" name="price" id="" class="form-control"
                                            placeholder="4 months">
                                    </div>
                                </div>
                                <div class="row pt-5">

                                    <div class="col col-md-3">
                                        <!-- <label for="phone" class="form-control-label">Duration.</label> -->
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <button type="submit" class="btn"
                                            style="background: #ed502e; border: 0; padding: 10px 30px ; border-radius: 4px; color: #fff; transition: 0.4s;">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>


            </div>
        </div>
        <!-- .animated -->
    </div>

    <!-- .content -->
</section>

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


    });
</script>

</body>

</html>