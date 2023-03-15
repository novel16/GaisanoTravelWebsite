<?php
session_start();
$user_name = $_SESSION['user_name'];

if(!isset($_SESSION['user_name'])){

  header('location:../index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel System - Details</title>
    <link rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../style/style.css">
    <!-- bootstrap from the folder -->
  <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <!-- para sa datatables -->
    <link rel="stylesheet" href="DataTables/datatable/css/jquery.dataTables.min.css">
    <script src="DataTables/datatable/js/jquery.dataTables.min.js"></script>
    <script src="DataTables/datatable/js/dataTables.bootstrap4.min.js"></script>
    

    <!-- table -->
    <link rel="stylesheet" href="../DataTables/datatables.min.css">

	<link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">


  <!-- new design -->
  <script src="../design/bootstrap/jquery.min.js"></script>
    <!-- <script src="../design/bootstrap/popper.min.js"></script> -->
    <!-- <script src="../design/bootstrap/bootstrap.min.js"></script> -->
    <!-- <script src="../design/bootstrap/jquery-1.11.1.min.js"></script> -->
    <!-- <link  rel="stylesheet" href="../design/bootstrap/jquery-ui.css" /> -->
    <!-- <script src="../design/bootstrap/jquery-ui.js"></script> -->
    <!-- <link rel="stylesheet" href="../design/css/bar-designed.css"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
    <link rel="stylesheet" type="text/css" href="../design/DataTables/datatables.min.css">

    
    <style type ="text/css">
      i{
        font-size: 25px;
      }
      table{
        opacity: 0.9;
      }
       footer{
      position: fixed;
      width: 100%;
      bottom: 0;
      left: 0;
      
    }
        body{
            background-color: #b0c4de;
            height: 500vh;
            
        }
        .fixed{
          top: 0;
          left: 0;
          right: 0;
          position: fixed;
          z-index:1;
        }

    </style>
</head>
<body>

<nav class = "fixed shadow p-1 bg-dark">
    <div class="nav-content ">
      <div class="logo">
       
        <b><h1 class = "text-info">TRAVEL SYSTEM - USER TRAVELS</h1></b>
      </div>
      <!-- <ul class="nav-links mt-2 ">
        <li><a href="../TF/dashboard.php" class = "text-light ">HOME</a></li>
        <li><a href="../TF/admin.php" class = "text-light">APPROVAL</a></li> 
        <li><a href="../TF/travel_info.php" class = "text-light">DETAILS</a></li>
               
        <li><a href="../TF/users.php" class = "text-light">USERS</a></li>
        <li><a href="#" class = "text-primary ml-5">Admin</a></li>
        <li><img src="../images/capital.png" class="ml-5" alt="profile_image" style = "width: 30px;"></li>

        
      </ul> -->
    </div>
  </nav>
  

<!-- <h1 class= "text-center mt-5">TRAVEL SYSTEM - DETAILS</h1> -->
<div class = "p-5 mt-5 bordered" >
    <div class = " mb-2 ">
    


      <div class = "row">
        <div class = "col-sm-8">
          
        <!-- <a href="../partials/batch_sched_add_modal.php" class="btn btn-success ml-2" data-bs-toggle = "modal" data-bs-target ="#myModal"><i class='bx bx-plus-circle fs-5 ' ></i>New</a>  -->
        <a href="../user_dash.php" class="btn btn-danger btn-sm ml-2"><i class="fa-solid fa-right-from-bracket"></i></a>
      </div> 
    </div>
    
    <hr>
    </div>
    


    
   
   <table class="table table-striped table-sm m-auto" id = "mydatatable" >
    <thead class = "bg-dark text-light text-center">
    <tr>
    <th><small>Emp_Name</small> </th>
      <th><small>Department</small></th>
      <th><small>Branch</small></th>
      <th><small>Destination</small></th>
      <!-- <th>Purpose</th> -->
      <th><small>Date From</small></th>
      <th><small>Date To</small></th>
      <!-- <th >Status</th> -->
      <th><small>Tools</small></th>
  </tr>
</thead>
<tbody >

<?php
include_once '../functions/connect.php';

$sql = "select t.id,t.emp_no, u.firstname, u.lastname, t.branch1, t.branch2, t.purpose, t.from_to, t.department, t.start_date, t.end_date, t.days_no, t.status from travel_info as t RIGHT JOIN users as u ON t.user = u.user_name WHERE t.user = '$user_name' and num_row = '1' order by t.id desc";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)){

  $status = $row['status'];
  
  if($status == "Pending"){

    $status = '<b class = "text-primary">PENDING</b>';
    $link = '../TF/user_home2.php';
    $action = 'Edit';
    
  }else if($status == "Approved"){

    $status = '<b class = "text-success">APPROVED</b>';
    $link = '../TF/approved_home2.php';
    $action = 'Print';
    // $link1 = '<a href="../TF/user_home2.php" class = "link-success btn btn-success text-light" >Details</a>';
    
  }else if($status == "Rejected"){

    $status = '<b class = "text-danger">REJECTED</b>';
    $link = '../TF/rejected_home2.php';
    $action = 'View';
  }

    ?>

<tr class = "text-center">
          <td><small><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></small></td>
          <td style = "text-transform: capitalize;"><small><?php echo $row['department'] ?></small></td>
          <td><small><?php echo $row['branch1'] ?></small></td>
          <td><small><?php echo $row['branch2'] ?></small></td>
          <!-- <td><?php echo $row['purpose'] ?></td> -->
          <td><small><?php echo $row['start_date']?></small></td>
           <td><small><?php echo $row['end_date']?></small></td>
          <!-- <td><?php echo $status ?></td> -->
          <td><small>
          <a href="../TF/update_home2.php?id=<?php echo $row['id'] ?>" class = "btn btn-success btn-sm text-light" >Edit</a> 
          <a href="../TF/view.php?id=<?php echo $row['id'] ?>" class = "btn btn-primary btn-sm text-light" >View</a> 
          <a href="../TF/approved_home2.php?id=<?php echo $row['id'] ?>" class = "btn btn-danger btn-sm  text-light" >Save As</a> 
          <!-- <a href="<?php echo $link ?>?id=<?php echo $row['id'] ?>" class = " btn btn-primary text-light" >View</a> -->
            <!-- <a href="../TF/user_home2.php?id=<?php echo $row['id'] ?>" class = "link-success btn btn-success text-light" >Details</a> -->
            <!-- <button class = "btn btn-primary">Print</button> -->
          </small></td>
        </tr>
<?php
}

?>

</tbody>
<!-- <tfoot class="text-center">
<tr class= "bg-dark text-light">
<th>Emp_Name</th>
    <th>Department</th>
    <th>Branch</th>
    <th>Destination</th>
    <th>Purpose</th>
    <th>Date From</th>
    <th>Date To</th>
    <th >Status</th>
    <th>Action</th>
  </tr>
</tfoot> -->
</table>


   </div>


  




   <script type="text/javascript" src="../design/DataTables/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#mydatatable').DataTable();

    });
  </script>

</body>

<footer>
  
<div class="  bottom-details bg-transparent p-2">

      <div class="bottom_text text-center">
      <hr>
        <small class ="text-dark justify-content-center ">© created by <span class ="text-primary">Gaisano Corp. Programmers</span>  | all right reserved</small>
        
      </div>
    </div>
</footer>


</html>