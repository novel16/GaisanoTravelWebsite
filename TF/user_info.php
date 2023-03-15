<?php
include "../functions/connect.php";
session_start();
$user_name = $_SESSION['user_name'];

$sql = "select * from users where user_name = '$user_name'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

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
        }

        .menu{
          display: flex;
          flex-direction: column;
          height: 100%;
          position:fixed;
          font-size: 1rem;
          padding: 0 3rem;
          margin-left: 10%;
          border-right:2px solid #fff;
          
        }
        .menu a{
          text-decoration:none;
          line-height: 1.8;
          color: blue;
        }
        
        

    </style>
</head>
<body>

<nav class = "p-1 shadow bg-dark ">
    <div class="nav-content ">
      <div class="logo">
       
        <b><h2 class = "text-info text-center">TRAVEL SYSTEM - USER INFORMATION</h2></b>
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
  
<br><br>
<!-- <h1 class= "text-center mt-5">TRAVEL SYSTEM - DETAILS</h1> -->
<div class = "p-2  bordered" >
    <div class = " mb-2 ">
      

      <!-- <div class = "row">
        <div class = "col-sm-8">
          
        <a href="../partials/batch_sched_add_modal.php" class="btn btn-success ml-2" data-bs-toggle = "modal" data-bs-target ="#myModal"><i class='bx bx-plus-circle fs-5 ' ></i>New</a> 
        <a href="../user_dash.php" class="btn btn-danger ml-1"></i>BACK</a>
      </div> 
    </div>
    
  
    </div> -->
   </div>
    
       
    
   
<div class="padding">
   <div class = "bg-light w-25  p-4  m-auto rounded-3 shadow"   style= "opacity:0.9;">
        <div class = "">
            
        <h2 class = "text-center  text-primary" >USER PROFILE</h2>
        <hr>
        </div>
        <div class = "">
            <form action="../functions/user_info_update.php" method ="POST">

            <div class="mb-2">
                <label for="email" class="">Username</label>
                    <input type="text" readonly class="form-control" value="<?php echo $row['user_name']?>" name ="username" id="username" placeholder="" required = "required">
                </div>
            <div class="mb-2">
                <label for="username" class="">First Name</label>
                    <input type="text" class="form-control" value="<?php echo $row['firstname'] ?>" style ="text-transform: capitalize;" name ="firstname" id="username" placeholder="" required = "required">
                </div>
                <div class="mb-2">
                <label for="password" class ="">Last Name</label>
                    <input type="text" class="form-control " value="<?php echo $row['lastname'] ?>" style ="text-transform: capitalize;" name ="lastname" id="password" placeholder="" required = "required">
                </div>
                <div class="mb-2">
                <label for="username" class="">Branch</label>
                    <input type="text" class="form-control" value="<?php echo $row['branch'] ?>" style ="text-transform: capitalize;" name ="branch" id="branch" placeholder="" required = "required">
                </div>

                <div class="mb-2">
                <label for="username" class="">Department</label>
                    <input type="text" class="form-control" value="<?php echo $row['department1'] ?>" style ="text-transform: capitalize;" name ="department" id="department" placeholder="" required = "required">
                </div>

                <button type = "submit" name ="update" class = "btn btn-primary btn-sm  mt-3 w-100">SAVE CHANGES</button>
                <a href="../user_dash.php" class="btn btn-danger btn-sm mt-1 w-100">CANCEL</a>
                <!-- <button type = "submit" name ="save" class = "btn btn-danger p-2 mt-2 w-100">CHANGE PASSWORD</button> -->
                <!-- <p class = "text-dark text-center">Already have an account?<u><a href="../index.php" class = "text-primary">Login here</a></p> -->
            </form>
        </div>
    </div>
    </div>



  




   <script type="text/javascript" src="../design/DataTables/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#mydatatable').DataTable();

    });
  </script>

</body>




</html>