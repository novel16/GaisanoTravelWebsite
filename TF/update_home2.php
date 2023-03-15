<?php
session_start();
include "../functions/connect.php";
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$branch = $_SESSION['branch'];
$user_name = $_SESSION['user_name'];

$id = $_GET['id'];


    $sql = "SELECT * FROM `travel_info` WHERE `id` = '$id'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
	
	$account_staff = $row['account_staff'];
	$branch1 = $row['branch1'];
	$start_date = $row['start_date'];
	$end_date = $row['end_date'];
	$amount = $row['amount'];
	$no_of_days = $row['no_of_days'];

    $status = $row['status'];

   if($status == "Pending") {

        $status = '<button style="float:right; text-transform: uppercase; font-size: 35px" class ="btn btn-outline-primary">PENDING</button>';
    }else if($status == "Approved") {

        $status = '<button style="float:right; font-size: 35px" class ="btn btn-outline-success ml-5 pl-4 pr-4">APPROVED: By Audit</button>';

     }else if($status == "Rejected") {

        $status = '<button style="float:right; text-transform: uppercase; font-size: 35px" class ="btn btn-outline-danger">REJECTED</button>';
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Travel System - Form</title>
	<link rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<style type="text/css">
	select.form-control {
  -moz-appearance: none;
   -webkit-appearance: none;
   appearance: none;
}
	
.card-body{
	float:center;
	position: center;

}

#exampleFormControlSelect1{
	float:center;
}
@media print {
  /* style sheet for print goes here */
  #noprint,#justprint {
    visibility: hidden;
  }
}
body::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

body::-webkit-scrollbar
{
    width: 10px;
    background-color: #F5F5F5;
}

body::-webkit-scrollbar-thumb
{
    background-color: #F90; 
    background-image: -webkit-linear-gradient(45deg,
    rgba(255, 255, 255, .2) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, .2) 50%,
    rgba(255, 255, 255, .2) 75%,
    transparent 75%,
    transparent)
}
</style>
</head>
<body class="bg-light">
	
