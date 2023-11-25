<?php
include("connection.php");  
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // CSRF token is invalid, reject the request
        echo "Something went wrong please reload the page.";
    
    }else{
        
        // collect value of input field
        $otp = $_POST['otp'];
        $currentTimestamp = time();
        if ($_SESSION['expirationTime'] >= $currentTimestamp){

            if ($_SESSION['otp'] == $otp) {
                $n_id=$models->execute_kw($db, $uid, $password, 'customer.details', 'create', 
                array(array('name'=>$_SESSION['fullName'],'phone'=>$_SESSION['phone'],'email'=>$_SESSION['email'],
                'username'=>$_SESSION['user_id'],'password'=>$_SESSION['pass_hash'])));
                $_SESSION['id']=(int)$n_id;
                // header('Location: msg_box.html');
                echo 1;
            }
            else{
                echo "Invalid OTP !";
                
            }
        }else{
            echo "Sorry OTP Expair";
        }   
    }
}

?>