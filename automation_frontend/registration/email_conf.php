<?
include("connection.php"); 
$email_ids = $models->execute_kw($db, $uid, $password,
    'ir.mail_server', 'search',
    array(array()),
    array('limit'=>1));
$email_records = $models->execute_kw($db, $uid, $password,
    'ir.mail_server', 'read',
    array($email_ids),
    array('fields'=>array('smtp_user', 'smtp_pass')));

foreach($email_records as $data){
    $smtp_user = $data['smtp_user'];
    $smtp_pass = $data['smtp_pass'];
}

?>