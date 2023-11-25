<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("connection.php");  
require '../vendor/autoload.php';

$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      $username   = $_POST['username'];
      
      // search user is avilable or not
      $record = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', array(array("|","|", array('username', '=', $username),
        array('phone','=', $username), array('email','=', $username))),
       array('fields'=>array('id','name','email'), 'limit'=>1));
      if (count($record) === 0) {
         echo "<center>Record not found. Please enter your correct details <br> <br>";
         echo "<a href='./account_search_page.html' class='text-primary'> Go Back </a></center>";
    
        }else{
            foreach ($record as $r){
            $_SESSION['user_id'] = $r['id'];
            $_SESSION['email'] = $r['email'];
            
            $otp = rand(0,999999);
            $_SESSION['otp']= $otp;
    
            // Get the current timestamp
            $currentTimestamp = time();

            // Set the expiration time (2 minutes = 120 seconds)
            $_SESSION['expirationTime'] = $currentTimestamp + 120;
    

            $mail = new PHPMailer(true);

              try {
                  // $mail->SMTPDebug = 2;									
                  $mail->isSMTP();										
                  $mail->Host	 = 'smtp.gmail.com';				
                  $mail->SMTPAuth = true;							
                  $mail->Username = 'parthadm0514@gmail.com';				
                  $mail->Password = 'tpznbekusqvfeyvs';					
                  $mail->SMTPSecure = 'tls';							
                  $mail->Port	 = 587;

                  $mail->setFrom('parthadm0514@gmail.com', 'Automtaton');		
                  // $mail->addAddress('tiwariritesh989@gmail.com');
                  $mail->addAddress($_SESSION['email'], 'Ritesh');
                  
                  $mail->isHTML(true);								
                  $mail->Subject = 'Subject';
                  $mail->Body = 'HTML message body in <b>'.$otp.'</b> ';
                  $mail->AltBody = 'Body in plain text for non-HTML mail clients';
                  $mail->send();
                
              } catch (Exception $e) {
                  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
              }

            }
            ?>
<form id="form_change_password">
    <div class="card-header bg-transparent border-dark text-bold">
        <h5> <strong>Change Password</strong></h5>
    </div>
    <div class="card-body text-dark">
        <p class="card-text">Please enter the OTP you received at <?php echo $_SESSION['email'] ?>
        </p>
        <input type="text" id="otp" name="otp" class="form-control form-control-lg"
            placeholder="One Time Password" autofocus required />
      
        <p class="card-text">New Password.</p>
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
        <input type="password" id="password" name="password" class="form-control form-control-lg"
            placeholder="New password" autofocus required /><br>
        <span class="badge bg-warning text-dark" id="password_error"></span>
        <div>
            <span style="float:left">Don't received the code ? </span><a
                href="account_verification.php?resendOtp">Resend</a>
            <span style="float:right" id="timer">02:00 minutes</span>
        </div>

    </div>
    <div class="card-footer bg-transparent border-dark my-3">
        <button type="reset" class="btn btn-dark">Cancel</button>
        <button type="submit" id="submitBtn" class="btn btn-primary"> Submit</button>

    </div>
</form>
<?php
        }
    }
  

?>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/validation.js"></script>
<script>
$('#form_change_password').submit(function(event) {
    $("#loading").show();
    event.preventDefault(); // prevent the default form submission
    var formData = $(this).serialize(); // serialize the form data

    $.ajax({
        url: 'forgotten_password.php',
        method: 'POST',
        data: formData,
        success: function(response) {
            console.log(response);
            if(response == 1){
              alert("Password changed successfully...")
              window.location.href = './login.php';
            }else{
              alert(response);
                $("#otp").val("");
            
            }
            
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText, error);
            $('#errorMsg').text(error);
            // handle the error
            $('.notification').show();
            setTimeout(function() {
                $(".notification").hide();
            }, 20000);
        },
        complete: function() {
            // Hide the loading spinner
            $("#loading").hide();
        },
    });
});


$(document).ready(function() {
                    var duration = 120; // 2 minutes in seconds
                    var timerDisplay = $('#timer');

                    var interval = setInterval(function() {
                        var minutes = Math.floor(duration / 60);
                        var seconds = duration % 60;

                        // Add leading zero if necessary
                        var minutesDisplay = (minutes < 10 ? '0' : '') + minutes;
                        var secondsDisplay = (seconds < 10 ? '0' : '') + seconds;

                        // Update the timer display
                        timerDisplay.text(minutesDisplay + ':' + secondsDisplay + ' minutes');

                        // Check if the timer has reached 0
                        if (duration === 0) {
                            clearInterval(interval);
                            // Timer has finished, perform any actions needed here
                            alert('Time is up!');
                        }

                        duration--; // Decrease the duration by 1 second
                    }, 1000); // Update every 1 second
                });
</script>