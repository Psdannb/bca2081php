<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bca2081";
$connectionstring=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$connectionstring){
    die("Database connection failed");
}



?>