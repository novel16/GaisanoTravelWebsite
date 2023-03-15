<?php
  include('connect.php');

	$van_no = isset($_REQUEST['van_no']) ? $_REQUEST['van_no'] : "";
       if (empty($van_no)) 
            {     
    echo"<div class='container'>
    <div class='row'>
    <div class='col-sm'>   
      <div class='form-group row'>
         <label  style ='padding-top: 5px;font-weight:bold;'  class='control-label'>Shipper : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
         <input type='text' class='form-control' id='shipper' name='shipper' value='Gaisano Capital Quiapo'  style ='width: 50%; border:none; ' disabled>
      </div>
    </div>

    <div class='col-sm'>    
      <div class='form-group row' style='margin-top:-70px;'>
        <label for='sel1' style ='padding: 0' class ='control-label col-sm-3  font-weight-bold'>Close Date  :   </label>
        <input type='text' class='form-control' id='date' name='date' style ='width: 40%;border:none; ' disabled>
      </div>
      
        <div class='form-group row' style='margin-top:30px;'>
        <label  style ='padding: 0' class ='control-label col-sm-3  font-weight-bold'>Van Serial No : </label>
        <input type='text' class='form-control' id='vanserial' name='vanserial' style ='width: 40%; border:none;' disabled>
      </div>
    </div>
  </div>";    
           }

          /*invoice and value*/
    $sql = "SELECT * FROM deliverypackages WHERE del_vanno = '$van_no'";
    $result = $conn->query($sql);
    if($row = $result->fetch_assoc()) {
	 
   echo"<div class='container'>
  <div class='row'>
    <div class='col-sm'>   
      <div class='form-group row'>
         <label  style ='padding-top: 5px;font-weight:bold;'  class='control-label'>Shipper : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
         <input type='text' class='form-control' id='shipper' name='shipper' value='Gaisano Capital Quiapo'  style ='width: 50%; border:none; ' disabled>
      </div>
    </div>

    <div class='col-sm'>    
      <div class='form-group row' style='margin-top:-70px;'>
        <label for='sel1' style ='padding: 0' class ='control-label col-sm-3  font-weight-bold'>Close Date :   </label>
        <input type='text' class='form-control' id='date' name='date' value='".$row["van_closed"]."'style ='width: 40%;border:none; ' disabled>
      </div>
      
        <div class='form-group row' style='margin-top:30px;'>
        <label  style ='padding: 0' class ='control-label col-sm-3  font-weight-bold'>Van Serial No : </label>
        <input type='text'  class='form-control' id='vanserial' name='vanserial' value='".$row["del_vanserial"]."' style ='width: 40%; border:none;' disabled>
      </div>
      </div>
    </div>
   </div>";
    echo"<div class='container' 'content'>";
      echo"<div class='row justify-content-around'>";
        echo"<div class='col-12'>";
          echo"<table class='table table-striped table-bordered'>";
            echo"<thead>";
              echo"<tr align='center' style='background-color:#003366;color:#fff'>";
                echo "<th> Destination </th>";
                echo"<th> Supplier </th>";
                echo"<th> Pack </th>";
                echo"<th> Weight </th>";
                echo"<th> Barcode</th>";
                echo"<th> SR No. </th>";
                echo"<th> Date Open </th>";              
                echo"</tr>";
                echo"</thead>";     
        echo" </div>"; 
      echo"</div>";
      echo"</div>";
      echo"</div>";     
      $wg = 0;
      $pack = "";
      $sql3="SELECT * FROM deliverypackages where del_vanno = '$van_no' ORDER BY del_destination ASC";
      $result3 = $conn->query($sql3);
      while($row3 = $result3->fetch_assoc()) {
      $wg = $wg = $row3["delpak_weight"];
      $pack = $row3["delpak_packing"];        
            echo "<tr class='tr'>";
            echo"<td class='text-capitalize'>".$row3["del_destination"]."</td>";
            echo "<td class='text-capitalize'>".$row3["del_supplier"] ."</td>";
            echo "<td> $pack </td>";
            echo "<td> $wg (kilos) </td>";
            echo "<td>".$row3["delpak_barcode"] ."</td>";
            echo "<td>".$row3["inv_sr_no"]."</td>";
            echo "<td>".$row3["del_dateopen"] ."</td>";
            echo "</tr>";
                                           }
      echo"</table>";
    $sql4 = "SELECT  round(sum(delpak_weight)) FROM deliverypackages where del_vanno = '$van_no'";
    $result4 = $conn->query($sql4);
    while($row4 = $result4->fetch_assoc()){
        echo"<div class='col-sm-4' style='margin-left:410px;'>";
        echo"<div class='pull-right'>";
        echo"<div class='span' >";
        echo"<i class='icon-credit-card icon-large' style='margin-left:-378px;'></i>
        &nbsp;<h6 class='alert alert-info' style='margin-top:-30px;margin-right:60px;'>Total kilos:&nbsp;". $row4["round(sum(delpak_weight))"] ."&nbsp;kilos</h6>&nbsp;";

      echo"</div>";
      echo"</div>";
      echo"</div>";
   }
        /*Print*/
    echo"<div align='right'>";
        echo"<button class='btn' style='background-color:#003366;color:#fff;margin-right:-320px;' type='submit' onclick='window.print()' id='btn2'>P R I N T</button>";
    echo"</div>";

    echo"<div style='margin-top:25.5px'>";     
            echo"<div align='right'>";
            echo"<p style='font-weight:bold;'>Prepared By: _____________________";
            echo"</div>"; 
            echo"</div>";


    echo"</div>";
  }

/*
      <div class='form-group row'>
        <label  style ='padding-top: 5px;font-weight:bold;'>Destination : &nbsp &nbsp &nbsp  </label>
        <input type='text' class='form-control' id='destination' value='". $row["del_destination"] ."' style ='width: 70%; border:none;' disabled>
        
      </div>

            <div class='form-group row'>
        <label  style ='padding-top: 5px;font-weight:bold;'>Destination : &nbsp &nbsp &nbsp  </label>
        <input type='text' class='form-control' id='destination' name='destination' style ='width: 70%; border:none;' disabled>
      </div>


    <div class='col-sm'>    
      <div class='form-group row'>
        <label style ='padding-top: 5px;font-weight:bold;'>Van Serial No  :  &nbsp &nbsp </label>
        <input type='text' class='form-control' id='vanserial' value='". $row["del_vanserial"] ."' style ='width: 30%;border:none; ' disabled>
      </div>
              
              
    </div> 
 */
?>