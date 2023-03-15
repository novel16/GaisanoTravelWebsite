                    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../partials/dashStyle.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome CDN Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
     integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class = "modal" id = "meModal">
          <div class = "modal-dialog">
            <div class = "modal-content">
              <div class = "modal-header bg-success text-light">
                  <h5 class= "modal-title">Employee Travel Details</h5>
                  <button type = "button" class = "btn-close" data-bs-dismiss = "modal"></button>
              </div>
              
              <div class = "modal-body">
                <?php
                include_once '../functions/connect.php';

                //$travel_info_id = $_GET['id'];

                $sql = "SELECT * FROM `travel_info`";

                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                              
                  <form action="../TF/home2.php" method = "POST">   
                      <div>
                      <strong><label class ="form-label">Employee No.</label></strong>
                      <label class ="form-label">&nbsp;<?php echo $row['emp_no'] ?></label>
                    </div>             
                    <div class = "mt-2">
                      <label class ="form-label">Batch Day no</label>
                      <input type="text" name="batch_no" id="batch_no" class = "form-control" value = "<?php echo $row['branch1'] ?>">
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Time In(AM)</label>
                      <input type="time" name="batch_timeInAm" id="batch_timeInAm" class = "form-control">
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Time Out(AM)</label>
                      <input type="time" name="batch_timeOutAm" id="batch_timeOutAm" class = "form-control">
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Time In(PM)</label>
                      <input type="time" name="batch_timeInPm" id="batch_timeInPm" class = "form-control">
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Time Out(PM)</label>
                      <input type="time" name="batch_timeOutPm" id="batch_timeOutPm" class = "form-control">
                    </div>
                    <div class = "modal-footer ">
                    <div class ="mt-3">
                        <button type = "submit" name = "save" id="save" class = "btn btn-primary">Submit</button>
                        <a href="../partials/batchschedule.php" class = "btn btn-danger">Cancel</a>
                    </div>
                    </div>
                    
                  </form>
              </div>
              
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>