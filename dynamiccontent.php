<?php
session_start();
// $username="Ram Bahadur Budathoki";
// $username="Rijan Budhathoki";

// here we have retrived data from the session 
?>

<p>Hello <?php echo $_SESSION['username']?> , How are you?</p>