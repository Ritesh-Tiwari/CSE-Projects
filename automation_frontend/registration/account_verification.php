<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("connection.php");  
require '../vendor/autoload.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // CSRF token is invalid, reject the request
        echo "Something went wrong please reload the page.";
    
    }else{
        //  collect value of input field
        $fname                  = $_POST['fname'];
        $lname                  = $_POST['lname'];   
        $_SESSION['phone']      = $_POST['phone'];
        $_SESSION['user_id']    = $_POST['user_id'];
        $_SESSION['email']      = $_POST['email'];
        $pass                   = $_POST['password'];
        $_SESSION['pass_hash']  = password_hash($pass, PASSWORD_DEFAULT);
        $_SESSION['fullName']   = $fname." " . $lname;
                  
        /*
        *   Check whether username, phone, email address is registered or not
        *   Store all data in session
        *   Generate an OTP and send mail to user's email id and verify whether email is active or not
        */

        $check_username = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', array(array(array('username', '=', $_SESSION['user_id']))), array('fields'=>array('id'), 'limit'=>1));
        if (empty($check_username)) {

            $check_email = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', array(array(array('email', '=', $_SESSION['email']))), array('fields'=>array('id'), 'limit'=>1));
            if (empty($check_email)) {

                $check_ph = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', array(array(array('phone', '=', $_SESSION['phone']))), array('fields'=>array('id'), 'limit'=>1));
                if (empty($check_ph)) {
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
                        // header('Location: otp_form.php');
                        echo 1;

                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }else{
    
                    echo $_SESSION['phone'].' This Phone Number is registered please try another Phone Number.';
                }
        
            }else{
                echo $_SESSION['email'].' This email address is registered please try another email address.';
            }
        }else{
           
            echo $_SESSION['user_id'].' This username is not available. Please try another one.';
        }
    }


}
if(isset($_GET['resendOtp'])){
    sendOtp();
    header('Location: otp_form.php');

}


function sendOtp(){

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
