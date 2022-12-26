<?php
define('DB_SERVER','localhost');
define('DB_username','root');
define('DB_password','');
define('DB_name','msa travel');

$link = mysqli_connect(DB_SERVER,DB_username,DB_password,DB_name);

if($link === false){
    die("ERROR:could not connect.".mysqli_connect_error());
}
?>