<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bca2081";
$connectionstring=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$connectionstring){
    die("Database connection failed");
}

$name="YouZen Poudel";
$psw="loveme";

// $sql="INSERT INTO TABLE-NAME(COLUMNS) VALUES(PASSING VALUES)"
$sql="INSERT INTO userdata(username,userpassword)VALUES('$name','$psw')";
$response=mysqli_query($connectionstring,$sql);
if($response){
    echo"Data Added sucessfully";
}
else{
    echo"Failed to add data";
}

?>