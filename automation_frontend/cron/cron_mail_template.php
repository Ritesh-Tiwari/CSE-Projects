<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/avcdev/saserp/automation_frontend/vendor/autoload.php';
require "connection.php";  

 
function sendMail($msg){

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

        $mail->setFrom('parthadm0514@gmail.com', 'Cloud97');		
        $mail->addAddress('tiwariritesh989@gmail.com');
        // $mail->addAddress($email, 'Ritesh');
        
        $mail->isHTML(true);								
        $mail->Subject = 'Overdue Cron List';
        $mail->Body = $msg;
        // $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send(); 
        // echo "<p class='text-dark'> Please check ". $email ." ! </p>";
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

