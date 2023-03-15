<?php
include_once '../functions/connect.php';

if(isset($_POST['update'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['user_name'];
    $branch = $_POST['branch'];
    $department =$_POST['department'];
    $status = $_POST['status'];
    //$role = $_POST['role'];

    
    $query = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`branch`='$branch',
        `department1`='$department',`stats`='$status' 
        WHERE `user_name`= '$username'";
    
    $result = mysqli_query($con, $query);

    if($result){

        echo '<script>
            alert("Updated Successfully");
            window.location = "../TF/users.php";

        </script>';
    }



    }

    
    


?>