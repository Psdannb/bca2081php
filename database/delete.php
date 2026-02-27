<?php
include "db.php";

$deletesql= "DELETE FROM userdata WHERE userid=3";
$response = mysqli_query($connectionstring,$deletesql);
if($response){
    echo "Data deleted sucessfully";
}
else{
    echo "Failed to delete data";
}


?>