<?php
include_once '../functions/connect.php';

if(isset($_POST['change_pass'])){


    $username = $_POST['user_name'];
    $password = md5($_POST['password']);
    $cpassword =md5($_POST['cpassword']);



    if($cpassword == $password){

        $sql = "UPDATE `users` SET `password`='$password' WHERE `user_name`='$username'";

        $result = mysqli_query($con, $sql);

        if($result){

            header("location: ../TF/users.php");

        }else{

            echo "Failed to update user password";
        }
    }
    else{

        echo "Password did not match";

    }
    
}



?>