<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    if($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
      // CSRF token is invalid, reject the request
      echo "Something went wrong please reload the page.";
    }else{

    $otp = $_POST['otp'];
        
    $newPassword   = $_POST['password'];
    $pass_hash  = password_hash($newPassword, PASSWORD_DEFAULT);
    $currentTimestamp = time();
    if ($_SESSION['expirationTime'] >= $currentTimestamp){

      if($otp == $_SESSION['otp']){

        $models->execute_kw($db, $uid, $password, 'customer.details', 'write', array(array((int)$_SESSION['user_id']), array('password'=>$pass_hash)));
        echo 1 ;
        // header( "refresh:5;url=./login.php" );
    
      }else{
        echo "Invalid OTP";
      }       
    }else{
      echo "Sorry OTP Expair";
    }
  }
}
  

?>