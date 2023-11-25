<?php

session_start();
include("connection.php");
$a = $models->execute_kw($db, $uid, $password,'customer.services', 'action_launch_service',array(array(14)));

// if($a!="ok"){
//     print_r($a);
//     print("Something has gone wrong. Please try again....");
// }else{
//     print("your service is ready.");
// }
print_r($a);
?>