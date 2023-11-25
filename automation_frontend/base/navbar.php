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