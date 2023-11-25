<?php
/* file : /etc/php/7.2/fpm/php-fpm.conf
    i have change this file and added username, password, database, localhost value

*/
require 'Encryption.php';

// Set a secret key
$KEY   = 'avcdev-odoo-rtiwari';
$url        = $_ENV['ODOO_HOST'];
$username   = $_ENV['ODOO_USERNAME'];
$db         = $_ENV['ODOO_DATABASE'];
$enc_password   = $_ENV['ODOO_PASSWORD'];


$password = Encryption::Decode($enc_password, $KEY);
$url_auth   = $url . '/xmlrpc/2/common';
$url_exec   = $url . '/xmlrpc/2/object';


// Ripcord can be cloned from https://github.com/poef/ripcord
require_once('../ripcord/ripcord.php');

// Checking if backend server is connected
try{
    $common = ripcord::client($url_auth);
    $odoo_version = $common->version();
   
    // Connecting Database and Login.
    $uid = $common->authenticate($db, $username, $password, array());
    if ($uid==2) {
    $models = ripcord::client($url_exec);
    }
    else{
        echo "Authentication failed";
    }
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    echo "<h4> Causes of errors : </h4>";
    echo "<li>Please check that the backend server is running. </li>";
    echo "<li>Please check that your backend server url is correct.</li>";
    echo "<li>Some things are going wrong with the backend server, please fix it.";
  }

?>