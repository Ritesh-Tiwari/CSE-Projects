
<?php
require_once('../manifest.php');
// $url        = url;
// $url_auth   = $url . '/xmlrpc/2/common';
// $url_exec   = $url . '/xmlrpc/2/object';

// $db         = db;
// $username   = username;
// $password   = password;

$url        = "http://vps191481.vps.ovh.ca:8069";
$db         = "sas01";
$username   = "admin";
$password   = "admin";
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