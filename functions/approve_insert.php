<?php
 session_start();
$user_name = $_SESSION['user_name'];
$branch = $_SESSION['branch'];
include "connect.php";



if(isset($_POST['save'])){

    
    //$branch1 = $_POST['branch1'];
    $account_staff = $_POST['account_staff'];
    $department = $_POST['department'];
    $team_name = $_POST['team_name'];
    $branch2 = $_POST['branch2'];
    $branch3 = $_POST['branch3'];
    $purpose = $_POST['purpose'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $days_no = $_POST['days_no'];
    $emp_no = $_POST['emp_no'];
    $from_to = $_POST['from_to'];
    $particular = $_POST['particular'];
    $amount_liquidate = $_POST['amount_liquidate'];
    $total_liquidate = $_POST['total_liquidate'];
    $bracket = $_POST['bracket'];
    $employee_no = $_POST['employee_no'];
    $no_of_days = $_POST['no_of_days'];
    $amount = $_POST['amount'];
    $total = $_POST['total'];
    $overall_total = $_POST['overall_total'];
    $request_by = $_POST['request_by'];
    $review_by = $_POST['review_by'];
    $approve_by = $_POST['approve_by'];
    $receive_by = $_POST['receive_by'];
   
    $num = 1;

    $query = "select branch2, start_date, end_date from travel_info where branch2 = '$branch2' and start_date ='$start_date' and end_date = '$end_date'";
    $result1 = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result1);

    if($row['branch2']==$branch2 && $row['start_date'] == $start_date && $row['end_date']== $end_date){
       
         echo '<script>
        alert("The BRANCH destination and DATE has already exist.");
        
        </script>';

    }else{

        foreach ($emp_no as $index => $value) {
 
            $num_row = $num++;
    
            $sql = "INSERT INTO `travel_info`(`branch1`, `account_staff`, `department`, `team_name`, `branch2`, `branch3`, `purpose`, `start_date`, `end_date`, `days_no`, `emp_no`, `from_to`, `particular`, `amount_liquidate`, `total_liquidate`, `bracket`, `employee_no`, `no_of_days`, `amount`, `total`,`overall_total`, `request_by`, `review_by`, `approve_by`, `receive_by`,`user`,`status`,`num_row`) 
        VALUES ('$branch','$account_staff','$department','$team_name','$branch2','$branch3','$purpose','$start_date','$end_date','$days_no','".$value."','".$from_to[$index]."','".$particular[$index]."','".$amount_liquidate[$index]."','$total_liquidate','".$bracket[$index]."','".$employee_no[$index]."','".$no_of_days[$index]."','".$amount[$index]."','$total','$overall_total','$request_by','$review_by','$approve_by','$receive_by','$user_name','Pending','$num_row')";
    
        $result = mysqli_query($con, $sql);
    
        if($result){
             header("location: ../TF/details.php");
            
        }
        else{
            echo '<script>
            alert("Data failed");
            </script>';
        }
            
        }

    }

    
    


    

}

?>