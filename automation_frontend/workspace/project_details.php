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
                        <h1>Sales System</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-end">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a id="dashboard_brd" href="http://automation.io/dashboard/">URL :
                                    http://automation.io/dashboard/</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="animated fadeIn">
        <div class="row">


            <div class="col-lg-10 mx-auto">
                <div class="card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-header">
                        <strong>Project </strong>Info
                    </div>
                    <div class="card-body card-block">
                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Project Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Sales System</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Owner</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Ritesh Tiwari</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="phone" class="form-control-label">Project URL</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static"> http://automation.io/workspace/</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class="form-control-label">Created At</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static"> 03/Sept/2023</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class="form-control-label">Plan Validity</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static"> 03/Sept/2024</p>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <!-- <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Edit
                        </button> -->

                    </div>
                </div>

            </div>
            <div class="col-lg-10 mx-auto">
                <div class="card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-body">

                        <h5 class="card-title">Installed Apps</h5>


                        <!-- <a class="btn" style="background: #ed502e; border: 0; padding: 10px 30px; border-radius: 4px; color: #fff; transition: 0.4s;"
                                 id ="new_service_page" role="button" >
                                    <i class="fa fa-plus" aria-hidden="true"></i> New Project</a> -->

                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>App Name</th>
                                        <th>Developer</th>
                                        <th>Install Date</th>

                                    </tr>
                                </thead>
                                <tbody id="service_tbody text-capitalize">
                                    <tr>
                                        <td class="serial">1.</td>
                                        <td>
                                            <p class="name">Discuss</p>
                                        </td>
                                        <td>
                                            <p><b>Odoo</b></p>
                                        </td>
                                        <td> 03/Sept/2023</td>
                                    </tr>
                                    <tr>
                                        <td class="serial">2.</td>
                                        <td>
                                            <p class="name">Sales</p>
                                        </td>
                                        <td>
                                            <p><b>Odoo</b></p>
                                        </td>
                                        <td> 03/Sept/2023</td>
                                    </tr>
                                    <tr>
                                        <td class="serial">3.</td>
                                        <td>
                                            <p class="name">Purchase</p>
                                        </td>
                                        <td>
                                            <p><b>Odoo</b></p>
                                        </td>
                                        <td> 03/Sept/2023</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.table-stats -->
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
    <!-- .animated -->
</div>
<!-- .content -->

<script>
$("#dashboard_brd").click(function(e) {
    $("#dashboard_tab").trigger("click");

});

$("#account_brd").click(function(e) {
    $("#account_info_tab").trigger("click");

});
</script>