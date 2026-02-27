<?php
include "db.php";

$readsql="SELECT * FROM userdata";
$readResponse= mysqli_query($connectionstring,$readsql);
// print_r($readResponse);
if($readResponse->num_rows>0){
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Time</th>
    </tr>

    <?php
// $data= $readResponse->fetch_assoc();
// print_r($data);
    foreach($readResponse as $userdata){
        // print_r($userdata);
        ?>
    <tr>
        <td><?php echo$userdata['userid']; ?></td>
        <td><?php echo$userdata['username']; ?></td>
        <td><?php echo$userdata['userpassword']; ?></td>
        <td><?php echo$userdata['timestamp']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
}


?>