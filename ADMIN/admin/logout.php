<?php
session_start();
session_destroy();
$_SESSION = array();
header("Location: ../../LOGIN/log/login.html");

?>
