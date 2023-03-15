<?php
//session_start();
//$user_name = $_SESSION['user_name'];
include "connect.php";



if(isset($_POST['update'])){

    
    $branch1 = $_POST['branch1'];
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
    $id = $_POST['id'];
   
   // $num = 1;

    // $purpose = mysqli_real_escape_string($con, $purpose);
    // $from_to = mysqli_real_escape_string($con, $from_to);
    // $particular = mysqli_real_escape_string($con, $particular);

    
    foreach ($emp_no as $index => $value) {
 
       // $num_row = $num++;

        $sql = "UPDATE `travel_info` SET `branch1`='$branch1',`account_staff`='$account_staff',`department`='$department',
        `team_name`='$team_name',`branch2`='$branch2',`branch3`='$branch3',`purpose`='$purpose',`start_date`='$start_date',
        `end_date`='$end_date',`days_no`='$days_no',`emp_no`='".$value."',`from_to`='".$from_to[$index]."',`particular`='".$particular[$index]."',
        `amount_liquidate`='".$amount_liquidate[$index]."',`total_liquidate`='$total_liquidate',`bracket`='".$bracket[$index]."',`employee_no`='".$employee_no[$index]."',
        `no_of_days`='".$no_of_days[$index]."',`amount`='".$amount[$index]."',`total`='$total',`overall_total`='$overall_total',`request_by`='$request_by',
        `review_by`='$review_by',`approve_by`='$approve_by',`receive_by`='$receive_by' WHERE `id` = '".$id[$index]."'";

    $result = mysqli_query($con, $sql);

    if($result){
          header("location: ../TF/details.php");
       // echo '200';
       
    }
    else{
        echo '<script>
        alert("Data failed");
        </script>';
    }
        
    }


    

}

?>