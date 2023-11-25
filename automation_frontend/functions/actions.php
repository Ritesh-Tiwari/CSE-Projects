<?php
  
if(isset($_POST['action']) && !empty($_POST['action'])) {
  $id = (int)$_POST['service_id'];
  $action = (string)$_POST['action'];

  switch($action){
    case "delete": 
      delete_service($id);
      break;
    case "start":
      start_service($id);
      break;
    case "stop":
      stop_service($id);
      break;
    }
}

function delete_service($id){
  include("connection.php");
  $models->execute_kw($db, $uid, $password,'customer.services', 'action_delete',array(array($id)));
    // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //   <strong>Success !</strong>  Service Deleted...
    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    // </div>';

    echo '
    <div class="toast-header">
      <strong class="me-auto">Automation</strong>
      <small class="text-muted">just now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
     <strong> Service </strong> Deleted now...
    </div>
  
';
  }

// <!-- ======= Lunch service ======= --> 

function start_service($id){
  include("connection.php");
  $models->execute_kw($db, $uid, $password,'customer.services', 'action_start',array(array($id)));

  // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  // </div>';
  echo '
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="me-auto">Automation</strong>
    <small class="text-muted">just now</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
   <strong> Service </strong> Running now...
  </div>
</div>
';

}

function stop_service($id){
  include("connection.php");
  $models->execute_kw($db, $uid, $password,'customer.services', 'action_stop',array(array($id)));
  // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //   <strong>Success !</strong>  service stopped ...
  //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  // </div> ';
  echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="me-auto">Automation</strong>
    <small class="text-muted">just now</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
   <strong> Service </strong> Stop now...
  </div>
</div>
';

  
}
?>