<div class="container " >
	
		<div class="row ">
			<div class="col-md-12">
				<h5 class="mt-2"><center>GAISANO GROUP OF COMPANIES</center></h5>
				<p><center>REQUEST FOR TRAVEL FORM</center></p>
				<form action ="../functions/user_update.php" method ="POST">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-6">
					
						<div class="input-group">
							<div class="form-group">
							    <select class="form-control" disabled="" name="branch1" id="exampleFormControlSelect1" style="border:none; background-color: transparent;" >
							      <option selected>Branch </option>
							    </select>
							  </div>
							<div class="form-group">
							    <input type = "text" class="form-control" id="branch1" readonly  name = "branch1" value = "<?php echo $branch?>" style="border-top:none;border-right:none;border-left:none;border-color:black;">
							      <!-- <option selected>Choose Branch here...</option>
							      <option>Gaisano Capital Bacayan</option>
							      <option>Gaisano Capital Basak</option>
							      <option>Gaisano Capital Balasan</option>
							      <option>Gaisano Capital Balingasag</option>
							      <option>Gaisano Capital Bislig</option>
							      <option>Gaisano Capital Binangonan</option>
							      <option>Gaisano Capital Boracay</option>
							      <option>Gaisano Capital Calapan</option>
							      <option>Gaisano Capital Casuntingan</option>
							      <option>Gaisano Capital City</option>
							      <option>Gaisano Capital Corporate</option>
							      <option>Gaisano Capital Danao</option>
							      <option>Gaisano Capital D. Central</option>
							      <option>Gaisano Capital ICCM</option>
							      <option>Gaisano Capital Inayawan</option>
							      <option>Gaisano Capital Iriga</option>
							      <option>Gaisano Capital Kalibo</option>
							      <option>Gaisano Capital kapatagan</option>
							      <option>Gaisano Capital Mactan</option>
							      <option>Gaisano Capital Masbate</option>
							      <option>Gaisano Capital Mintal</option>
							      <option>Gaisano Capital OPM</option>
							      <option>Gaisano Capital Ormoc Savers</option>
							      <option>Gaisano Capital Ormoc Central</option>
							      <option>Gaisano Capital OTON</option>
							      <option>Gaisano Capital Ozamis</option>
							      <option>Gaisano Capital Pagadian</option>
							      <option>Gaisano Capital PASSI</option>
							      <option>Gaisano Capital Quiapo</option>
							      <option>Gaisano Capital Riverside</option>
							      <option>Gaisano Capital Real</option>
							      <option>Gaisano Capital San Carlos</option>
							      <option>Gaisano Capital San Fran</option>
							      <option>Gaisano Capital San Jose</option>
							      <option>Gaisano Capital SRP</option>
							      <option>Gaisano Capital SOHO</option>
							      <option>Gaisano Capital SOGOD</option>
							      <option>Gaisano Capital Sorsogon</option>
							      <option>Gaisano Capital SOUTH</option>
							      <option>Gaisano Capital Surigao</option>
							      <option>Gaisano Capital Tandag</option>
							      <option>Gaisano Capital TISA</option>
							      <option>Gaisano Capital T. Central</option>
							      <option>Gaisano Capital T. Padilla</option>
							      <option>Gaisano Capital Tacloban Main</option>
							    </select> -->
							  </div>
						</div>
					</div>
				</div>
                         <div class="row">
								<div class="col-md-11 mt-1">
									<!-- <button style="float:right; text-transform: uppercase; font-size: 30px" ></button> -->
                                    
									</div>
							</div>
				<div class="row">
					<table >
						<tr>
							<td class=""><label class ="ml-5">ACCOUNTABLE STAFF:</label></td>
							<td><input type="text" name="account_staff" class="mr-5" readonly  id="account_staff" value="<?php echo $row['account_staff'] ?>" style="border-top:none;border-right:none;border-left:none;border-color:black;"size="35"></td>
                           
							<!-- <td><b><label class ="form-control ml-5 bg-success text-light text-center" style = " font-size: 20px;">APPROVED</label></b></td> -->
                        </tr>
                        
						<tr>
							<td><center><label>DEPARTMENT : </label></center></td>
							<td><input type="text" name="department" readonly  id ="department" value="<?php echo $row['department'] ?>" style="border-top:none;border-right:none;border-left:none;border-color:black;"size="35"></td>
						</tr>
					</table>
				</div>
				<div class="row mt-2">
					<div class="col-md-12">
						<table class="responsive">
							<tr>
								<td colspan="4" class = "text-center">TEAM DETAILS</td>
								
							</tr>
							<tr>
								<td><label class="ml-5">NAME : </label></td>
								<td>&nbsp;<input type="text"size="30" name="team_name" id ="team_name" value="<?php echo $row['team_name'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black; ">&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;<input type="text"size="30" name="" id ="team_name" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black; ">&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;<input type="text"size="30" name="" id="team_name" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;">&nbsp;&nbsp;&nbsp;</td>
							</tr>
							
						</table>
						
						<div class="row">
							<div class="col-md-12">
								<table border="1">
								<tr>
									<td colspan="5"><center>ITENERARY</center></td>
								</tr>
								<tr>
									<td width="300"><center>BRANCH</center></td>
									<td width="455"><center>PURPOSE</center></td>
									<td width="20" colspan="2"><center>PERIOD</center></td>
									<td width="85"><center>NO. OF DAYS</center></td>
								</tr>
								<tr>
									<td><select class="form-control" name ="branch2"  id="branch2" value = "" style="border-top:none;border-right:none;border-left:none;border:none;color:black;" size="">
							      <option selected><?php echo $row['branch2'] ?></option>
							      <option>Gaisano Capital Bacayan</option>
							      <option>Gaisano Capital Basak</option>
							      <option>Gaisano Capital Balasan</option>
							      <option>Gaisano Capital Balingasag</option>
							      <option>Gaisano Capital Bislig</option>
							      <option>Gaisano Capital Binangonan</option>
							      <option>Gaisano Capital Boracay</option>
							      <option>Gaisano Capital Calapan</option>
							      <option>Gaisano Capital Casuntingan</option>
							      <option>Gaisano Capital City</option>
							      <option>Gaisano Capital Corporate</option>
							      <option>Gaisano Capital Danao</option>
							      <option>Gaisano Capital D. Central</option>
							      <option>Gaisano Capital ICCM</option>
							      <option>Gaisano Capital Inayawan</option>
							      <option>Gaisano Capital Iriga</option>
							      <option>Gaisano Capital Kalibo</option>
							      <option>Gaisano Capital Kapatagan</option>
							      <option>Gaisano Capital Mactan</option>
							      <option>Gaisano Capital Masbati</option>
							      <option>Gaisano Capital Mintal</option>
							      <option>Gaisano Capital OPM</option>
							      <option>Gaisano Capital Ormoc Savers</option>
							      <option>Gaisano Capital Ormoc Central</option>
							      <option>Gaisano Capital OTON</option>
							      <option>Gaisano Capital Ozamis</option>
							      <option>Gaisano Capital Pagadian</option>
							      <option>Gaisano Capital PASSI</option>
							      <option>Gaisano Capital Quiapo</option>
							      <option>Gaisano Capital Riverside</option>
							      <option>Gaisano Capital Real</option>
							      <option>Gaisano Capital San Carlos</option>
							      <option>Gaisano Capital San Fran</option>
							      <option>Gaisano Capital San Jose</option>
							      <option>Gaisano Capital SRP</option>
							      <option>Gaisano Capital SOHO</option>
							      <option>Gaisano Capital SOGOD</option>
							      <option>Gaisano Capital Sorsogon</option>
							      <option>Gaisano Capital SOUTH</option>
							      <option>Gaisano Capital Surigao</option>
							      <option>Gaisano Capital Tandag</option>
							      <option>Gaisano Capital TISA</option>
							      <option>Gaisano Capital T. Central</option>
							      <option>Gaisano Capital T. Padilla</option>
							      <option>Gaisano Capital Tacloban Main</option>
							    </select></td>
									<td rowspan="2"><textarea type = "text" placeholder="" class="form-control text-center" name="purpose" id="purpose" value ="" rows="4" cols="27" style="font-size: 18px; border:none;"><?php echo $row['purpose'] ?></textarea></td>
									<td><center>Start</center></td>
									<td><input type="date" name="start_date" readonly  class="col-11" id="pick_date"onchange="cal()" value ="<?php echo $row['start_date'] ?>" style="border-top:none;border-right:none;border-left:none;  "></td>
									<td><input type="text" name=""class="col-12" style="border-top:none;border-right:none;border-left:none;  "readonly=""></td>
								</tr>
								<tr>
									<td><textarea class="form-control" name="branch3" rows="3" cols="27"><?php echo $row['branch3']; ?></textarea></td>
									
									<td><center>End</center></td>
									<td><input type="date" name="end_date"   class="col-11" id="drop_date"onchange="cal()" value = "<?php echo $row['end_date'] ?>" style="border-top:none;border-right:none;border-left:none;"></td>
									<td><center><input type="number" name="days_no" id="numdays2"class="col-12" value="<?php echo $row['days_no'] ?>" style="border-top:none;border-right:none;border-left:none;" readonly="" placeholder="Day/s"></center></td>
								</tr>
							</table>
							</div>
						</div>
						DETAILS OF EXPENSES
						<br>
						<div class="row">
							<div class="col-md-12">
								<table border="1" id = "table_field">
								<tr>
									<td colspan="4"><center>(Subject for Liquidation)</center></td>
								</tr>
								<!-- <tr><td width="100"><center>id</center></td> -->
									<td width="145"><center># OF EMP</center></td>
									<td width="400"><center>FROM - TO</center></td>
									<td width="350"><center>PARTICULARS</center></td>
									<td width="150"><center>AMOUNT</center></td>
									
								</tr>

								<!-- dri tah mag execute for displaying -->
								<?php
								include_once '../functions/connect.php';

								$query = "SELECT * FROM `travel_info` WHERE `branch1`='$branch1' AND `account_staff`='$account_staff' AND `start_date`='$start_date' AND`end_date`='$end_date' AND status ='Pending' AND user = '$user_name'";
								$result1 = mysqli_query($con, $query);
								$rowcount = mysqli_num_rows($result1);
								

								for($i = 1; $i<=$rowcount; $i++){
									$row1 = mysqli_fetch_array($result1);
									?>
								<tr >
									<td hidden><input type="text" value="<?php echo $row1['id'] ?>"  name="id[]" class="col-12 " style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
									<td><input type="text" value="<?php echo $row1['emp_no'] ?>"  name="emp_no[]" class="col-12 " style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
									<td><input type="text" value="<?php echo $row1['from_to'] ?>"  name="from_to[]" class="col-12 " style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
									<td><input type="text" value="<?php echo $row1['particular'] ?>"  name="particular[]" class="col-12 " style=" border-top:none;border-right:none;border-left:none;border-bottom:none;"></td>
									<td><input type="number" value="<?php echo $row1['amount_liquidate'] ?>"  name="amount_liquidate[]" class="sum col-12 text-center" onchange="add()" style=" border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></td>	
								</tr>
								<!-- <tr >
									<td class="text-center"><?php echo $row1['emp_no'] ?></td>
									<td ><?php echo $row1['from_to'] ?></td>
									<td ><?php echo $row1['particular'] ?></td>
									<td class="text-center"><?php echo $row1['amount_liquidate'] ?></td>
								</tr> -->
								<!-- <tr colspan="2">
									<td><input type="text" readonly value="<?php echo $row1['emp_no'] ?>" name="emp_no[]" class="col-12 " style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
									<td><input type="text" readonly value="<?php echo $row1['from_to'] ?>" name="from_to[]" class="col-12 " style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
									<td><input type="text" readonly value="<?php echo $row1['particular'] ?>" name="particular[]" class="col-12 " style=" border-top:none;border-right:none;border-left:none;border-bottom:none;"></td>
									<td><input type="number" readonly value="<?php echo $row1['amount_liquidate'] ?>" name="amount_liquidate[]" class="sum col-12 " onchange="add()" style=" border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></td>	
								</tr> -->
								
								<?php } ?>

								
								
								<tr>
									<td colspan="2" style="border: none;"></td>
									<td  style="float: right; border:none;" ><label>SUB-TOTAL-------------</label></td>
									<td ><input type="number" readonly name="total_liquidate" value="<?php echo $row['total_liquidate'] ?>" class="sumss col-12 text-center amount"  onchange="addss()" id="total" style="border-top:none;border-right:none;border-left:none;text-align: right;"></td>
								</tr>
							
								
								
								</table>
								
								<!-- <div class="row mt-2">
									<div class="col-md-11">
										<label>SUB-TOTAL-------------</label></td>
										<input type="number" name="total_liquidate" id="total_liquidate"  class="sumss" onchange="addss()" >
									</div>
								</div> -->
								
								<!-- <div class="row">
											<div class="col-md-11" id ="noprint">
												<button style="float:right;" class="btn btn-success add_btn" >Add More</button>
											</div>
										</div> -->
								
								TRAVEL ALLOWANCE PER DIEM:
								<div class="row">
									<br>
									<div class="col-md-12">
										<table border="1">
											<tr>
												<td colspan="5"><center>(Not subject for Liquidation)</center></td>
											</tr>
											<tr>
											<!-- <td width="100"><center>id</center></td> -->
												
												<td width="270"><center>Bracket</center></td>
												<td width="270"><center>No. OF EMPLOYEES</center></td>
												<td width="270"><center>NO. OF DAYS</center></td>
												<td width="240" colspan="2"><center>AMOUNT</center></td>
											</tr>
								<?php
								include_once '../functions/connect.php';

								$query = "SELECT * FROM `travel_info` WHERE `branch1`='$branch1' AND `account_staff`='$account_staff' AND `start_date`='$start_date' AND`end_date`='$end_date' AND status ='Pending'";
								$result1 = mysqli_query($con, $query);
								$rowcount = mysqli_num_rows($result1);

									for($i = 1; $i<=$rowcount; $i++){
										$row1 = mysqli_fetch_array($result1);
                                        if($row1['employee_no'] != "" || $row1['bracket'] !="" || $row1['no_of_days'] !="" || $row1['amount'] !=""){
										?>

											<tr>
												
												<td hidden><input type="text" value="<?php echo $row1['id'] ?>" name="id[]" id="" class="col-12 " style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " ></td>
												<td><input type="text" value="<?php echo $row1['bracket'] ?>"  name="bracket[]" id="bracket"  class="col-12  total_bracket" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " ></td>
												<td><input type="text" value="<?php echo $row1['employee_no'] ?>" name="employee_no[]" id="no_emp"  class="col-12 text-center total_bracket" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
												<td><input type="text" value="<?php echo $row1['no_of_days'] ?>" name="no_of_days[]" id="num_days"  class="col-12 text-center total_bracket" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none;  "></td>
												<td colspan="2"><center><input type="number"  value="<?php echo $row1['amount']?>" name="amount[]" id="total_bracket" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 text-center" onchange="adds()"></center></td>
											</tr>
								
								<?php } }?>
                                            <tr>
												<td><input type="text" name="bracket[]"class="col-12" style="border-top:none;border-right:none;border-left:none;  border-bottom:none"onkeyup="calc()"></td>
												<td><input type="text" name="employee_no[]"class="col-12 text-center" style="border-top:none;border-right:none;border-left:none; border-bottom:none "onkeyup="calc()"></td>
												<td><input type="text" name="no_of_days[]"class="col-12 text-center" style="border-top:none;border-right:none;border-left:none; border-bottom:none "onkeyup="calc()"></td>
												<td colspan="2"><center><input type="number" name="amount[]"class="sums col-12 text-center" onchange="adds()" style="border-top:none;border-right:none;border-left:none;text-align: right;border-bottom:none" onkeyup="calc()"></center></td>
											</tr>
											

											
											
											
											 
                                            <!--
											<tr>
												<td><input type="text" name=""class="col-12" style="border-top:none;border-right:none;border-left:none;  "onkeyup="calc()"></td>
												<td><input type="text" name=""class="col-12" style="border-top:none;border-right:none;border-left:none;  "onkeyup="calc()"></td>
												<td><input type="text" name=""class="col-12" style="border-top:none;border-right:none;border-left:none;  "onkeyup="calc()"></td>
												<td colspan="2"><center><input type="number"step="any" lang="de" pattern="-?[0-9]+[\,.]*[0-9]+" name=""class="sums col-12" onchange="adds()" style="border-top:none;border-right:none;border-left:none;text-align: right;"onkeyup="calc()"></center></td>
											</tr> -->
											<tr>
												<td colspan="2" style="border: none;"></td>
												<td  style="float: right; border:none;" ><label>SUB-TOTAL-------------</label></td>
												<td colspan="2"><center><input type="number" name="total" value = "<?php echo $row['total'] ?>" class="sumss col-12 text-center amount"  onchange="addss()" id="totals" style="border-top:none;border-right:none;border-left:none;text-align: right;border-bottom:none;"></center></td>
											</tr>
											<tr>
												<td style="border: none;"></td>
												<td colspan="2" style="border:none;" >GRAND TOTAL FOR CASH ADVANCE--------------------------------------------</td>
												<td style="border-right:none;"><input type ="number"  id ="display" name = "overall_total" class="amount text-center" style="border:none; text-align:center;" onchange ="myFun()" required></td>
												
											</tr>
											
										</table>
										<p id="noprint" style="margin-right:5%;" class="text-right text-muted text-danger">Note: Please recompute overall total</p>
										<div class="row">
											
											<div class="col-md-11">
											
												<button type ="submit" style="float:right;" class="btn btn-outline-danger btn_compute" id="noprint">Compute</button>
											</div>
										</div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-12">
										<table>
											<tr>
												<td colspan="2">REQUEST BY : </td>
												<td colspan="2">REVIEWED BY : </td>
												<td colspan="2">APPROVED BY : </td>
												<td colspan="2">RECEIVED BY : </td>
											</tr>
											<tr>
												<td><input type="text" name="request_by" readonly class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;" size="25" value= "<?php echo $firstname ?> <?php echo $lastname ?>"></td>
												<td width="10px"></td>
												<td><input type="text" name="review_by"  value = "<?php echo $row['review_by'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;"></td>
												<td width="10px"></td>
												<td><input type="text" name="approve_by"  value = "<?php echo $row['approve_by'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;"></td>
												<td width="10px"></td>
												<td><input type="text" name="receive_by"  value = "<?php echo $row['receive_by'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;"></td>
											</tr>
											<tr>
												<td>Name/Signature</td>
												<td></td>
												<td>Division Manager/
													Branch Dept. Head</td>
													<td></td>
												<td>Store/Branch Manager &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
												<td></td>
												<td>Name/Signature</td>
											</tr>
											<tr>
												<td colspan="6"></td>
												<!-- <td style="float: right;" class="noprint"><button class="btn btn-primary" style="font-size: 16px;" id="justprint" onclick="window.print();return false;">PRINT</button></td> -->
												<!-- <td style="float: right;"><a href="../functions/user_update.php?id=<?php echo $row['id'] ?>" class = "link-danger btn btn-primary" id = "noprint">UPDATE</a></td> -->
												<td style="float: right;"><button class ="btn btn-primary btn-sm" style="font-size:16px" name = "update">Update</button></td> 
												<!-- <td style = "float:right"><button class ="btn btn-primary btn_update" value = "<?php echo $row1['id'] ?>" name = "update">UPDATE</button></td> -->
												<td colspan="6"></td>
												<td><a href="../TF/details.php" class = "link-danger btn btn-danger btn-sm" style="font-size:16px" id = "noprint">Back</a></td>
												<!-- <td style="float: right;" ><button type ="submit" class="btn btn-primary mt-3 " name ="save" id= "noprint" >SUBMIT</button></td>
												<td colspan="6"></td>
												<td style="float: right;" ><a href="../index.php" class="link-danger btn btn-danger">BACK</a></td> -->
											</tr>
											
										</table>
									</div>
								</div>
							
