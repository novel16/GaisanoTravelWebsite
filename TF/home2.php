<?php
session_start();

include "../functions/connect.php";

$branch = $_SESSION['branch'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$department1 = $_SESSION['department1'];

if(!isset($_SESSION['user_name'])){

	header('location:../index.php');
  }



// $branch = $_SESSION['branch'];
// $department = $_SESSION['department'];
// $id = $_GET['id'];


    // $sql = "SELECT * FROM `travel_info` WHERE `id` = '$id'";

    // $result = mysqli_query($con, $sql);
    // $row = mysqli_fetch_assoc($result);
	$amount = '<td colspan="2"><center><input type="number" name= "amount[]" style="border-top:none;border-right:none;border-left:none;text-align: right;" class="sums col-12 form-control text-center" onchange="adds()" onkeyup="calc()"></center></td>';

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
	.form-control{
		height: 27px;
	}
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
	
<div class="container" >
	
		<div class="row">
			<div class="col-md-12"><br>
			
				<h5><center>GAISANO GROUP OF COMPANIES</center></h5>
				<p><center>REQUEST FOR TRAVEL FORM</center></p>
				<p><center><?php echo $branch ?></center></p>
				
				<form action ="../functions/insert.php" method ="POST">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-6">
					
						<div class="input-group">
							<div class="form-group">
							    <!-- <select class="form-control" disabled="" name="branch1" id="exampleFormControlSelect1" style="border:none; background-color: transparent;" > -->
							      <!-- <option selected>Branch </option> -->
							    </select>
							  </div>
							<div class="form-group">
							    <!-- <input type = "text" class="form-control" id="branch1" name = "branch1" value = "<?php echo $branch ?>" readonly style="border-top:none;border-right:none;border-left:none;border-color:black;"> -->
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
					<table >
						<tr>
							<td class=""><label class ="ml-4">ACCOUNTABLE STAFF:</label></td>
							<td><input type="text" name="account_staff" id="account_staff" readonly value="<?php echo $firstname ?> <?php echo $lastname ?>" style="border-top:none;border-right:none;border-left:none;border-color:black;"size="35"></td>
						</tr>
						<tr>
							<td><center><label>DEPARTMENT : </label></center></td>
							<td><input type="text" name="department" id ="department" value="<?php echo $department1 ?>" style="border-top:none;border-right:none;border-left:none;border-color:black;"size="35" required = "required"></td>
						</tr>
					</table>
				</div>
				<div class="row ">
					<div class="col-md-12">
						<table class="responsive">
							<tr>
								<td colspan="4" class = "text-center">TEAM DETAILS</td>
								
							</tr>
							<tr>
								<td><label class="ml-4">NAME : </label></td>
								<td>&nbsp;<input type="text"size="30" name="team_name" id ="team_name" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black; ">&nbsp;&nbsp;&nbsp;</td>
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
									<td width="300"><center>BRANCH DESTINATION</center></td>
									<td width="455"><center>PURPOSE</center></td>
									<td width="20" colspan="2"><center>PERIOD</center></td>
									<td width="85"><center>NO. OF DAYS</center></td>
								</tr>
								<tr>
									<td><select class="form-control"  name ="branch2" id="branch2" style="border-top:none;border-right:none;border-left:none;border:none;color:black;" size="" required = "required">
							      <option selected>Choose Branch here...</option>
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
									<td rowspan="2"><textarea type="text" class="form-control" name="purpose" id="purpose" rows="4" cols="27" style="border: none;" required = "required"></textarea></td>
									<td><center>Start</center></td>
									<td><input type="date" name="start_date" class="col-11" id="pick_date"onchange="cal()" style="border-top:none;border-right:none;border-left:none;  " required = "required"></td>
									<td><input type="text" name=""class="col-12" style="border-top:none;border-right:none;border-left:none;  "readonly=""></td>
								</tr>
								<tr>
									<td><textarea class="form-control" name="branch3" rows="3" cols="27"></textarea></td>
									
									<td><center>End</center></td>
									<td><input type="date" name="end_date" class="col-11" id="drop_date"onchange="cal()" style="border-top:none;border-right:none;border-left:none;" required = "required"></td>
									<td><center><input type="number" name="days_no" id="numdays2"  class="col-12 " onchange="getData()" style="border-top:none;border-right:none;border-left:none;" readonly="" placeholder="Day/s"></center></td>
								</tr>
							</table>
							
							</div>
							
						</div>
						
						<label class ="mt-2" for="">DETAILS OF EXPENSES</label>
						
						
						<div class="row">
							<div class="col-md-12">
								<table border="1" id = "table_field">
								<tr>
									<td colspan="4"><center>(Subject for Liquidation)</center></td>
								</tr>
								<tr>
									<td width="145"><center>NO. OF EMP</center></td>
									<td width="400"><center>FROM - TO</center></td>
									<td width="350"><center>PARTICULARS</center></td>
									<td width="150"><center>AMOUNT</center></td>
									
								</tr>

								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr colspan="2">
									<td><b><input type="text"  name="emp_no[]" class="col-12 form-control text-center" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="from_to[]" class="col-12 form-control" style=" border-top:none;border-right:none;border-left:none; border-bottom:none;"></b></td>
									<td><b><input type="text"  name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></b></td>
									<td><b><input type="number"  name="amount_liquidate[]" class="sum col-12 form-control text-center" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;"></b></td>	
								</tr>
								<tr>
									<td colspan="2" style="border: none;"></td>
									<td  style="float: right; border:none;" ><label>SUB-TOTAL</label></td>
									<td colspan="2"><center><input type="number" name="total_liquidate" class="sumss col-12 text-center" readonly onchange="addss()" id="total" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom: none;"></center></td>
								
								</tr>
								</table>
							
								
								<!-- <div class="row">
									<div class="col-md-11">
										<label>SUB-TOTAL-------------</label></td>
										<input type="number" name="total_liquidate" id="total_liquidate"  class="sumss" onchange="addss()" >
									</div>
								</div> -->
								
								<!-- <div class="row mt-3">
											<div class="col-md-11" id ="noprint">
												<button style="float:right;" class="btn btn-success add_btn ml-2" >Add Row</button>
												<button style="float:right;" id="remove" class="btn btn-danger remove_btn" >Remove</button>
											</div>
										</div> -->
								
								<label for="" class ="mt-2">TRAVEL ALLOWANCE PER DIEM:</label>
								<div class="row">
									
									<div class="col-md-12">
										<table border="1" id="table">
											<tr>
												<td colspan="5"><center>(Not subject for Liquidation)</center></td>
											</tr>
											<tr>
												<td width="270"><center>BRACKET</center></td>
												<td width="270"><center>NO. OF EMPLOYEES</center></td>
												<td width="270"><center>NO. OF DAYS</center></td>
												<td width="235" colspan="2"><center>AMOUNT</center></td>
											</tr>
											
											<tr>
												<td><input type="number"  name="bracket[]" id="bracket"   class=" col-12 total_bracket text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; "  ></td>
												<td><input type="text"  name="employee_no[]" id="no_emp" class=" col-12 total_bracket text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none;border-bottom:none;  " ></td>
												<td><input type="number"  name="no_of_days[]" id="num_days"  class=" col-12 total_bracket text-center form-control"  style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " ></td>
												<td colspan="2"><center><input type="number" id="total_bracket"  name="amount[]" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 btn_bracket text-center form-control"  ></center></td>
											</tr>
											<tr>
												<td><input type="number"  name="bracket[]" id="bracket2"   class="col-12 total_bracket2 text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()" ></td>
												<td><input type="text"  name="employee_no[]" id="no_emp2" class="col-12 total_bracket2 text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none;border-bottom:none;  "onkeyup="calc()" ></td>
												<td><input type="number"  name="no_of_days[]" id="num_days2" class="col-12 total_bracket2 text-center form-control"  style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()"></td>
												<td colspan="2"><center><input type="number" id="total_bracket2"  name="amount[]" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 btn_bracket text-center form-control" onchange="adds()" onkeyup="calc()" ></center></td>
											</tr>
											<tr>
												<td><input type="number"  name="bracket[]" id="bracket3"   class="col-12 total_bracket3 text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()" ></td>
												<td><input type="text"  name="employee_no[]" id="no_emp3" class="col-12 total_bracket3 text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none;border-bottom:none;  "onkeyup="calc()" ></td>
												<td><input type="number"  name="no_of_days[]" id="num_days3" class="col-12 total_bracket3 text-center form-control"  style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()"></td>
												<td colspan="2"><center><input type="number" id="total_bracket3"  name="amount[]" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 btn_bracket text-center form-control" onchange="adds()" onkeyup="calc()" ></center></td>
											</tr>
											<tr>
												<td><input type="number"  name="bracket[]" id="bracket4"   class="col-12 total_bracket4 text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()" ></td>
												<td><input type="text"  name="employee_no[]" id="no_emp4" class="col-12 total_bracket4 text-center form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none;border-bottom:none;  "onkeyup="calc()" ></td>
												<td><input type="number"  name="no_of_days[]" id="num_days4" class="col-12 total_bracket4 text-center form-control"  style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()"></td>
												<td colspan="2"><center><input type="number" id="total_bracket4"  name="amount[]" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 btn_bracket text-center form-control" onchange="adds()" onkeyup="calc()" ></center></td>
											</tr>

											<tr>
												<td colspan="2" style="border: none; border-top: none;"></td>
												<td width ="" align = "right" style="float: right; border:none; border-top: none;" ><label>SUB-TOTAL</label></td>
												<td width ="" colspan="2"><center><input type="number" name="total" class=" sumss col-12 text-center"  onchange="adds()" id="totals" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none; border-top:none;" required></center></td>
											</tr>
											
											<tr>
												<td style="border: none;"></td>
												<td colspan="2" style="border:none;" align ="right" >GRAND TOTAL FOR CASH ADVANCE--------------------------------</td>
												<td style="border-right:none;"><input type ="number"  id ="display" class="form-control text-center" name = "overall_total" class="total" style="border:none; text-align:center;"  onchange ="myFun()" required = "required"></td>
																				
													
												<td style="border: none;"></td>
											</tr>
											
										</table>

										<!-- <table border="" id="table">

											

										</table> -->

										<div class="row mt-2">
											<div class="col-md-11">
												<button type ="button" onclick="adds()" style="float:right;" class="btn btn-outline-danger btn-sm mt-2 btn_compute" id="noprint">Compute</button>
											</div>
										</div>

									</div>
								</div>
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
												<td><input type="text" name="request_by"class="col-12" value="<?php echo $firstname ?> <?php echo $lastname ?>" style="border-top:none;border-right:none;border-left:none;border-color:black;" size="25" required = "required"></td>
												<td width="10px"></td>
												<td><input type="text" name="review_by"class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;" ></td>
												<td width="10px"></td>
												<td><input type="text" name="approve_by"class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;" ></td>
												<td width="10px"></td>
												<td><input type="text" name="receive_by"class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;" ></td>
											</tr>
											<tr>
												<td>Name/Signature</td>
												<td></td>
												<td>Div. Manager/
													Branch Dept. Head</td>
													<td></td>
												<td>Store/Branch Manager &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
												<td></td>
												<td>Name/Signature</td>
											</tr>
											<tr>
												<td colspan="6"></td>
												<td style="float: right;" ><button type ="submit" style= "" class="btn btn-success btn-sm mt-3 " name ="save" id= "noprint" >Save</button></td>
												<td colspan="6"></td>
												<td style="float: right;" class="noprint"><button style="" class="btn btn-primary btn-sm" id="justprint" onclick="window.print();return false;">Print</button></td>
												<td colspan="6"></td>
												<td style="float: right;" ><a href="../user_dash.php" style="" class="link-danger btn btn-danger btn-sm" id="noprint">Back</a></td>
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
	function getData(){
			var numdays = document.getElementById("numdays2").value;
			document.getElementById("days1").value = numdays;

		}
		
</script>

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
			  totals =0;
			 sums =document.getElementsByClassName("sums");
			 for(a=0;a<sums.length;a++)
			   {
			     console.log(sums[a].value);
			   totals += parseInt(sums[a].value || 0);
			  }
			  document.getElementById("totals").value = totals;
			}


			// sample
			function addssss(){
			 totals= 0;
			 sums =document.getElementsByClassName("sumss");
			 for(a=0;a<sums.length;a++)
			   {
			     console.log(sums[a].value);
			   totals += parseInt(sums[a].value || 0);
			  }
			  document.getElementById("dem").value = totals;
			}


