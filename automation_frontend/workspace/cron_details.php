<?php
session_start();
require "connection.php";
include('../cron/cron.php');

?>


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
        <div class="ui-typography">
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card-body">

                                <h5 class="card-title">Scheduled Actions</h5>


                                <!-- <a class="btn" style="background: #ed502e; border: 0; padding: 10px 30px; border-radius: 4px; color: #fff; transition: 0.4s;"
                                 id ="new_service_page" role="button" >
                                    <i class="fa fa-plus" aria-hidden="true"></i> New Project</a> -->

                            </div>
                            <div class="card-body">
                                <div class="table-stats order-table ov-h">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="serial">ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Last Call</th>
                                                <th>Nextcall</th>

                                            </tr>
                                        </thead>
                                        <tbody id="service_tbody text-capitalize">


                                            <?php 
                                            $records = connect();
                                            $no = 1;
                                            foreach($records as $data){?>
                                            <tr>

                                                <td class="serial"><?php echo $data['id']; ?>.</td>
                                                <td>
                                                    <p class="name"><?php echo $data['cron_name'];?></p>
                                                </td>

                                                <td class="text-success">
                                                    <?php $message = ($data['active']==1) ? "Active" : "Deactive";
                                                    echo '<span class="badge text-success" > <b>'.$message;'</b></span>'; ?>
                                                </td>

                                                <td> <?php echo $data['lastcall'] ?></td>

                                                <td> <?php echo $data['nextcall'] ?></td>
                                            </tr>
                                            <?php $no++; }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-stats -->
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-lg-8 -->
                </div>
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<!-- .content -->


<script>
// start service button

$("#dashboard_brd").click(function(e) {
    $("#dashboard_tab").trigger("click");

});

$("#project_brd").click(function(e) {
    $("#servies_tab").trigger("click");

});

$("#service_tbody").on("click", "#startBtn", function() {
    let id = $(this).attr("data-sid");
    $("#loading").show();
    $.ajax({
        type: "POST",
        url: "../functions/actions.php",
        data: {
            service_id: id,
            action: "start"
        },
        success: function(response) {
            // console.log(response);

            $(".toast").html(response);
            $("#servies_tab").trigger("click");
            $(".toast").toast("show");
            $("#loading").hide();

        },
        error: function(xhr, status, error) {
            // Handle any errors that occurred during the request
            // console.log(error);
            $("#msg").html(error);
        },
        complete: function() {
            // Hide the loading spinner
            $("#loading").hide();
        },
    });
});
/*
 * Stop Service Process
 */
$("#service_tbody").on("click", "#stopBtn", function() {
    $("#loading").show();
    let id = $(this).attr("data-sid");
    $.ajax({
        type: "POST",
        url: "../functions/actions.php",
        data: {
            service_id: id,
            action: "stop"
        },
        // dataType: "dataType",
        success: function(response) {
            // console.log(response)
            $(".toast").html(response);
            $("#servies_tab").trigger("click");
            $(".toast").toast("show");
            $("#loading").hide();

        },
        error: function(xhr, status, error) {
            // Handle any errors that occurred during the request
            // console.log(error);
            $("#msg").html(error);
        },
        complete: function() {
            // Hide the loading spinner
            $("#loading").hide();
        },
    });
});

$("#service_tbody").on("click", "#deleteBtn", function() {
    let id = $(this).attr("data-sid");
    let text =
        "Warning ! Once your project is deleted all files and data will be lost, it cannot be restored. Are you sure you want to remove this project? ";
    if (confirm(text) == true) {
        $("#loading").show();
        $.ajax({
            type: "POST",
            url: "../functions/actions.php",
            data: {
                service_id: id,
                action: "delete"
            },
            success: function(response) {
                console.log(response);

                $(".toast").html(response);
                $("#servies_tab").trigger("click");
                $(".toast").toast("show");
                $("#loading").hide();

            },
            error: function(xhr, status, error) {
                // Handle any errors that occurred during the request
                console.log(error);
                $("#msg").html(error);
            },
            complete: function() {
                // Hide the loading spinner
                $("#loading").hide();
            },
        });
    }
});




$("#new_service_page").click(function() {
    $("#loading").show();

    $.ajax({
        type: "GET",
        url: "services-new-page.php",
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
</script>