<?php
session_start();
$_SESSION = array();
session_destroy();
header("location: ../html/login.html"); // Update the path if needed
?>
