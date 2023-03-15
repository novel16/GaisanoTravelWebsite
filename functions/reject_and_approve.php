<?php
include_once 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM `travel_info` WHERE `id` = '$id'";
$result1 = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result1);

$account_staff = $row['account_staff'];
$branch1 = $row['branch1'];
$start_date = $row['start_date'];
$end_date = $row['end_date'];

// query para sa pag approve
$sql = "UPDATE `travel_info` SET `status` = 'Rejected' WHERE account_staff = '$account_staff' and branch1 = '$branch1' and start_date = '$start_date' and end_date ='$end_date'";

$result = mysqli_query($con, $sql);

if($result){
    echo '200';
   
}

?>