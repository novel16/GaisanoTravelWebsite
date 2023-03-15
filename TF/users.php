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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="style/modal.css">

       <!-- bootstrap from the folder -->
  <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
     <!-- bootstrap from the folder -->
  <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
     <!-- font awesome CDN Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <style type ="text/css">

      /* table{
        opacity: 0.9;
      } */

       tbody{
        opacity: 0.9;
       }
       tfoot{
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
        .fixed{
          position: fixed;
        }
        

    </style>
</head>
<body>
  

<nav class = "p-1 bg-dark shadow fixed">
    <div class="nav-content">
      <div class="logo">
       
        <b><h2 class = "text-info">TRAVEL SYSTEM - ADMINISTRATOR</h2></b>
      </div>
      <ul class="nav-links mt-2 ">
      <li><a href="../administrator/admin_dash.php" class = "link-dark text-light ">HOME</a></li>
        <li><a href="../administrator/admin_pending.php" class = "link-primary text-light">TRAVEL INFORMATION </a></li> 
        <!-- <li><a href="../administrator/admin_approve.php" class = "link-success text-light">APPROVED <b class="text-success">[<?php echo $row['total_approve'] ?>]</b></a></li>
        <li><a href="../administrator/admin_rejected.php" class = "link-danger text-light">REJECTED <b class="text-danger">[<?php echo $row2['total_rejected'] ?>]</b></a></li> -->
        <li><a href="../TF/users.php" class = "link-info text-info">USERS</a></li>
               
        <!-- <li><a href="../TF/users.php" class = "link-info text-light">USERS</a></li> -->
        <li><a href="../functions/logout.php" class = "text-light ">LOGOUT</a></li>
        <!-- <li><img src="../images/capital.png" class="ml-5" alt="profile_image" style = "width: 30px;"></li> -->

        
      </ul>
    </div>
  </nav>

  
  


<div class = "container" style="margin-top:7%;">
       
    <div class = " mb-2  ">
      <div class = "row">
        <div class = "col-sm-8">
          
        <a href="" class=" btn btn-success text-light btn-sm "  data-bs-toggle = "modal" data-bs-target ="#myModal"><i class='bx bx-plus-circle fs-8 me-1 '></i>New audit</a> 

        <!-- modal -->
        
        <div class = "modal fade" id = "myModal" >
          <div class = "modal-dialog fade-in mt-3">
            <div class = "modal-content" >
              <div class = "modal-header bg-success text-light">
                  <h5 class= "modal-title">AUDIT REGISTRATION</h5>
                  <button type = "button" class = "btn-close btn btn-danger text-light" data-bs-dismiss = "modal"></button>
              </div>
              
              <div class = "modal-body">
                              
                  <form action="../administrator/audit_register.php" method = "POST"> 
                  <?php  if(isset($_SESSION['error'])){ ?>
                 <div class="alert alert-danger" role="alert">
                    <?=$_SESSION['error']?>
                      </div>
                      <?php } ?>  
                      
                      <div>
                      <label class ="form-label">Email</label>
                      <input type="email" name="user_name" id="" class = "form-control" required>
                    </div>             
                    <div class = "mt-2">
                      <label class ="form-label">Firstname</label>
                      <input type="text" name="firstname" id="" class = "form-control" required>
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Lastname</label>
                      <input type="text" name="lastname" id="" class = "form-control" required>
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Branch</label>
                      <input type="text" name="branch" id="" class = "form-control" required>
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Department</label>
                      <input type="text" name="department" id="" class = "form-control"required >
                    </div>
                    
                    <div class = "mt-2">
                      <label class ="form-label">Password</label>
                      <input type="password" name="password" id="" class = "form-control" required>
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Confirm Password</label>
                      <input type="password" name="cpassword" id="" class = "form-control" required>
                    </div>
                    <div class ="modal-footer">
                    <div class ="mt-3">
                        <button type = "submit" name = "save" id="save" class = "btn btn-primary btn-sm">Submit</button>
                        <button type = "button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                  </form>
              </div>
              
            </div>
          </div>
        </div>
        
        <!-- ##################################################################################################################################################### -->

                                                                  <!-- update modal -->
        <div class = "modal fade" id = "update_modal">
          <div class = "modal-dialog  mt-3" style = "">
            <div class = "modal-content">
              <div class = "modal-header bg-success text-light">
                  <h5 class= "modal-title">UPDATE USERS</h5>
                  <button type = "button" class = "btn-close btn btn-danger text-light" data-bs-dismiss = "modal"></button>
              </div>
              
              <div class = "modal-body">            
                  <form action="../administrator/update_user.php" method = "POST">    
                      <div>
                      <label class ="form-label">Email</label>
                      <input type="email" readonly name="user_name" id="user_name" class = "form-control" >
                    </div>             
                    <div class = "mt-2">
                      <label class ="form-label">Firstname</label>
                      <input type="text" name="firstname" id="firstname" class = "form-control" >
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Lastname</label>
                      <input type="text" name="lastname" id="lastname" class = "form-control" >
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Branch</label>
                      <input type="text" name="branch" id="branch" class = "form-control" >
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Department</label>
                      <input type="text" name="department" id="department" class = "form-control" >

                      <div class="mt-2">
                    <label for="Select Role">Status</label>
                    <select name="status" id= "status" class = "form-select">
                        <option  value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        
                        </select>                      
                    </div>
                    
                    <div class ="modal-footer">
                    <div class ="mt-3">
                        <button type = "submit" name = "update" id="save" class = "btn btn-primary btn-sm">Update</button>
                        <button type = "button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                  </form>
              </div>
              
            </div>
          </div>
        </div>

        <!-- ############################################################################################################################################################### -->


       
       
      </div> 
        
               
    
    <div class = "col-sm-4 container-fluid">
      
      <!-- <div>  
       
        <input type="text" class = "form-control" name = "search" placeholder = "Search Here...." >
      </div> -->
    
    
    </div>
    
    </div>
    </div>
    
        <hr>


    
   
   <table class="table table-striped table-sm m-auto" id = "mydatatable">
    <thead class = "bg-dark text-light ">
  <tr>
    <th hidden>UserName</th>
    <th><small>FirstName</small></th>
    <th><small>LastName</small></th>
    <th><small>Branch</small></th>
    <th><small>Department</small></th>
    <th><small>Role</small></th>
    <th><small>Status</small></th>
    <th><small>Action</small></th>
  </tr>
</thead>
<tbody >

<?php

include_once '../functions/connect.php';

$sql = "SELECT * FROM `users`";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){

  $status = $row['stats'];

  if($status == "Active"){

    $status = '<b class = "text-success">Active</b>';

  }else if($status == "Inactive"){

    $status = '<b class = "text-danger">Inactive</b>';
  }
    ?>

<tr class = "">
          <td hidden><?php echo $row['user_name'] ?></td>
          <td><small><?php echo $row['firstname'] ?></small></td>
          <td><small><?php echo $row['lastname'] ?></small></td>
          <td><small><?php echo $row['branch'] ?></small></td>
          <td><small><?php echo $row['department1'] ?></small></td>
          <td><small><?php echo $row['role'] ?></small></td>
          <td><small><?php echo $status ?></small></td>
         
          <td>
          <!-- <a href="../partials/batch_sched_update.php?batch_sched_code=<?php echo $row['batch_sched_code'] ?>" class = "link-success" data-bs-toggle = "modal" data-bs-target ="#meModal"><i class='bx bxs-edit fs-5 me-3' ></i></a> -->
          <a href="" class = "link-primary btn-sm btn_edit" data-bs-toggle = "modal" data-bs-target =""><i class='bx bxs-cog fs-5 me-3' ></i></a>
          <a href="" class = "link-primary btn-sm btn_pass" data-bs-toggle = "modal" data-bs-target =""><i class="fa-solid fa-key me-3"></i></a>  

          
          </td>     
        </tr>
<?php
}
?>

