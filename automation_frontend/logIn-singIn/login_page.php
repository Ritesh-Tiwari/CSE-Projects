<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    // CSRF token is invalid, reject the request
    echo "Something went wrong please reload the page.";
  
  }else{
  
    $username   = $_POST['username'];
    $pass       = $_POST['pass'];
    
    // search user is avilable or not
    $record = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', array(array("|", array('username', '=', $username),
      array('phone','=', $username))),
     array('fields'=>array('id','name','username','password', 'phone','email'), 'limit'=>1));
    if (count($record) === 0) {
       echo "We were unable to log you in. Please check your username and password and try again.";
  
      }else{
                 
        foreach ($record as $r){
          if (password_verify($pass, $r['password'])) {

            $_SESSION['id']         = (int)$r['id'];
            $_SESSION['name']       = $r['name'];
            $_SESSION['username']   = $r['username'];
            $_SESSION['phone']      = $r['phone'];
            $_SESSION['email']      = $r['email'];
            echo 1;
          }else{
            echo "We were unable to log you in. Please check your username and password and try again.";
          }
        }
     }
  }     
}
?>
