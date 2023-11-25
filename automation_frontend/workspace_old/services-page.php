<?php
session_start();
include("connection.php");
$service_details = $models->execute_kw($db, $uid, $password, 'customer.services', 'search_read', array(array(array('customer_id', '=', $_SESSION['id']))), array('fields' => array('id', 'service_name','service_url', 'odoo_cont_name', 'db_cont_name', 'state')));
?>
<div class="breadcrumbs">
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
                            <li class="active"><a id="project_brd" role="button">Projects</a></li>
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
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-success" href="services-new-page.php" target="_blank" rel="noopener noreferrer" >
                                    <i class="fa fa-plus" aria-hidden="true"></i> New Project</a>

                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>Name</th>
                                                <th>URL</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody id="service_tbody">

                                            <?php 
                                            $no = 1;
                                            foreach($service_details as $data){?>
                                            <tr>

                                                <td class="serial"><?php echo $no; ?>.</td>
                                                <td><span class="name"><?php echo $data['service_name'];?></span></td>
                                                <td>
                                                    <a target="_blank" class="product"
                                                        href="<?php echo $data['service_url'];?>"><?php echo $data['service_url'] ?>
                                                    </a>
                                                </td>
                                                <?php switch($data['state']){
                                                    case "activated":
                                                        echo'<td> <span class="badge badge-Active">' . $data['state'] . '</span></td>
                                                        <td> <button id="startBtn" class="btn btn-success" data-sid='. $data['id'] .' type="button">Start</button></td>';
                                                        break;
                                               
                                                    case "running":
                                                        echo '<td><span class="badge badge-running">' . $data["state"] . '</span></td>';
                                                        echo '<td><button id="stopBtn" class="btn btn-secondary" data-sid='. $data['id'] .' type="button">Stop</button></td>';        
                                                        break;
                                                    case "waiting":
                                                        echo '<td><span class="badge badge-stopped">' . $data["state"] . '</span></td>';
                                                        echo '<td><button id="stopBtn" class="btn btn-secondary" data-sid='. $data['id'] .' type="button" disabled>Stop</button></td>';        
                                                        break;
                                                   
                                                    case "stopped":
                                                        echo '<td><span class="badge badge-stopped">' . $data["state"] . '</span></td>';
                                                        echo '<td><button id="startBtn" class="btn btn-success" data-sid='. $data['id'] .' type="button">Start</button></td>';        
                                                        break;
                                                   
                                                    case "deleted":
                                                        echo '<td><span class="badge badge-deleted">' . $data["state"] . '</span></td>';
                                                        echo '<td><button class="btn btn-secondary" type="button" disabled>Deleted</button></td>';        
                                                        break;
                                                   
                                                        
                                                } ?>

                                                <td>
                                                    <?php
                                                    if($data['state']=="deleted"){
                                                        echo '<button data-sid="'. $data['id']. '" id="deleteBtn" class="btn btn-light" disabled> <i class="fa fa-trash " aria-hidden="true"></i></button>';
                                                    }else{
                                                        echo '<button data-sid="'. $data['id']. '" id="deleteBtn" class="btn btn-light"> <i class="fa fa-trash " aria-hidden="true"></i></button>';
                                                    }

                                                    ?>
                                                </td>
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

$("#dashboard_brd").click(function (e) { 
    $("#dashboard_tab").trigger("click");
    
});

$("#project_brd").click(function (e) { 
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




// $("#new_service_page").click(function() {
//     $("#loading").show();
           
//     $.ajax({
//         type: "GET",
//         url: "services-new-page.php",
//         // data: "data",
//         dataType: "html",
//         success: function(response) {
//             console.log(response);            
//             localStorage.setItem('ajaxResponse', response);
//             $(".response").html(response);
//             $("#loading").hide();
//             hideMenu();
//         },
//         complete: function() {
//                 // Hide the loading spinner
//                   $("#loading").hide();
//             },
//     });
// });
</script>