<br>
							</div>
						</div>
					</div>
				</div>
			    </form>
			</div>
		</div>
	
</div>

<script type="text/javascript">
    function GetDays(){
        var dropdt = new Date(document.getElementById("drop_date").value);
        var pickdt = new Date(document.getElementById("pick_date").value);
        return parseInt((dropdt - pickdt) / (24 * 3600 * 1000) + 1);
    }

    function cal(){
		    if(document.getElementById("drop_date")){
		        document.getElementById("numdays2").value=GetDays();
		    }  
		}
		
	     


		function add(){
			 total= 0;
			 sum =document.getElementsByClassName("sum");
			 for(a=0;a<sum.length;a++)
			   {
			     console.log(sum[a].value);
			   total += parseInt(sum[a].value || 0);
			  }
			  document.getElementById("total").value = total;
			}
		function adds(){
			 totals= 0;
			 sums =document.getElementsByClassName("sums");
			 for(a=0;a<sums.length;a++)
			   {
			     console.log(sums[a].value);
			   totals += parseInt(sums[a].value || 0);
			  }
			  document.getElementById("totals").value = totals;
			}

		function addss(){
			 totalss= 0;
			 sumss =document.getElementsByClassName("sumss");
			 for(a=0;a<sumss.length;a++)
			   {
			     console.log(sumss[a].value);
			   totalss += parseInt(sumss[a].value || 0);
			  }
			  document.getElementById("totalss").value = totalss;
			}
