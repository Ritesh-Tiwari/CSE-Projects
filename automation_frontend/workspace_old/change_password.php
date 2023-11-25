<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // CSRF token is invalid, reject the request
        echo "Something went wrong please reload the page.";
    }else{
          
        $username   = $_POST['username'];
        $pass       = $_POST['password'];
        $newpassword= $_POST['new_password'];
        $pass_hash  = password_hash($newpassword, PASSWORD_DEFAULT);       


        // search user is avilable or not
        $record = $models->execute_kw($db, $uid, $password, 'customer.details', 'search_read', array(array("|", array('username', '=', $username),
        array('phone','=', $username))),
        array('fields'=>array('id','name','username','password', 'phone','email'), 'limit'=>1));
        if (count($record) === 0) {
        echo "Please check your username and password and try again.";

        }else{
                
            foreach ($record as $r){
                if (password_verify($pass, $r['password'])) {
                    $models->execute_kw($db, $uid, $password, 'customer.details', 'write', array(array((int)$_SESSION['id']), array('password'=>$pass_hash)));
                    echo "Password changed successfully...";
                    header( "refresh:5;url=../logIn-singIn/logout.php" );
                
                }else{
                echo "Please check your username and password and try again.";
                }
            }
        }
    }
 }
 ?>