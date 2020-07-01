
<?php

$hosting = 'localhost';
$username = 'root';
$password = '';
$database = 'loginsys';

$dbconn = "('hosting', 'username', '', 'loginsys')";

if($dbconn){
    echo 'db connected';
}
else{
    echo 'db not connected';
}

?>