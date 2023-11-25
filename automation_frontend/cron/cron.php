<?php

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

    $dateTime = new DateTime('now', new DateTimeZone('UTC'));
    $current_time = $dateTime->format('Y-m-d H:i:s');
    foreach ($records as $overdue){
        $date = strtotime($overdue['nextcall']);
        $nextcall = date('Y-m-d H:i:s', $date);
        $cron_id = $overdue['id'];
        
        if($nextcall < $current_time)

        {
            echo '<tr style="height: 30px; line-height: 30px; margin-bottom: 10px;">';
            echo '<td><button id="call_cron" class="btn btn-outline-info mx-2" style="float: left;" data-sid='. $overdue['id'] .' >Run Manually</button> </td>';
            echo '<td><p class="text-light"> <span class="text-danger"> '.$nextcall .' </span> <br> '. $overdue["cron_name"].' </p></td>';
            echo '</tr>';
         }
    }


}

// Cron : Automation Schedule Details list
function cron_details(){
    $records = connect();
    foreach ($records as $r){
                          
        echo "<tr>";
            echo "<th scope='row'>". $r['id'] ."</th>";
            echo "<td>". $r['cron_name'] ."</td>";
            $message = ($r['active']==1) ? "Active" : "Deactive";
            echo "<td>". $message ."</td>";
            echo "<td>".$r['lastcall'],"</td>";
            

            echo "<td>". $r['nextcall'] ."</td>";                            
        echo "</tr>" ;
    }
    // print_r($records);

}

// Cron : Run Manually overdue Automation schedule program
function run_Manually($cron_id){
    include("connection.php");
    date_default_timezone_set('UTC');

    
    $models->execute_kw($db, $uid, $password,'ir.cron', 'method_direct_trigger',array(array($cron_id)));
    
    echo $cron_id." cron executed..." ;

    $records = $models->execute_kw($db, $uid, $password, 'ir.cron', 'search_read', array(array(array('id', '=', $cron_id))), 
        array('fields'=>array('name','nextcall', 'interval_number','interval_type'), 'limit'=>1));

    $interval_time = "";
    foreach ($records as $overdue){
        // $date = strtotime($overdue['nextcall']);
        $date = time();

        $interval_time .= "+" . $overdue['interval_number'] . " " . $overdue['interval_type'] . " ";
        $increasedTime = strtotime($interval_time, $date); // Add 2 minutes

        // Format the increased time as desired (e.g., as a human-readable date)
        $formattedTime = date('Y-m-d H:i:s', $increasedTime);

        echo "Current Time: " . date('Y-m-d H:i:s', $date) . "<br>";
        echo "Increased Time: " . $formattedTime. "<br><br>";
        $a= $models->execute_kw($db, $uid, $password, 'ir.cron', 'write', array(array($cron_id), array('nextcall'=>$formattedTime)));
        print_r($a);
    }    
    

}    

// call the function if run manually button pressed. 
if(isset($_POST['function_name'])){
    $id = (int) $_POST['id'];
    if((string)$_POST['function_name']=="run_Manually"){
        run_Manually($id);
    }
}
?>