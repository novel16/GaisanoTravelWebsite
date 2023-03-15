<?php
error_reporting(0);
include_once 'connect.php';

if(isset($_POST['save'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
    $branch = $_POST['branch'];
    $department =$_POST['department'];
    //$role = $_POST['role'];

    
    $query = "SELECT `user_name` FROM `users` WHERE `user_name`='$username'";
    $result1 = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result1);
    if($row['user_name'] == $username){

      header("location: ../TF/registration.php?error= *Username is already exist! Please try other email!");
    }
    else if($password != $password2){

      
        header("location: ../TF/registration.php?error= *Password did not match");
        
  
    }else{
  
        $sql = "INSERT INTO `users`(`user_name`, `firstname`, `lastname`, `branch`, `department1`, `password`, `role`, `stats`) 
        VALUES ('$username','$firstname','$lastname','$branch','$department','$password','User','Active')";
  
       $result = mysqli_query($con, $sql);
  
       if($result){
          echo '<script>
          window.location = "../index.php";
          alert("Registered Successfully! | Login Now!");
          
          </script>';
         
       }else{
        echo '<script>
        alert("Data Failed");
        
        </script>';
       }

  
  
      }
  

    }

    
    


?>