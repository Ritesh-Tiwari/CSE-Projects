<?php
session_start();
include("../base/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  if($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    // CSRF token is invalid, reject the request
    echo "Something went wrong please reload the page.";
  
  }else{
  
    $full_name      = $_POST['full_name'];
    $project_name   = $_POST['project_name'];
    $password       = $_POST['password'];
    $confirm_password= $_POST['confirm_password'];

    echo $full_name;
    echo "<br>";   
    echo $project_name;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $confirm_password;
    echo "<br>";
  }             
}
?>