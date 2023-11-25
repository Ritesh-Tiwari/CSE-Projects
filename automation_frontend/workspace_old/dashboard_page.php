<?php
session_start();
include("connection.php");

$records = $models->execute_kw($db, $uid, $password, 'customer.services', 'search_read', array(array(array('customer_id', '=', $_SESSION['id']))), array('fields'=>array('service_name','state' )));
$_SESSION ['activateCount'] = 0;
$_SESSION ['runningCount']  = 0;
$_SESSION ['stoppedCount']  = 0;
$_SESSION ['serviceCount']  = 0;

foreach($records as $data){
    // collect total no. of service 

    if ($data['state']!=null){
        $_SESSION ['serviceCount']++;
    }
    switch($data['state']){
        case "activated":
            $_SESSION ['activateCount']++;
            break;
       
        case "running":
            $_SESSION ['runningCount']++;
            break;
       
        case "stop":
            $_SESSION ['stoppedCount']++;
            break;
                
    }
}

?>



<!-- /#header -->
<!-- Breadcrumbs-->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-start">
                    <div class="page-title">
                        <h1>
                            <?php echo $_SESSION['name']; ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-end">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"> <i class="icon-dashboard" aria-hidden="true"></i> <a id="dashboard_brd"
                                    style="color: #0f0f1f;
                                font-weight: 600;" role="button">Dashboard</a></li>
                            <!-- <li class="active">Widgets</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.breadcrumbs-->
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="fa fa-tasks text-primary"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">
                                            <?php echo $_SESSION ['serviceCount']; ?>
                                        </span></div>
                                    <div class="stat-heading">Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-browser text-success border-warning"></i>
                            </div>
                            <div class="stat-content ">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">
                                            <?php echo $_SESSION ['runningCount'];?>
                                        </span></div>
                                    <div class="stat-heading">Running</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="fa fa-stop-circle-o text-warning"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">
                                            <?php echo $_SESSION ['stoppedCount']; ?>
                                        </span></div>
                                    <div class="stat-heading">Stopped</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-check"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">
                                            <?php echo $_SESSION ['activateCount']; ?>
                                        </span></div>
                                    <div class="stat-heading">activated</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title box-title">We are providing this application for you</h4>
                        <div class="card-content">
                            <div class="todo-list">
                                <div class="tdl-holder">
                                    <div class="tdl-content">
                                        <ul>
                                            <li>
                                                <label>
                                                    <i class="check-box"></i><span>Pharmacy Management
                                                        System Application</span>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <i class="check-box"></i><span>Sales Application</span>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <i class="check-box"></i><span>Purchase
                                                        Application</span>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <i class="check-box"></i><span>Accounting Management
                                                        Applicatin</span>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>

                                            <li>
                                                <label>
                                                    <i class="check-box"></i><span>Software as per your
                                                        requirement</span>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- /.todo-list -->
                        </div>
                    </div> <!-- /.card-body -->
                </div><!-- /.card -->
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="py-5">
                            <span class="fa fa-check-circle" style="font-size: 80px; color: #ed502e;"></span>

                            <h5><strong>Your service is running smoothly </strong></h5>
                            <p><strong>
                                    No issues were found </strong></p>
                        </div>
                    </div> <!-- /.card-body -->
                </div><!-- /.card -->
            </div>
        </div>
        <!-- /Widgets -->

    </div>
    <!-- .animated -->
</div>
<!-- /.content -->

<script>
    $(".stat-widget-five").click(function () {
        $("#servies_tab").trigger("click");

    });

    $("#dashboard_brd").click(function (e) {
        $("#dashboard_tab").trigger("click");

    });
</script>