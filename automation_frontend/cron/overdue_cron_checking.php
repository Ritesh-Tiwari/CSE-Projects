<?php

$file = dirname(__FILE__) .'/output.txt';
$data = "Checked cron schedule at ". date('d/m/y H:i:s')."\n";

require 'cron_mail_template.php';

// Cron : Read Cron Model Data
function connect(){
    include("connection.php");
    $ids = $models->execute_kw($db, $uid, $password, 'ir.cron', 'search', array(array(array('active', '=', true))));
    $records = $models->execute_kw($db, $uid, $password, 'ir.cron', 'read', array($ids));
    return $records;
        
}
// Cron : Overdue Automatin Schedule Program list 
function overdue_cron(){    

    $records = connect();
    $message='<h3> These cron jobs have been stopped. (cron)</h3>
    <table>';
    $is_overdue = false;
    $dateTime = new DateTime('now', new DateTimeZone('UTC'));
    $current_time = $dateTime->format('Y-m-d H:i:s');
    foreach ($records as $overdue){
        $date = strtotime($overdue['nextcall']);
        $nextcall = date('Y-m-d H:i:s', $date);
        $cron_id = $overdue['id'];
        
        if($nextcall < $current_time)

        {
            $is_overdue=true;
            $message .= '<tr>'.
            '<td><p>  ID : '. $overdue["id"] .' - Cron Name : '. $overdue["cron_name"].'<span style="color:red;"> - NextCall : '.$nextcall .'</span> </p></td>';
            echo '<td><button id="call_cron" class="btn btn-outline-info mx-2" style="float: left;" data-sid='. $overdue['id'] .' >Run Manually</button> </td>';
            echo '<td><p class="text-light"> <span class="text-danger"> '.$nextcall .' </span> <br> '. $overdue["cron_name"].' </p></td>';
            echo '</tr>';
         }else{
            $is_overdue = false;
         }
    }
    $message .='</table>
    <a href="http://automation.io/cron/"><b>Start manually by clicking this link</b></a>
    ';

    if($is_overdue){
        sendMail($message);
        echo "\n Stopped cron found. || Checked cron schedule at ". date('d/m/y H:i:s')."\n";
    }else{
        echo "\n Stopped cron none. || Checked cron schedule at ". date('d/m/y H:i:s')."\n";
    }
}

overdue_cron();

file_put_contents($file, $data, FILE_APPEND);

?>