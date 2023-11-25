<?php
session_start();

$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;

?>
<style>
    .form-group {
    margin-bottom: 1rem;
}
</style>
<div class="breadcrumbs" data-aos="fade-down">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-start">
                            <div class="page-title">
                                <h1><?php echo $_SESSION['name']; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-end">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                <li><a id="dashboard_brd" role="button">Dashboard</a></li>
                                    <li class="active"><a id="account_brd" role="button">Account Info</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn" >
                <div class="row">
                    

                    <div class="col-lg-10 mx-auto">
                        <div class="card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card-header">
                                <strong>Personal </strong>Info
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class="form-control-label">Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static"><?php echo $_SESSION['name']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class="form-control-label">User ID</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static"><?php echo $_SESSION['username']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="phone" class="form-control-label">Phone No.</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static"> <?php echo $_SESSION['phone']; ?></p>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class="form-control-label">Email Address</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <p class="form-control-static"><?php echo $_SESSION['email']; ?></p>
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Edit
                                </button>
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-10 mx-auto">
                        <div class="card" data-aos="zoom-in" data-aos-delay="100">
                            <form action="change_password.php" method="post" class="">
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                            <div class="card-header"><Strong>Change</Strong> Password</div>
                            <div class="card-body card-block">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" id="username" name="username" placeholder="rtiwari" value="<?php echo $_SESSION['username']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                            <input type="password" id="new_password" name="new_password" placeholder="New Password" class="form-control">
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                               

                        </div>
                    </div>

                    
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- .content -->

        <script>

$("#dashboard_brd").click(function (e) { 
    $("#dashboard_tab").trigger("click");
    
});

$("#account_brd").click(function (e) { 
    $("#account_info_tab").trigger("click");
    
});

        </script>