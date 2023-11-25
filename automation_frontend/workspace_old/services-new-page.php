<?php
session_start();
include("connection.php");
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;
?>
<style>
body {
    background-color: #C8BEE1;
}

.box {
    width: 100%;
    height: 100px;
    background-color: transparent;
    border-radius: 10px 10px 10px 10px;
    border: 2px solid rgb(238, 236, 236);
    box-shadow: 0 2px 4px 0 rgba(168, 168, 168, 0.2), 0 6px 20px 0 rgba(158, 158, 158, 0.19);
    animation: fadeInAnimation ease 4s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
}

@keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.box:hover {
    transform: scale(1.1);
    /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}



.box img {
    height: 60px;
    width: 60px;
    border-radius: 50%;
    background-color: #9479C6;
    margin-top: 20px;
    margin-left: 10px;

}

.appContent {
    padding-top: 30px;
    padding-left: 5px;
}

.appContent h5 {
    font-size: 14px;
    color: #13214e;
    margin-bottom: 15px;
    font-weight: bold;
}

.appContent h6 {
    font-size: 12px;
    font-weight: bold;
    color: #000000;
}

.right {
    padding: 10px 10px 0px 0px;
}

.right .appName {
    width: 1.3em;
    height: 1.3em;
    background-color: transparent;
    /* rgb(229, 248, 252); */

    border-radius: 50%;
    vertical-align: middle;
    border: 1px solid #585252;
    appearance: none;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
}

.appName:checked {
    background-color: #0B2341;
}

#submit_service_name {
    background-color: #132133;
    color: white;
    border-radius: 0px 5px 5px 0px;
}

#submit_service_name:hover {
    background-color: #198754;
}
</style>
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
                            <li><a id="dashboard_brd" role="button">Dashboard</a></li>
                            <li ><a id="project_brd" role="button">Projects</a></li>
                            <li class="active"><a id="new_project_brd" role="button">New Project</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">

    <div class="col-lg-10 mx-auto">
        <div class="card" style="min-height: 20vh;">
            <div class="card-header">
                <strong>Add</strong> New Project

            </div>
            <div class="card-body card-block pt-5">
                <form id="service_form" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col-12 col-md-12">
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

                            <div class="input-group text-center">
                                <input type="text" name="name" id="service_name" placeholder="Enter your project name"
                                    class="form-control form-control-lg" required>
                                <button class="btn" type="submit" name="submit" id="submit_service_name">Submit</button>
                            </div>
                            <div>
                                <br> <strong>URL :</strong>
                                <span class="text-dark" id="final_service_name">https://demo.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="row py-4">
                        <?php 

            $app_details = $models->execute_kw($db, $uid, $password, 'au.services.app', 'search_read', 
            array(array(array('id', '>',0))), array('fields' => array('id', 'name')));
            foreach($app_details as $data){
                    ?>

                        <div class="col-12 col-md-6 py-2">

                            <div class="box">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="data:image/png;base64,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"
                                            alt="" srcset="">

                                    </div>
                                    <div class="col-7">
                                        <div class="appContent">
                                            <h5>
                                                <?php echo $data['name']; ?>
                                            </h5>
                                            <h6>Rs - 199 / months</h6>

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="right">
                                            <input type="checkbox" class="appName" name="appName[]" id=""
                                                value="<?php echo $data['id']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                            $('.box').click(function(e) {
                                if (!$(e.target).is('input:checkbox')) {
                                    var $checkbox = $(this).find('input:checkbox');
                                    $checkbox.prop('checked', !$checkbox.prop('checked'));
                                }
                            });
                            </script>
                            <!-- <div class="form-check">
              <input id="my-input" class="form-check-input" type="checkbox" 
                value="<?php //echo $data['id']; ?>">
              <label for="my-input" class="form-check-label">
                <?php // echo $data['name']; ?>
              </label>
            </div> -->
                        </div>

                        <?php }?>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <span class="text-danger" id="validation_errors"></span>

            </div>

        </div>
    </div>

</div><!-- .content -->
<script>


$("#dashboard_brd").click(function (e) { 
    $("#dashboard_tab").trigger("click");
    
});

$("#project_brd").click(function (e) { 
    $("#servies_tab").trigger("click");
    
});

$("#service_name").keyup(function(e) {
    var service_name = $("#service_name").val();
    $("#final_service_name").text(service_name + ".erppr.xyz");
});

// Servce Name Validation
$("#service_form input").keydown(function(event) {
    var service_name = $("#service_name").val();
    var filter = /^[a-z\d\-_]+$/i;

    if (event.keyCode === 13) {
        event.preventDefault();
        if (service_name.length === 0) {
            $("#validation_errors").text("");
        } else if (!filter.test(service_name)) {
            $("#validation_errors").text(" Please enter valid service name.");
            $("#submit_service_name").attr("disabled", true);
            service_name.focus;
        } else {
            $("#submit_service_name").attr("disabled", false);

        }
    }
});

// Servce Name Validation 
$("#submit_service_name").click(function() {
    var service_name = $("#service_name").val();
    var filter = /^[a-z\d\-_]+$/i;

    if (service_name.length === 0) {
        $("#validation_errors").text(" ");
    } else if (!filter.test(service_name)) {
        $("#validation_errors").text(" Please enter valid service name.");
        $("#submit_service_name").attr("disabled", true);
        service_name.focus;
    } else {
        $("#submit_service_name").attr("disabled", false);

    }
});

// submit service_form 
$('#service_form').submit(function(event) {
    $("#loading").show();
    event.preventDefault(); // prevent the default form submission
    var formData = $(this).serialize(); // serialize the form data

    $.ajax({
        url: '../new_service_create.php',
        method: 'POST',
        data: formData,
        success: function(response) {
            console.log(response);
            if (response == 1) {
                $("#servies_tab").trigger("click"); // redirect to dashboard page
                $("#loading").hide();
            } else {
                $('#validation_errors').text(response); // display error message
            }

        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText, error);
            $('#validation_errors').text(error);
            // handle the error
        },
        complete: function() {
            // Hide the loading spinner
            $("#loading").hide();
        },
    });
});
</script>