<?php
session_start();
$user_name = $_SESSION['user_name'];
?>
<?php include "../TF/profile.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel System - Details</title>

    <!-- profile.css  -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome CDN Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
     integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
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

<nav class = "p-4 bg-dark">
    <div class="nav-content ">
      <div class="logo">
       
        <b><h2 class = "text-info">TRAVEL SYSTEM - DETAILS</h2></b>
      </div>
      <ul class="nav-links mt-2 ">
        <li><a href="../TF/dashboard.php" class = "text-light ">Dashboard</a></li>
        <li><a href="../TF/admin.php" class = "text-light">Approval</a></li>          
        <li><a href="../TF/users.php" class = "text-light">Users</a></li>
        <!-- <li><a href="#" class = "text-primary ml-5">Admin</a></li> -->
        <li><img src="../images/capital.png" class="ml-5" alt="profile_image" style = "width: 30px;"></li>

        
      </ul>
    </div>
  </nav>
  


<div class = "p-5 mt-5">
    <div class = " mb-2 mt-5">
      <div class = "row">
        <div class = "col-sm-8">
          
        <a href="../partials/batch_sched_add_modal.php" class="btn btn-success" data-bs-toggle = "modal" data-bs-target ="#myModal"><i class='bx bx-plus-circle fs-5 ' ></i>New</a> 
       
      </div> 

    
    
    <div class = "col-sm-4">
      
      <div>  
       
        <input type="text" class = "form-control" name = "search" placeholder = "Search Here...." >
      </div>
    
    
    </div>
    
    </div>
    </div>
    


    
   
   <table class="table table-striped table-sm m-auto ">
    <thead class = "bg-dark text-light text-center">
  <tr>
    <th>Employee No</th>
    <th>Employee Name</th>
    <th>Branch</th>
    <th>Purpose</th>
    <th>Destination</th>
    <th>Department</th>
    <th>Date</th>
    <th >No of Days</th>
    <th >Approval</th>
    <th>Action</th>
  </tr>
</thead>
<tbody >

<?php
include_once '../functions/connect.php';

$sql = "select t.emp_no, u.firstname, u.lastname, t.branch1, t.purpose, t.from_to, t.department, t.start_date, t.end_date, t.days_no, t.status from travel_info as t INNER JOIN users as u ON t.user = u.user_name";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    ?>

<tr class = "text-center">
          <td><?php echo $row['emp_no'] ?></td>
          <td><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></td>
          <td><?php echo $row['branch1'] ?></td>
          <td><?php echo $row['purpose'] ?></td>
          <td><?php echo $row['from_to'] ?></td>
          <td><?php echo $row['department'] ?></td>
          <td><?php echo $row['start_date']?> // <?php echo $row['end_date']?></td>
          <td><?php echo $row['days_no'] ?></td>
          <td><?php echo $row['status'] ?></td>
          <td>
            <a href="../TF/profile.php?id=<?php echo $row['id'] ?>" class = "link-success btn btn-success text-light" data-bs-toggle = "modal" data-bs-target ="#meModal">Approve</a>
            <button class = "btn btn-danger">Reject</button>
          </td>
        </tr>
<?php
}
?>

</tbody>
<tfoot class="text-center">
<tr class= "bg-dark text-light">
    <th>Employee No</th>
    <th>Employee Name</th>
    <th>Branch</th>
    <th>Purpose</th>
    <th>Destination</th>
    <th>Department</th>
    <th>Date</th>
    <th >No of Days</th>
    <th >Approval</th>
    <th>Action</th>
  </tr>
</tfoot>
</table>

   </div>


   <footer>
<div class="bottom-details bg-dark p-3">
      <div class="bottom_text text-center">
        <h6 class ="text-light justify-content-center">@All Right Reserved. Created By Gaisano Corp. Programmers</h6>
        
      </div>
    </div>
</footer>
</body>
</body>

</html>