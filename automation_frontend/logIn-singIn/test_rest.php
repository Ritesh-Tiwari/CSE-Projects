<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("connection.php");  
require '../vendor/autoload.php';

// function searchEmail(){
//     if (isset($_POST['email'])) {
        
//         $email = $_POST['email'];
$email = "A@gmail.com";
        
        $record = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', 
        array(array(array('email', '=', $email))), array('fields'=>array('id','name','email'), 'limit'=>1));
        if (count($record) === 0) {
            echo "<center>Record not found. Please enter your correct details <br> <br>";
            echo "<a href='./account_search_page.html' class='text-primary'> Go Back </a></center>";    
        }else{
            echo "hello";
        }

    // }
//}

?>