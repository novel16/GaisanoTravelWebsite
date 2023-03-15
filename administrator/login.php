<?php
session_start();
include_once '../functions/connect.php';

if(isset($_POST['save'])){

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = test_input($_POST['username']);
    $password = md5(test_input($_POST['password']));
    $role = test_input($_POST['role']);

    if(empty($username)){
        header("location: ../administrator/index.php?error= *Username is Required");
    }
    else if(empty($password)){
        header("location: ../administrator/index.php?error= *Password is Required");
    }else{
        $sql = "SELECT * FROM `users` WHERE `user_name` = '$username' AND `password` = '$password' AND `role` ='$role'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)>0){

            if($role == "admin"){

                $row = mysqli_fetch_assoc($result);
                if($row['password']=== $password && $row['role'] == $role){
    
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['stats'] = $row['stats'];
                $_SESSION['branch'] = $row['branch'];
                $_SESSION['department1'] = $row['department1'];
                
                echo '<script>
                        alert("success");
                    </script>';
    
                }

                
            }
           

           
         }
        else{
            header("location: ../administrator/index.php?error= Incorrect Username or Password");
            
        }
    }

}else{

    header("location: ../administrator/index.php");
}

?>