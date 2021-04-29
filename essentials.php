<?php

$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test";

function connect(){
    global $server;
    global $db_user;
    global $db_pass;
    global $db_name;
    return mysqli_connect($server, $db_user, $db_pass, $db_name);
}

?>