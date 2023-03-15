<?php
session_start();
include_once '../functions/connect.php';

if(isset($_POST['save'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['user_name'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['cpassword']);
    $branch = $_POST['branch'];
    $department =$_POST['department'];
    //$role = $_POST['role'];

    
    $query = "SELECT * FROM `users` WHERE `user_name`='$username'";
    $result1 = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result1);
    if($row['user_name'] ==$username){

      header("location: ../TF/users.php?error= *Username is already exist");
    }else if($password != $password2){

        //https://www.youtube.com/watch?v=mh4MVFiMZTM&t=405s&ab_channel=FundaOfWebIT
        // header("location: ../TF/users.php?error= *Password did not match");
        $_SESSION['error'] = '*Password did not match';
        
  
    }else{
  
        $sql = "INSERT INTO `users`(`user_name`, `firstname`, `lastname`, `branch`, `department1`, `password`, `role`, `stats`) 
        VALUES ('$username','$firstname','$lastname','$branch','$department','$password','Audit','Active')";
  
       $result = mysqli_query($con, $sql);
  
       if($result){
          echo '<script>
          window.location = "../TF/users.php";
          alert("Data Inserted Successfully");
          
          </script>';
       }else{
        echo '<script>
        alert("Data Failed");
        
        </script>';
       }

  
  
      }
  

    }

    
    


?>