</script>

        <script>
            function myFunction() {
                var y = document.getElementById("totals").value;
                var z = document.getElementById("total").value;
                var x = +y + +z;
                document.getElementById("demo").innerHTML = x;
            }

        </script>
        <script src='https://code.responsivevoice.org/responsivevoice.js'></script>

	<script type = "text/javascript">
		$(document).ready(function(){

		var html = '<tr><td><input type="text" name="emp_no[]" class="col-12" style="border-top:none;border-right:none;border-left:none;"required = ""></td><td><input type="text" name="from_to[]" class="col-12" style="border-top:none;border-right:none;border-left:none;  " required = ""></td><td><input type="text" name="particular[]" class="col-12" style="border-top:none;border-right:none;border-left:none;  " required = ""></td><td><input type="number" name="amount_liquidate[]" class="sum col-12" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right;" required = ""></td><td id= "noprint"><input type="button"  name="remove" id="remove" class="col-12 btn btn-danger " value="Remove" style="border-top:none;border-right:none;border-left:none;  "></td></tr>';
			
		var x =1;
		$("#add").click(function(){
			alert('ok');
		});
	});
	</script>

	<script>
		$(document).ready(function(){
			var count = 1;

			$("#addd").click(function(){
				count = count + 1;

				var html = "<tr id='row"+ count +"'>";
				html += "<td><input type='text' name='emp_no[]' class='col-12' style='border-top:none;border-right:none;border-left:none;' required = ''></td>";
				html += "<td><input type='text' name='from_to[]' class='col-12' style='border-top:none;border-right:none;border-left:none;' required = ''></td>";
				html += '<td><input type="text" name="particular[]" class="col-12" style="border-top:none;border-right:none;border-left:none;" required =""></td>';
				html += '<td><input type="number" name="amount_liquidate[]" class="sum col-12" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right;" required =""></td>';
				html += '<td id= "noprint"><input type="button"  name="remove" id="remove" class="col-12 btn btn-danger " value="Remove" data-row='row"+count+"' style="border-top:none;border-right:none;border-left:none;"></td>';
				html += '</tr>';

				$("#table_field").append(html);
			});

		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
	integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".add_btn").click(function(e){
				e.preventDefault();
				$("#table_field").append('<tr><td><input type="text" name="emp_no[]" class="col-12" style="border-top:none;border-right:none;border-left:none;  "></td><td><input type="text" name="from_to[]" class="col-12" style="border-top:none;border-right:none;border-left:none;  "></td><td><input type="text" name="particular[]" class="col-12" style="border-top:none;border-right:none;border-left:none;  "></td><td><input type="number" name="amount_liquidate[]" class="sum col-12" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right;"></td></tr>');
			});
		});
	</script>

	<script src="../js/jquery-3.6.1.min.js"></script>
	<script>
		$(document).ready(function(){

			$(".btn_compute").click(function (e) {
				e.preventDefault();
    		var total1 = $("#total").val();
    		var total2 = $("#totals").val();
    		var compute = parseInt(total1) + parseInt(total2);
   			//  alert(compute);
    		$("#display").val(compute);
			});
		});
	</script>

	<!-- <script type = "text/javascript">
			$(function(){

				$('.amount').mask('#,###.##',{reverse : true});
				var total_amount = function(){
					var sum =0;
					$('.amount').each(function(){
						var num =$(this).val().replace(',','');
						if(num != 0){
							 sum += parseFloat(num);
						}
					});
					$('#display').val(sum);
				}

				$('.amount').keyup(function(){
					total_amount();
				});
			});
	</script> -->

	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/jquery.min.js"></script>


	<!-- <script src="../sweetalert/sweetalert2.all.min.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
	<script>
      $(document).ready(function(){

        $('.btn_update').click(function(e){
              e.preventDefault();

              var id = $(this).val();
             
              Swal.fire({
                  title: 'Save Changes',
                  text: "Are you sure, you want to save changes?",
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#006c4b',
                  cancelButtonColor: '#c1003b',
                  confirmButtonText: 'Yes, Update'

                  }).then((result) => {
                  if (result.isConfirmed) {
                      $.ajax({
                          method: "POST",
                          url: "../functions/user_update.php",
                          data: {
                              'id[]':id,
                              'btn_update':true
                          },
                          
                          success: function(response){
                            
                            if(response == 200){
                              
                              Swal.fire({
                                icon: 'success',
	                              title: 'Success.',
	                              text: 'You updated your travel information!'
                              
                               }).then((result)=>{
                                if(result){
                                    location.href = "../TF/details.php";
                                }
                              });
                              
                              
                            }

                          }
                      });
                 }
              });

        });

      });
    </script> -->
	<script>
		$(document).ready(function(){

		$(".total_bracket").change(function (e) {
			e.preventDefault();
		var bracket = $("#bracket").val();
		var num_days = $("#num_days").val();
		var no_emp = $("#no_emp").val();
		var compute = parseInt(no_emp) * (parseInt(bracket) * parseInt(num_days));
   		//  alert(compute);
		$("#total_bracket").val(compute);
		
	});
	});
	</script>
	
</body>

</html>