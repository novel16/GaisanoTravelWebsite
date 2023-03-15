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

    <!-- profile.css  -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome CDN Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
     integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="../style/style.css">
    <!-- <link rel="stylesheet" href="../style/style2.css"> -->
    <link rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <style type ="text/css">

       
        table{
          opacity:0.9;
        }
    

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
<nav class = "p-4 bg-dark">
    <div class="nav-content ">
      <div class="logo">
       
        <b><h2 class = "text-info">TRAVEL SYSTEM - ADMINISTRATOR</h2></b>
      </div>
      <ul class="nav-links mt-2 ">
      <li><a href="../administrator/admin_dash.php" class = "link-dark text-light ">HOME</a></li>
        <li><a href="../administrator/admin_pending.php" class = "link-primary text-light">PENDING <b class="text-primary">[<?php echo $row1['total_pending'] ?>]</b></a></li> 
        <li><a href="../administrator/admin_approve.php" class = "link-success text-success">APPROVED <b class="text-success">[<?php echo $row['total_approve'] ?>]</b></a></li>
        <li><a href="../administrator/admin_rejected.php" class = "link-danger text-light">REJECTED <b class="text-danger">[<?php echo $row2['total_rejected'] ?>]</b></a></li>
        <li><a href="../TF/users.php" class = "link-info text-light">USERS</a></li>
               
        <!-- <li><a href="../TF/users.php" class = "link-info text-light">USERS</a></li> -->
        <li><a href="../functions/logout.php" class = "text-light ">LOGOUT</a></li>
        <!-- <li><img src="../images/capital.png" class="ml-5" alt="profile_image" style = "width: 30px;"></li> -->


        
      </ul>
    </div>
  </nav>

  


<div class = "p-5 mt-5">
    <div class = " mb-2 mt-5">
      <div class = "row">
        <div class = "col-sm-8">
          
        <!-- <a href="../partials/batch_sched_add_modal.php" class="btn btn-success" data-bs-toggle = "modal" data-bs-target ="#myModal"><i class='bx bx-plus-circle fs-5 ' ></i>New</a>  -->
       
      </div> 

    
    
    <div class = "col-sm-4">
      
      <div>  
       
        <!-- <input type="text" class = "form-control" name = "search" placeholder = "Search Here...." > -->
      </div>
    
    
    </div>
    
    </div>
    </div>
    


    
   
   <table class="table table-striped table-sm m-auto " id= "mydatatable">
    <thead class = "bg-dark text-light text-center">
  <tr>
  <th>Emp_Name</th>
    <th>Department</th>
    <th>Branch</th>
    <th>Destination</th>
    <!-- <th>Purpose</th> -->
    <th>Date From</th>
    <th>Date To</th>
    <th >Status</th>
    <!-- <th>Action</th> -->
    <!-- <th>Action</th> -->
  </tr>
</thead>
<tbody >

<?php
include_once '../functions/connect.php';

$sql = "select t.id,t.emp_no, u.firstname, u.lastname, t.branch1, t.branch2, t.purpose, t.from_to, t.department, t.start_date, t.end_date, t.days_no, t.status from travel_info as t INNER JOIN users as u ON t.user = u.user_name WHERE status = 'Approved' and num_row='1'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    ?>

<tr class = "text-center">
<td><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></td>
          <td><?php echo $row['department'] ?></td>
          <td><?php echo $row['branch1'] ?></td>
          <td><?php echo $row['branch2'] ?></td>
          <!-- <td><?php echo $row['purpose'] ?></td> -->
          <td><?php echo $row['start_date']?></td>
           <td><?php echo $row['end_date']?></td>
          <!-- <td><?php echo $row['days_no'] ?></td> -->
          <td class="text-success" style = "text-transform:uppercase;"><b><?php echo $row['status'] ?></b></td>
          <!-- <td>
            <a href="../TF/profile.php?id=<?php echo $row['id'] ?>" class = "link-success btn btn-success text-light" data-bs-toggle = "modal" data-bs-target ="#meModal">Approve</a>
            <button class = "btn btn-danger">Reject</button>
          </td> -->
        </tr>
<?php
}
?>

</tbody>

</table>

   </div>


   <?php include "../includes/script.php"; ?>
</body>
<footer>
<div class="bottom-details bg-dark p-2">
      <div class="bottom_text text-center">
        <h6 class ="text-light justify-content-center">©All Right Reserved. Created By Gaisano Corp. Programmers</h6>
        
      </div>
    </div>
</footer>

</html>