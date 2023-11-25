<?php 
include('cron.php');
?>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>System Checking</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <style>
    body {
        font-family: "Open Sans", sans-serif;
    }
    </style>

</head>

<body style="background-color: black;">
    <section>
        <h1 style="text-align: center; color: #fff ; margin-top: 50px; font-family: 'Times New Roman', Times, serif;">
            Scheduled Actions Checking </h1>
        <div class="clock-outer">
            <div class="clock-inner">
                <div class="mins-box">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="clock-hands-box">
                    <span class="hour-hand"></span>
                    <span class="min-hand"></span>
                    <span class="sec-hand"></span>
                </div>
                <div class="center-dot"></div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            var secHandPosDeg = 360 / 60;
            var minHandPosDeg = 360 / 60;
            var hourHandPosDeg = 360 / 12;

            var time = new Date();
            var currentSecHand = time.getSeconds();
            var currentMinHand = time.getMinutes();
            var currentHouHand = time.getHours();

            setHandPosition(currentSecHand, currentMinHand, currentHouHand);
            startMoving();

            function setHandPosition(secDeg, minDeg, hovDeg) {
                var remainHovDeg = hourHandPosDeg * hovDeg + minDeg * 0.5;
                $(".clock-hands-box .sec-hand").css(
                    "transform",
                    "rotate(" + secHandPosDeg * secDeg + "deg)"
                );
                $(".clock-hands-box .min-hand").css(
                    "transform",
                    "rotate(" + minHandPosDeg * minDeg + "deg)"
                );
                $(".clock-hands-box .hour-hand").css(
                    "transform",
                    "rotate(" + remainHovDeg + "deg)"
                );
            }

            function startMoving() {
                var currentSec = currentSecHand;
                var currentMin = currentMinHand;
                var currentHov = currentHouHand * hourHandPosDeg + currentMinHand * 0.5;
                setInterval(function() {
                    var nowTime = new Date();

                    currentSec += 1;
                    $(".clock-hands-box .sec-hand").css(
                        "transform",
                        "rotate(" + currentSec * secHandPosDeg + "deg)"
                    );

                    if (nowTime.getSeconds() == 0) {
                        currentMin += 1;
                        $(".clock-hands-box .min-hand").css(
                            "transform",
                            "rotate(" + currentMin * minHandPosDeg + "deg)"
                        );

                        currentHov += 0.5;
                        $(".clock-hands-box .hour-hand").css(
                            "transform",
                            "rotate(" + currentHov + "deg)"
                        );
                    }
                }, 1000);
            }
        });
        </script>
    </section>

    <section style="min-height: 70vh;">
        <div class="container-fluid">

            <h4 class="text-danger my-3">
                <strong>Overdue : </strong> Cron Jobs <br>
            </h4>

            <table>
                <tbody id="cron_tbody">
                    <?php overdue_cron(); ?>
                </tbody>
            </table>

        </div>
    </section>

    <!-- Scheduled Actions Lists -->
    <section>
        <div class="container">

            <div class="row">
                <h4 class="text-center" style="color:#c0392b">Scheduled Actions Lists</h4>
                <div class="col-12">

                    <table class="table table-bordered text-light">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                
                                <th scope="col">Last Call</th>
                                <th scope="col">Nextcall</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             cron_details()
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </section>

    <script>
    // CALL RUN MANUALLY FUNCTION
    $(document).ready(function() {
        $("#cron_tbody").on("click", "#call_cron", function() {
            let id = $(this).attr("data-sid");
            $.ajax({
                type: 'POST',
                url: 'cron.php',
                data: {
                    function_name: 'run_Manually',
                    id: id
                },
                success: function(response) {
                    alert(response); // Display the response from PHP
                    location.reload();
                }
            });

        });
    });
    </script>


</body>

</html>