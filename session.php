<?php
session_start();

// how to set session 
// $_SESSION['username']="dan bahadur Adhikari";
//how to modify session
$_SESSION['username']="Kushal ";
// now i am destroying the session;
session_destroy();
?>