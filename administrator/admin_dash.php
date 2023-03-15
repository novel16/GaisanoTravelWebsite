<?php
include_once '../functions/connect.php';
session_start();

$user_name = $_SESSION['user_name'];

// query para total approve
$sql = "select count(*) as total_approve from travel_info where status = 'Approved' and num_row = '1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// query para sa total pending
$sql1 = "select count(*) as total_pending from travel_info where status = 'Pending' and num_row = '1'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($result1);

// query para sa total rejected
$sql2 = "select count(*) as total_rejected from travel_info where status = 'Rejected' and num_row = '1'";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($result2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel System - Details</title>
    <!-- bootstrap from the folder -->
  <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome CDN Link -->

     <!-- profile.css -->
     <link rel="stylesheet" href="../style/profile.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
     integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <style type ="text/css">

       
   
    

       footer{
      position: fixed;
      width: 100%;
      bottom: 0;
      left: 0;
    }
        body{
            background-color: #b0c4de;
        }

    </style>
</head>
<body>

<nav class = "p-1 shadow bg-dark">
    <div class="nav-content ">
      <div class="logo">
       
        <b><h2 class = "text-info">TRAVEL SYSTEM - ADMINISTRATOR</h2></b>
      </div>
      <ul class="nav-links mt-2 ">
      <li><a href="../administrator/admin_dash.php" class = "link-warning text-warning ">HOME</a></li>
        <li><a href="../administrator/admin_pending.php" class = "link-primary text-light">TRAVEL INFORMATION</a></li> 
        <!-- <li><a href="../administrator/admin_approve.php" class = "link-success text-light">APPROVED <b class="text-success">[<?php echo $row['total_approve'] ?>]</b></a></li>
        <li><a href="../administrator/admin_rejected.php" class = "link-danger text-light">REJECTED <b class="text-danger">[<?php echo $row2['total_rejected'] ?>]</b></a></li> -->
        <li><a href="../TF/users.php" class = "link-info text-light">USERS</a></li>
        <!-- <li><a href="../TF/users.php" class = "link-info text-light">USERS</a></li> -->
        <li><a href="../functions/logout.php" class = "link-info text-light ">LOGOUT</a></li>
        <!-- <li><img src="../images/capital.png" class="ml-5" alt="profile_image" style = "width: 30px;"></li> -->

        
      </ul>
    </div>
  </nav>
  



  
</body>
<footer>
    <div class="bottom-details pb-2">

      <div class="bottom_text text-center">
        <hr>
        <small class ="text-dark justify-content-center">© created by <span class= "text-primary">Gaisano Corp. Programmers</span>  | all right reserved</small>
        
      </div>
    </div>
</footer>


</html>