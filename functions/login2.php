<?php
session_start();
include_once 'connect.php';

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
        header("location: ../index.php?error= *Username is Required");
    }
    else if(empty($password)){
        header("location: ../index.php?error= *Password is Required");
    }else{
        $sql = "SELECT * FROM `users` WHERE `user_name` = '$username' AND `password` = '$password' AND `role` ='$role'";
        $result = mysqli_query($con, $sql);
       // $isActive = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)>0){

            if($role == "User"){

                $row = mysqli_fetch_assoc($result);
                if($row['password']=== $password && $row['role'] == $role){
    
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['stats'] = $row['stats'];
                $_SESSION['branch'] = $row['branch'];
                $_SESSION['department1'] = $row['department1'];
                $_SESSION['user'] = $role;
                
                
                echo '<script>
                window.location ="../user_dash.php";
                </script>';
    
                }
                if($row['stats'] != "Active"){

                    header("location: ../index.php?error= *Cannot login, user is Inactive");
                }

                
            }else if($role == "Audit"){

                $row = mysqli_fetch_assoc($result);
                if($row['password']=== $password && $row['role'] == $role){
    
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['branch'] = $row['branch'];
                $_SESSION['stats'] = $row['stats'];
                $_SESSION['audit'] = $role;
                
                echo '<script>
                window.location ="../TF/dashboard.php";
                </script>';
    
                }
                if($row['stats'] != "Active"){

                    header("location: ../index.php?error= *Cannot login, user is Inactive");
                }

            }
            else if($role == "Admin"){

                $row = mysqli_fetch_assoc($result);
                if($row['password']=== $password && $row['role'] == $role){
    
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['branch'] = $row['branch'];
                $_SESSION['stats'] = $row['stats'];
                $_SESSION['admin'] = $role;
                
                echo '<script>
                window.location ="../administrator/admin_dash.php";
                </script>';
    
                }

            }
            

            else{
                header("location: ../index.php?error= Incorrect Username or Password");
            }

           
        }
       // elseif($isActive['stats'] != "Active"){

           // header("location: ../index.php?error= *Cannot login, user is Inactive");
       // }
        else{
            header("location: ../index.php?error= Incorrect Username or Password");
        }
    }

}else{

    header("location: ../index.php");
}

?>