<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require "connection.php";  

// include("connection.php");  

if (isset($_GET['serachEmail'])){
  
    $email  = $_GET["serachEmail"];
    serachEmail($email);   //   Calling search Email Address function
}

function serachEmail($email){
    
    //  Searching email id in database :) 

    require "connection.php";  
    $record = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', 
    array(array(array('email', '=', $email))), array('fields'=>array('id','name','email'), 'limit'=>1));
    if (count($record) === 0) {
            echo 0;
 
    }else{
        foreach ($record as $r){
            $_SESSION['user_id'] = $r['id'];
            $_SESSION['email'] = $r['email'];
            sendOTP($email);  // calling sendOTP method
    
        }
    }
}
    
function sendOTP($email){

    //  Generate OTP : 

    $otp = rand(0,999999);
    $_SESSION['otp']= $otp;

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
        $mail->addAddress($email, 'Ritesh');
        
        $mail->isHTML(true);								
        $mail->Subject = 'Subject';
        $mail->Body = 'HTML message body in <b>'.$otp.'</b> ';
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send(); 
        echo "<p class='text-dark'> Please check ". $email ." ! </p>";
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


// Reset the old password :)

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
    //  collection all values 

    $otp            = $_POST["otp"];
    $newPassword    = $_POST["password"];
    $pass_hash      = password_hash($newPassword, PASSWORD_DEFAULT);
    
    if($otp == $_SESSION['otp']){
        
        // set the new password
        $models->execute_kw($db, $uid, $password, 'customer.details', 'write', array(array((int)$_SESSION['user_id']), array('password'=>$pass_hash)));
        header( "refresh:5;url=./login.php" );
        echo 1;
    
    }else{
        echo "Invalid OTP";
    }       
}

?>