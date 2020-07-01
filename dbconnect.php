<?php



$hosting = 'localhost';
$username = 'root';
$password = '';
$database = 'loginsys';

$dbconn = mysqli_connect($hosting, $username , $password, $database);

if($dbconn){
    echo 'db connected';
}
else{
    echo 'db not connected';
}




?>