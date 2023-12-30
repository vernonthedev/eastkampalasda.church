<?php
//    first connect to the database
include'config.php';
//start the session
session_start();
//end the session
session_unset();
//delete the session from the browser
session_destroy();
//redirect to the login page
echo '<script> window.location.href = "login.php";</script>';
?>