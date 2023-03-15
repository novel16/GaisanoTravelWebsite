<?php
include('connect.php');

//user update
if(isset($_POST['update']))
{
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $branch = $_POST['branch'];
  $department = $_POST['department'];


  $sql_update = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', branch= '$branch', department1 ='$department' WHERE user_name = '$username'";
  $result_update = mysqli_query($con, $sql_update);

  if($result_update)
  {
    header('location: ../user_dash.php');
  }
  else
  {
    echo  '<script>
            alert("Data failed to update");
            window.location = "user_info.php";
            </script>';
  }
}
else
{
  
}

?>