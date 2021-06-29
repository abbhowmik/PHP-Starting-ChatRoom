<?php

include '_navbar.php';

$room = $_POST['roomName'];
if(strlen($room) > 10)
{
    $message = "Please choose a name between 2 to 10 character";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'")';
    echo 'window.location = "http://locahost/Php_ChatRoom"';
    echo '</script>';
    
}



?>