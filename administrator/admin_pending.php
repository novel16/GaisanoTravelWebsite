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
    <!-- datatables -->
    
    <!-- bootstrap from the folder -->
  <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 

  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css">
  <link rel="stylesheet" href="DataTables/datatables.min.css">

    <!-- <link rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="../style/style.css">

    

	<link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">

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

    </style>
</head>

<body>
<nav class = "p-1 shadow bg-dark">
    <div class="nav-content ">
      <div class="logo">
       
        <b><h2 class = "text-info">TRAVEL SYSTEM - ADMINISTRATOR</h2></b>
      </div>
      <ul class="nav-links mt-2 ">
      <li><a href="../administrator/admin_dash.php" class = "link-dark text-light ">HOME</a></li>
        <li><a href="../administrator/admin_pending.php" class = "link-primary text-primary">TRAVEL INFORMATION</a></li> 
        <!-- <li><a href="../administrator/admin_approve.php" class = "link-success text-light">APPROVED <b class="text-success">[<?php echo $row['total_approve'] ?>]</b></a></li>
        <li><a href="../administrator/admin_rejected.php" class = "link-danger text-light">REJECTED <b class="text-danger">[<?php echo $row2['total_rejected'] ?>]</b></a></li> -->
        <li><a href="../TF/users.php" class = "link-info text-light">USERS</a></li>    
        <!-- <li><a href="../TF/users.php" class = "link-info text-light">USERS</a></li> -->
        <li><a href="../functions/logout.php" class = "text-light ">LOGOUT</a></li>

        
      </ul>
    </div>
  </nav>

  


<div class = "p-5 mt-5" id="admin_load">
    <div class = " mb-2 mt-5">
      <div class = "row">
        <!-- <div class = "col-sm-8">
          
        <a href="../partials/batch_sched_add_modal.php" class="btn btn-success" data-bs-toggle = "modal" data-bs-target ="#myModal"><i class='bx bx-plus-circle fs-5 ' ></i>New</a> 
       
      </div>  -->

    
    
    <div class = "col-sm-4">
      
      <!-- <div>  
       
        <input type="text" class = "form-control" name = "search" placeholder = "Search Here...." >
      </div> -->
    
    
    </div>
    
    </div>
    </div>
    


    
   <div class = "card-body" >
   <table class="table m-auto "  id ="mydatatable" style = "background-color: #b0c4de;" style = "width: 87%;">
    <thead class = "bg-dark text-light text-center">
  <tr>
    <th><small>Emp_Name</small></th>
    <th><small>Department</small></th>
    <th><small>Branch</small></th>
    <th><small>Destination</small></th>
    <th><small>Purpose</small></th>
    <th><small>Date From</small></th>
    <th><small>Date To</small></th>
    <!-- <th >Status</th> -->
    <!-- <th>Action</th> -->
  </tr>
</thead>
<tbody >

<?php
include_once '../functions/connect.php';

$sql = "select t.id,t.emp_no, u.firstname, u.lastname, t.branch1, t.branch2, t.purpose, t.from_to, t.department, t.start_date, t.end_date, t.days_no, t.status from travel_info as t INNER JOIN users as u ON t.user = u.user_name WHERE status = 'Pending' and num_row = '1'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)){
    ?>

<tr class = "text-center">
          
          <td><small><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?></small></td>
          <td><small><?php echo $row['department'] ?></small></td>
          <td><small><?php echo $row['branch1'] ?></small></td>
          <td><small><?php echo $row['branch2'] ?></small></td>
          <td><small><?php echo $row['purpose'] ?></small></td>
          <td><small><?php echo $row['start_date']?></small></td>
           <td><small><?php echo $row['end_date']?></small></td>
          <!-- <td><?php echo $row['days_no'] ?></td> -->
          <!-- <td class="text-primary" style="text-transform: uppercase;"><b><?php echo $row['status'] ?></b></td> -->
          <!-- <td>
            <button class ="btn btn-success btn_approve" value = "<?php echo $row['id'] ?>" name = "approve">Approve</button>
          <a href="../TF/audit_home2.php?id=<?php echo $row['id'] ?>" class = " btn btn-primary text-light">View</a>
          <button class ="btn btn-danger btn_rejected" value = "<?php echo $row['id'] ?>" name = "approve">Reject</button>
          </td> -->
        </tr>
<?php
}
?>

</tbody>

</table>
</div>

   </div>


  



  
    <script>
      function approval() {
       confirm("Are you sure, you want to approve this request?");
      
    }
    </script>
   
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="../sweetalert/sweetalert2.all.min.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <!-- sweet alert para sa aprrove -->
    <script>
      $(document).ready(function(){

        $('.btn_approve').click(function(e){
              e.preventDefault();

              var id = $(this).val();
             
              Swal.fire({
                  title: 'Are you sure?',
                  text: "Once Approved, You won't be able to revert this!",
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#006c4b',
                  cancelButtonColor: '#c1003b',
                  confirmButtonText: 'Yes, Approve'

                  }).then((result) => {
                  if (result.isConfirmed) {
                      $.ajax({
                          method: "GET",
                          url: "../functions/admin_approve.php",
                          data: {
                              'id':id,
                              'btn_approve':true
                          },
                          
                          success: function(response){
                            
                            if(response == 200){
                              
                              Swal.fire({
                                icon: 'success',
	                              title: 'APPROVED.'
	                              
                              
                               }).then((result)=>{
                                if(result){
                                    location.reload();
                                }
                              });
                              
                              
                            }

                          }
                      });
                 }
              });

        });

      });
    </script>

    <!-- sweet alert para sa rejected -->
    <script>
      $(document).ready(function(){

        $('.btn_rejected').click(function(e){
              e.preventDefault();

              var id = $(this).val();
             
              Swal.fire({
                  title: 'Are you sure?',
                  text: "Once Rejected, You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#c1003b',
                  cancelButtonColor: '#727875',
                  confirmButtonText: 'Yes, Reject'

                  }).then((result) => {
                  if (result.isConfirmed) {
                      $.ajax({
                          method: "GET",
                          url: "../functions/reject_and_approve.php",
                          data: {
                              'id':id,
                              'btn_approve':true
                          },
                          
                          success: function(response){
                            
                            if(response == 200){
                              
                              Swal.fire({
                                icon: 'success',
	                              title: 'Success.',
	                              text: 'You Rejected this employee!'
                              
                               }).then((result)=>{
                                if(result){
                                    location.reload();
                                }
                              });
                              
                              
                            }

                          }
                      });
                 }
              });

        });

      });
    </script>
  


  <?php include "../includes/script.php"; ?>
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