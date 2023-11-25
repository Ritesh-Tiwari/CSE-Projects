<?php
session_start();
include("connection.php");
$service_details = $models->execute_kw($db, $uid, $password, 'customer.services', 'search_read', array(array(array('customer_id', '=', $_SESSION['id']))), array('fields' => array('id', 'service_name','service_url', 'odoo_cont_name', 'db_cont_name', 'state')));
echo json_encode($service_details);      
?>