</script>

        <script type="text/javascript">
            
			function myFun(){
                
				var y = document.getElementById("totals").value;
				var z = document.getElementById("total").value;
                var x = +y + +z;
                document.getElementById("demo").innerHTML = x;
            }

        </script>
        <script src='https://code.responsivevoice.org/responsivevoice.js'></script>

	<script type = "text/javascript">
		$(document).ready(function(){

		var html = '<tr><td><input type="text" name="emp_no[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;"required = ""></td><td><input type="text" name="from_to[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;  " required = ""></td><td><input type="text" name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;  " required = ""></td><td><input type="number" name="amount_liquidate[]" class="sum col-12 form-control" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right;" required = ""></td><td id= "noprint"><input type="button"  name="remove" id="remove" class="col-12 btn btn-danger " value="Remove" style="border-top:none;border-right:none;border-left:none;  "></td></tr>';
			
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

	<!-- subject for liquidation -->
	<script>
		$(document).ready(function(){
			var html = '<tr><td><input type="text" name="emp_no[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;  "></td><td><input type="text" name="from_to[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;  "></td><td><input type="text" name="particular[]" class="col-12 form-control" style="border-top:none;border-right:none;border-left:none;  "></td><td><input type="number" name="amount_liquidate[]" class="sum col-12 form-control" onchange="add()" style="border-top:none;border-right:none;border-left:none;text-align: right;"></td></tr>';
			var x = 1;
			$(".add_btn").click(function(e){
				e.preventDefault();
				$("#table_field").append(html);
			});

			
				
				$("#table_field").on('click','#remove_btn',function(){
					$(this).closest('tr').remove();
					x--;
				});
			
		});
	</script>
	<!-- not subject for liquidation -->
	<script>
		$(document).ready(function(){
				var htmls = '<tr><td><input type="text" name="bracket[]" class="col-12 " style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()"></td><td><input type="text"  name="employee_no[]"   class="col-12 " style="font-size: 18px; border-top:none;border-right:none;border-left:none;border-bottom:none;  "onkeyup="calc()"></td><td><input type="text"  name="no_of_days[]"   class="col-12 " style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; "onkeyup="calc()" ></td><td colspan="2"><center><input type="number"  name="amount[]" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 " onchange="adds()" onkeyup="calc()"></center></td></tr>';
				
				$(".add_row").click(function(e){
					e.preventDefault();
					$("#table").append(htmls);
				});
			});
	</script>


<script>
		$(document).ready(function(){
			$(".remove_btn").click(function(e){
				e.preventDefault();
				$("#table_field").closest('tr').remove();
			});
		});
	</script>

	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/jquery.min.js"></script>
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
	<!-- bracket1 -->
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
	<!-- bracket2 -->
	<script>
		$(document).ready(function(){

		$(".total_bracket2").change(function (e) {
			e.preventDefault();
		var bracket = $("#bracket2").val();
		var num_days = $("#num_days2").val();
		var no_emp = $("#no_emp2").val();
		var compute = parseInt(no_emp) * (parseInt(bracket) * parseInt(num_days));
   		//  alert(compute);
		$("#total_bracket2").val(compute);
		
	});
	});
	</script>
	<!-- bracket3 -->
	<script>
		$(document).ready(function(){

		$(".total_bracket3").change(function (e) {
			e.preventDefault();
		var bracket = $("#bracket3").val();
		var num_days = $("#num_days3").val();
		var no_emp = $("#no_emp3").val();
		var compute = parseInt(no_emp) * (parseInt(bracket) * parseInt(num_days));
   		//  alert(compute);
		$("#total_bracket3").val(compute);
		
	});
	});
	</script>
	<!-- bracket4 -->
	<script>
		$(document).ready(function(){

		$(".total_bracket4").change(function (e) {
			e.preventDefault();
		var bracket = $("#bracket4").val();
		var num_days = $("#num_days4").val();
		var no_emp = $("#no_emp4").val();
		var compute = parseInt(no_emp) * (parseInt(bracket) * parseInt(num_days));
   		//  alert(compute);
		$("#total_bracket4").val(compute);
		
	});
	});
	</script>
</body>

</html>