</tbody>

</table>

   </div>

    <!-- -----------------------------------------------------------------Change password modal----------------------------------------------------------------- -->

    <div class = "modal fade" id ="modal_pass">
          <div class = "modal-dialog  mt-3" style = "">
            <div class = "modal-content">
              <div class = "modal-header bg-success text-light">
                  <h5 class= "modal-title">Change Password</h5>
                  <button type = "button" class = "btn-close btn btn-danger text-light" data-bs-dismiss = "modal"></button>
              </div>
              
              <div class = "modal-body">            
                  <form action="../administrator/user_change_pass.php" method = "POST">    
                      <div>
                      <label class ="form-label">Username</label>
                      <input type="text" readonly name="user_name" id="user_name1" class = "form-control" >
                    </div>             
                    <div class = "mt-2">
                      <label class ="form-label">New Password</label>
                      <input type="password" name="password" id="" class = "form-control" >
                    </div>
                    <div class = "mt-2 mb-3">
                      <label class ="form-label">Confirm Password</label>
                      <input type="password" name="cpassword" id="" class = "form-control" >
                      
                    </div>
                    
                    <div class ="modal-footer">
                    
                        <button type = "submit" name = "change_pass" id="save" class = "btn btn-primary btn-sm">Update</button>
                        <button type = "button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                       
                    
                    </div>
                    </form>
              </div>
              
            </div>
          </div>
        </div>

        <!-- -----------------------------------------------------------------End password modal----------------------------------------------------------------- --> 


   <footer>
    <div class="bottom-details pb-2">

      <div class="bottom_text text-center">
        <hr>
        <small class ="text-dark justify-content-center">© created by <span class= "text-primary">Gaisano Corp. Programmers</span>  | all right reserved</small>
        
      </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="../js/jquery-3.6.1.min.js"></script>
  <script>
    $(document).ready(function(){

      $('.btn_edit').on('click',function(){

        $("#update_modal").modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);

        $('#user_name').val(data[0]);
        $('#firstname').val(data[1]);
        $('#lastname').val(data[2]);
        $('#branch').val(data[3]);
        $('#department').val(data[4]);
        $('#status').val(data[6]);
          
      });
    });
  </script>


<!-- -------change password------ -->

<script>
    $(document).ready(function(){

      $('.btn_pass').on('click',function(){

        $("#modal_pass").modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
          return $(this).text();
        }).get();

        console.log(data);

        $("#user_name1").val(data[0]);
 
      });
    });
  </script>

  <?php include "../includes/script.php"; ?>
</body>


</html>