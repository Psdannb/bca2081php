<?php
include "db.php";
$newpassword="iamnepali";
$newusername="chanchale";
$updatesql="UPDATE userdata SET userpassword='$newpassword',username='$newusername' WHERE userid=1";
$response=mysqli_query($connectionstring,$updatesql);
if($response){
    echo "Data updated sucessfully";
}
else{
    echo "failed to update data";
}

?>