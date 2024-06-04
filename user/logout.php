<?php
    session_start();
    
    $_SESSION = array();
    
    session_destroy();
    
    $msg = array('status' => 'Logout Successfully');
    echo json_encode($msg);
    http_response_code(200);
?>
