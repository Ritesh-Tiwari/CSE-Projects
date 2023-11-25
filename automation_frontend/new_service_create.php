<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  
  if($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    // CSRF token is invalid, reject the request
    echo "Something went wrong please reload the page.";
  
  }else{
    $service_name   = $_POST['project_name'];
    $apps           = 1;
    
    $service_url    = "https://$service_name.erpops.xyz";
    
    $record         = $models->execute_kw($db, $uid, $password, 'customer.services', 'search_read', 
    array(array(array('service_name', '=', $service_name))), array('fields'=>array('id'), 'limit'=>1));
    
    if (empty($record)) {
      
      // Create new service
      $n_id=$models->execute_kw($db, $uid, $password, 'customer.services', 'create', 
      array(array('service_name'=>$service_name,'customer_id'=>$_SESSION['id'])));
      
      // add app name in database
      
        $models->execute_kw($db, $uid, $password, 'customer.services.line', 'create', array(array('service_id'=>$n_id,'app_id'=>$apps)));
     
      $launch = $models->execute_kw($db, $uid, $password,'customer.services', 'action_launch_service',array(array($n_id)));
      
      if($launch!="True"){
        print("Something has gone wrong. Please try again....");
        // print_r($launch);
      }else{
        $_SESSION['new_service_msg'] ="<span ='text-success'>Congratulations new service $service_name created </span>";
        echo 1;
  
      }
      
    }else{      
        echo "This name is already taken by someone.";
    }
  }
}

?>