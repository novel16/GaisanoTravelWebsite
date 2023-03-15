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
	$no_of_days = $row['no_of_days'];

    



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
	
<div class="container " >
	
		<div class="row ">
			<div class="col-md-12">
				<h5 class="mt-2"><center>GAISANO GROUP OF COMPANIES</center></h5>
				<p><center>REQUEST FOR TRAVEL FORM</center></p>
				<p><center><?php echo $branch?></center></p>
				<form action ="../functions/approve_insert.php" method ="POST">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-6">
					
						<div class="input-group">
							<div class="form-group">
							    <!-- <select class="form-control" disabled="" name="branch1" id="exampleFormControlSelect1" style="border:none; background-color: transparent;" >
							      <option selected>Branch </option> -->
							    <!-- </select> -->
							  </div>
							<div class="form-group">
							    <!-- <input type = "text" class="form-control" id="branch1" readonly  name = "branch1" value = "<?php echo $branch?>" style="border-top:none;border-right:none;border-left:none;border-color:black;"> -->
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
								<div class="col-md-11">
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
				<div class="row ">
					<div class="col-md-12">
						<table class="responsive">
							<tr>
								<td colspan="4" class = "text-center">TEAM DETAILS</td>
								
							</tr>
							<tr>
								<td><label class="ml-5">NAME : </label></td>
								<td>&nbsp;<input type="text"size="30" readonly name="team_name" id ="team_name" value="<?php echo $row['team_name'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black; ">&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;<input type="text"size="30" readonly name="" id ="team_name" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black; ">&nbsp;&nbsp;&nbsp;</td>
								<td>&nbsp;<input type="text"size="30" readonly name="" id="team_name" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;">&nbsp;&nbsp;&nbsp;</td>
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
									<td><input type ="text" class="form-control" name ="branch2" readonly id="branch2" value = "<?php echo $row['branch2'] ?>" style="border-top:none;border-right:none;border-left:none;border:none;color:black;" size="">
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
							    </select></td> -->
									<td rowspan="2"><textarea type = "text" readonly value="<?php echo $row['purpose'] ?>"  placeholder="<?php echo $row['purpose'] ?>" class="form-control text-center" name="purpose" id="purpose"  rows="4" cols="27" style="font-size: 18px; border:none;"></textarea></td>
									<td><center>Start</center></td>
									<td><input type="date" name="start_date" readonly  class="col-11" id="pick_date"onchange="cal()" value ="<?php echo $row['start_date'] ?>" style="border-top:none;border-right:none;border-left:none;  "></td>
									<td><input type="text" name=""class="col-12" style="border-top:none;border-right:none;border-left:none;  "readonly=""></td>
								</tr>
								<tr>
									<td><textarea class="form-control" name="branch3" rows="3" cols="27"><?php echo $row['branch3']; ?></textarea></td>
									
									<td><center>End</center></td>
									<td><input type="date" name="end_date"  readonly class="col-11" id="drop_date"onchange="cal()" value = "<?php echo $row['end_date'] ?>" style="border-top:none;border-right:none;border-left:none;"></td>
									<td><center><input type="number" name="days_no" id="numdays2"class="col-12" value="<?php echo $row['days_no'] ?>" style="border-top:none;border-right:none;border-left:none;" readonly="" placeholder="Day/s"></center></td>
								</tr>
							</table>
							</div>
						</div>
						
						<label class="mt-2">DETAILS OF EXPENSES</label>
						<br>
						<div class="row">
							<div class="col-md-12">
								<table border ="1" id = "table_field">
								<tr>
									<td colspan="4"><center>(Subject for Liquidation)</center></td>
								</tr>
								<tr>
									<td width="145"><center># OF EMP</center></td>
									<td width="400"><center>FROM - TO</center></td>
									<td width="350"><center>PARTICULARS</center></td>
									<td width="150"><center>AMOUNT</center></td>
									
								</tr>

								<!-- dri tah mag execute for displaying -->
								<?php
								include_once '../functions/connect.php';

								$query = "SELECT * FROM `travel_info` WHERE `branch1`='$branch1' AND `account_staff`='$account_staff' AND `start_date`='$start_date' AND `end_date`='$end_date' AND user = '$user_name'";
								$result1 = mysqli_query($con, $query);
								$rowcount = mysqli_num_rows($result1);

								for($i = 1; $i<=$rowcount; $i++){
									$row1 = mysqli_fetch_array($result1);
									//  if($row1['start_date']==$start_date && $row1['end_date']== $end_date){
									?>

								
								<tr border = "1">
									
									<td><input type="text" value="<?php echo $row1['emp_no'] ?>"  readonly name="emp_no[]" class="col-12  form-control" style="border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
									<td><input type="text" value="<?php echo $row1['from_to'] ?>"  readonly  name="from_to[]" class="col-12  form-control" style="border-top:none;border-right:none;border-left:none; border-bottom:none;"></td>
									<td><input type="text" value="<?php echo $row1['particular'] ?>" readonly  name="particular[]" class="col-12  form-control" style="border-top:none;border-right:none;border-left:none;border-bottom:none;"></td>
									<td><input type="number" value="<?php echo $row1['amount_liquidate'] ?>" readonly  name="amount_liquidate[]" class="sum col-12 form-control" onchange="add()" style=" border-top:none;border-right:none;border-left:none;text-align: center; border-bottom:none;"></td>	
								</tr>
							
								
								<?php } ?>

								
								
								<tr>
									<td colspan="2" style="border: none;"></td>
									<td  style="float: right; border:none;" ><label>SUB-TOTAL</label></td>
									<td ><input type="number" readonly name="total_liquidate" value="<?php echo $row['total_liquidate'] ?>" class="sumss col-12 text-center" readonly onchange="addss()" id="total" style="border-top:none;border-right:none;border-left:none;text-align: right; border-bottom: none;"></td>
								</tr>
							
								
								
								</table>
								
								
								<label class="mt-2">TRAVEL ALLOWANCE PER DIEM:</label>
								<div class="row">
									<br>
									<div class="col-md-12">
										<table border="1">
											<tr>
												<td colspan="5"><center>(Not subject for Liquidation)</center></td>
											</tr>
											<tr>
												<td width="270"><center>Bracket</center></td>
												<td width="270"><center>No. OF EMPLOYEES</center></td>
												<td width="270"><center>NO. OF DAYS</center></td>
												<td width="150" colspan="2"><center>AMOUNT</center></td>
											</tr>

											<?php
								include_once '../functions/connect.php';

								$query1 = "SELECT * FROM `travel_info` WHERE `branch1`='$branch1' AND `account_staff`='$account_staff' AND `start_date`='$start_date' AND`end_date`='$end_date' limit 4";
								$result2 = mysqli_query($con, $query1);
								$rowcount1 = mysqli_num_rows($result2);

									for($i = 1; $i<=$rowcount1; $i++){
										$row2 = mysqli_fetch_array($result2);
										// if($row2['employee_no'] != "" || $row2['bracket'] !="" || $row2['no_of_days'] !="" || $row2['amount'] !=""){
										?>

							
											<tr>
												<td><input type="text" value="<?php echo $row2['bracket'] ?>" name="bracket[]"  readonly class="col-12 form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()"></td>
												<td><input type="text" value="<?php echo $row2['employee_no'] ?>" name="employee_no[]"  readonly class="col-12 form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; "onkeyup="calc()"></td>
												<td><input type="text" value="<?php echo $row2['no_of_days'] ?>" name="no_of_days[]" readonly  class="col-12 form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none;  "onkeyup="calc()"></td>
												<td colspan="2"><center><input type="number" value="<?php echo $row2['amount']?>" readonly name="amount[]" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 text-center  form-control" onchange="adds()" onkeyup="calc()"></center></td>
											</tr>
								
								<?php }?>


											
											
												
											
											<!-- <tr>
												<td><input type="text"  name="bracket[]" readonly class="col-12  form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; " onkeyup="calc()"></td>
												<td><input type="text"  name="employee_no[]" readonly class="col-12  form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none; "onkeyup="calc()"></td>
												<td><input type="text"  name="no_of_days[]" readonly class="col-12  form-control" style="font-size: 18px; border-top:none;border-right:none;border-left:none; border-bottom:none;  "onkeyup="calc()"></td>
												<td colspan="2"><center><input type="number" readonly name="amount[]" style="font-size: 18px; border-top:none;border-right:none;border-left:none;text-align: right; border-bottom:none;" class="sums col-12 form-control" onchange="adds()" onkeyup="calc()"></center></td>
											</tr> -->
											
											<tr>
												<td colspan="2" style="border: none;"></td>
												<td  style="float: right; border:none;" ><label>SUB-TOTAL</label></td>
												<td colspan="2"><center><input type="number" name="total" value = "<?php echo $row['total'] ?>" class="sumss col-12 text-center " readonly onchange="addss()" id="totals" style="border-top:none;border-right:none;border-left:none;text-align: right;border-bottom:none;"></center></td>
											</tr>
											<tr>
												<td style="border: none;"></td>
												<td colspan="2" style="border:none; text-align: right" >GRAND TOTAL FOR CASH ADVANCE--------------------------------------</td>
												<td style="border-right:none;"><center>
													<input type="number" id="display" name="overall_total" class="" value = "<?php echo $row['overall_total'] ?>" style="border:none; text-align:center;"  readonly></center></td>
												<td style="border: none;"></td>
											</tr>
										</table>

										<!-- <div class="row">
											<div class="col-md-11 mt-2">
												<button onclick="myFunction()" style="float:right;" class="btn btn-outline-danger btn_compute" id="noprint">Compute</button>
											</div>
										</div> -->
									</div>
								</div>
								<div class="row mt-5" >
									<div class="col-md-12">
										<table>
											<tr>
												<td colspan="2">REQUEST BY : </td>
												<td colspan="2">REVIEWED BY : </td>
												<td colspan="2">APPROVED BY : </td>
												<td colspan="2">RECEIVED BY : </td>
											</tr>
											<tr>
												<td><input type="text" name="request_by" readonly  class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;" size="25" value= "<?php echo $firstname ?> <?php echo $lastname ?>"></td>
												<td width="10px"></td>
												<td><input type="text" name="review_by"  readonly value = "<?php echo $row['review_by'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;"></td>
												<td width="10px"></td>
												<td><input type="text" name="approve_by" readonly  value = "<?php echo $row['approve_by'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;"></td>
												<td width="10px"></td>
												<td><input type="text" name="receive_by"  readonly value = "<?php echo $row['receive_by'] ?>" class="col-12" style="border-top:none;border-right:none;border-left:none;border-color:black;"></td>
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
												<!-- <td colspan="6"></td>
												<td style="float: right;" ><button type ="submit" style= "" class="btn btn-success mt-3 " name ="save" id= "noprint" >Save</button></td> -->
												<td colspan="6"></td>
												<td style="float: right;" class="noprint"><button class="btn btn-primary btn-sm" style="font-size: 16px;" id="justprint" onclick="window.print();return false;">Print</button></td>
												<td colspan="6"></td>
												<td style="float: right;"><a href="../TF/details.php" class = " btn btn-danger btn-sm" style="font-size: 16px;" id = "noprint">Back</a></td>
												<!-- <td colspan="6"></td> -->
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

		// function addss(){
		// 	 totalss= 0;
		// 	 sumss =document.getElementsByClassName("sumss");
		// 	 for(a=0;a<sumss.length;a++)
		// 	   {
		// 	     console.log(sumss[a].value);
		// 	   totalss += parseInt(sumss[a].value || 0);
		// 	  }
		// 	  document.getElementById("totalss").value = totalss;
		// 	}
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

	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/jquery.min.js"></script>
	
</body>

</html>