<?php
include('functions/connect.php');
session_start();
$username = $_SESSION['user_name'];
//$firstname = $_SESSION['firstname'];
//$lastname = $_SESSION['lastname'];


if(!isset($_SESSION['user_name']) && !isset($_SESSION['role'])){

  header('location:index.php');
}

$sql ="SELECT * FROM users WHERE user_name = '$username'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Travel System</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- dsds -->
  <!-- font awesome -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="style/design.css">

  <link rel="stylesheet" href="style/style.css">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
    h7{
        color: #F2AA4CFF;
    }
    nav {
      background-color: #F2AA4CFF;
      opacity: 0.8;
    }

    footer{
      position: fixed;
      width: 100%;
      bottom: 0;
      left: 0;
    }

.bg-success{
    
    opacity: 0.5;
}
    canvas {
  
  position: absolute;
  top: 0;
  left: 0;
  background-color: black;
}
  </style>
  <style type="text/css">
    .text-effect {
  /*border: 3px solid #fff;*/
  /*border-radius: 12px;*/
  display: flex;
  height: 88%;
  justify-content: center;
  align-items: center;
  color: #fff;
  font-family: sans-serif;
  font-size: 60px;
  font-weight: 900;
  text-align: center;
  text-transform: uppercase;
  font-style: italic;
  text-shadow: 0 1px 0 #2196f3, 0 2px 0 #2196f3, 0 3px 0 #2196f3,
    0 4px 0 #2196f3, 0 5px 0 #2196f3, 0 6px 0 #2196f3, 0 7px 0 #2196f3,
    0 8px 0 #2196f3, 0 9px 0 #2196f3, 0 10px 0 #2196f3, 0 11px 0 #2196f3,
    0 12px 0 #2196f3, 0 13px 0 #2196f3, 0 14px 0 #2196f3, 0 15px 0 #2196f3,
    0 25px 15px rgba(0, 0, 0, 0.7);
}
.text-effect span {
  display: inline-block;
  animation: animate 1.4s infinite;
  padding: 0 5px;
}

$letters: 7; //Define number of letters in animation - including spaces
$timing: 0.1s; //Delay between letters

//Sets timing differntly for each letter
@while $letters > 0 {
  .text-effect span:nth-child(#{$letters}) {
    animation-delay: $timing * $letters;
  }
  $letters: $letters - 1;
}

@keyframes animate {
  50%,
  100% {
    transform: translate(0, 0);
  }
  0% {
    transform: translate(0, 0);
  }
  50% {
    transform: translate(0, -40px);
  }
}
@media only screen and (max-width: 1000px) {
  .text-effect {
    font-size: 55px;
  }
}
@media only screen and (max-width: 479px) {
  .text-effect {
    font-size: 40px;
  }
}
@media only screen and (max-width: 359px) {
  .text-effect {
    font-size: 30px;
  }
}

  </style>
  <style type="text/css">
        .text-effect2 {
  /*border: 3px solid #fff;*/
  /*border-radius: 12px;*/
  display: flex;
  height: 80%;
  justify-content: center;
  align-items: center;
  color: lightgreen;
  font-family: sans-serif;
  font-size: 60px;
  font-weight: 900;
  text-align: center;
  text-transform: uppercase;
  font-style: italic;
  text-shadow: 0 1px 0 #2196f3, 0 2px 0 #2196f3, 0 3px 0 #2196f3,
    0 4px 0 #2196f3, 0 5px 0 #2196f3, 0 6px 0 #2196f3, 0 7px 0 #2196f3,
    0 8px 0 #2196f3, 0 9px 0 #2196f3, 0 10px 0 #2196f3, 0 11px 0 #2196f3,
    0 12px 0 #2196f3, 0 13px 0 #2196f3, 0 14px 0 #2196f3, 0 15px 0 #2196f3,
    0 25px 15px rgba(0, 0, 0, 0.7);
}
.text-effect span {
  display: inline-block;
  animation: animate 1.25s infinite;
  padding: 0 5px;
}
.content{
 
 
  
  align-items: center;

}

$letters: 7; //Define number of letters in animation - including spaces
$timing: 0.1s; //Delay between letters

//Sets timing differntly for each letter
@while $letters > 0 {
  .text-effect span:nth-child(#{$letters}) {
    animation-delay: $timing * $letters;
  }
  $letters: $letters - 1;
}

@keyframes animate {
  40%,
  100% {
    transform: translate(0, 1);
  }
  0% {
    transform: translate(0, 1);
  }
  40% {
    transform: translate(0, -50px);
  }
}
@media only screen and (max-width: 900px) {
  .text-effect2 {
    font-size: 45px;
  }
}
@media only screen and (max-width: 460px) {
  .text-effect2 {
    font-size: 38px;
  }
}
@media only screen and (max-width: 339px) {
  .text-effect2 {
    font-size: 28px;
  }
}

  </style>
</head>

<body>
<canvas id=c></canvas>






<nav class = " p-1 ">
    <div class="nav-content ">
      <div class="logo">
       
        <b><h2 class = "text-green">TRAVEL SYSTEM FORM - USER</h2></b>
      </div>
      <ul class="nav-links mt-2 ">

        <li><a href="" class = "text-primary mr-5"  style = " text-transform: capitalize;"><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></a></li>
        <li><a href="TF/user_info.php" class = "text-primary" style = "" data-bs-toggle = "modal" data-bs-target ="">Profile</a></li>
        <li><a href="functions/logout.php" class = "text-primary" style = "">Logout</a></li>
      </ul>
    </div>

  </nav>

  /* ####################################################################################################################### */
 
  /* ######################################################################################################################### */

 <div class="content">
   <div class="row mt-5 p-5 ">
   <div class="col-md-1"></div>
     
   <div class="col-md-3 mt-5">
       <center>
         <a href="TF/home2_long.php">
           <div class="text-effect2">
              <span>L</span>
              <span>O</span>
              <span>N</span>
              <span>G</span>
              
            </div>
         </a>
       </center>
     </div>

     <div class="col-md-4 mt-5">
       <center>
         <a href="TF/details.php">
           <div class="text-effect2">
              <span>T</span>
              <span>R</span>
              <span>A</span>
              <span>V</span>
              <span>E</span>
              <span>L</span>
              <span>S</span>
            </div>
         </a>
       </center>
     </div>

     <div class="col-md-3">
       <center>
        <a href="TF/home2.php">
          <div class="text-effect2 mt-5">
            <span>S</span>
            <span>H</span>
            <span>O</span>
            <span>R</span>
            <span>T</span>
            
            
          </div>
        </a>
       </center>
     </div>
     <div class="col-md-2"></div>
   </div>
 </div>
 </div>
 /* modal */

 <div class = "modal" id ="profile">
          <div class = "modal-dialog  mt-3" style = "">
            <div class = "modal-content">
              <div class = "modal-header bg-success text-light">
                  <h5 class= "modal-title">UPDATE USERS</h5>
                  <button type = "button" class = "btn-close btn btn-danger text-light" data-bs-dismiss = "modal"></button>
              </div>
              
              <div class = "modal-body">            
                  <form action="" method = "POST">    
                      <div>
                      <label class ="form-label">Username</label>
                      <input type="text" readonly name="user_name" id="user_name" class = "form-control" >
                    </div>             
                    <div class = "mt-2">
                      <label class ="form-label">Firstname</label>
                      <input type="text" name="firstname" id="firstname" class = "form-control" >
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Lastname</label>
                      <input type="text" name="lastname" id="lastname" class = "form-control" >
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Branch</label>
                      <input type="text" name="branch" id="branch" class = "form-control" >
                    </div>
                    <div class = "mt-2">
                      <label class ="form-label">Department</label>
                      <input type="text" name="department" id="department" class = "form-control" >

                      <div class="mt-2">
                    <label for="Select Role">Status</label>
                    <select name="status" id= "status" class = "form-select">
                        <option  value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        
                        </select>                      
                    </div>
                    
                    <div class ="modal-footer">
                    <div class ="mt-3">
                        <button type = "submit" name = "update" id="save" class = "btn btn-primary">Update</button>
                        <a href="../TF/users.php" class = "btn btn-danger">Cancel</a>
                    </div>
                    </div>
                  </form>
              </div>
              
            </div>
          </div>
        </div>
        /* ############### */
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript">
    var w = c.width = window.innerWidth,
    h = c.height = window.innerHeight,
    ctx = c.getContext( '2d' ),
    
    minDist = 10,
    maxDist = 30,
    initialWidth = 10,
    maxLines = 100,
    initialLines = 4,
    speed = 5,
    
    lines = [],
    frame = 0,
    timeSinceLast = 0,
    
    dirs = [
   // straight x, y velocity
      [ 0, 1 ],
      [ 1, 0 ],
      [ 0, -1 ],
      [ -1, 0 ],
   // diagonals, 0.7 = sin(PI/4) = cos(PI/4)
      [ .7, .7 ],
      [ .7, -.7 ],
      [ -.7, .7 ],
      [ -.7, -.7]
    ],
    starter = { // starting parent line, just a pseudo line
      
      x: w / 2,
      y: h / 2,
      vx: 0,
      vy: 0,
      width: initialWidth
    };

function init() {
  
  lines.length = 0;
  
  for( var i = 0; i < initialLines; ++i )
    lines.push( new Line( starter ) );
  
  ctx.fillStyle = '#222';
  ctx.fillRect( 0, 0, w, h );
  
  // if you want a cookie ;)
  // ctx.lineCap = 'round';
}
function getColor( x ) {
  
  return 'hsl( hue, 80%, 50% )'.replace(
    'hue', x / w * 360 + frame
  );
}
function anim() {
  
  window.requestAnimationFrame( anim );
  
  ++frame;
  
  ctx.shadowBlur = 0;
  ctx.fillStyle = 'rgba(0,0,0,.02)';
  ctx.fillRect( 0, 0, w, h );
  ctx.shadowBlur = .5;
  
  for( var i = 0; i < lines.length; ++i ) 
    
    if( lines[ i ].step() ) { // if true it's dead
      
      lines.splice( i, 1 );
      --i;
      
    }
  
  // spawn new
  
  ++timeSinceLast
  
  if( lines.length < maxLines && timeSinceLast > 10 && Math.random() < .5 ) {
    
    timeSinceLast = 0;
    
    lines.push( new Line( starter ) );
    
    // cover the middle;
    ctx.fillStyle = ctx.shadowColor = getColor( starter.x );
    ctx.beginPath();
    ctx.arc( starter.x, starter.y, initialWidth, 0, Math.PI * 2 );
    ctx.fill();
  }
}

function Line( parent ) {
  
  this.x = parent.x | 0;
  this.y = parent.y | 0;
  this.width = parent.width / 1.25;
  
  do {
    
    var dir = dirs[ ( Math.random() * dirs.length ) |0 ];
    this.vx = dir[ 0 ];
    this.vy = dir[ 1 ];
    
  } while ( 
    ( this.vx === -parent.vx && this.vy === -parent.vy ) || ( this.vx === parent.vx && this.vy === parent.vy) );
  
  this.vx *= speed;
  this.vy *= speed;
  
  this.dist = ( Math.random() * ( maxDist - minDist ) + minDist );
  
}
Line.prototype.step = function() {
  
  var dead = false;
  
  var prevX = this.x,
      prevY = this.y;
  
  this.x += this.vx;
  this.y += this.vy;
  
  --this.dist;
  
  // kill if out of screen
  if( this.x < 0 || this.x > w || this.y < 0 || this.y > h )
    dead = true;
  
  // make children :D
  if( this.dist <= 0 && this.width > 1 ) {
    
    // keep yo self, sometimes
    this.dist = Math.random() * ( maxDist - minDist ) + minDist;
    
    // add 2 children
    if( lines.length < maxLines ) lines.push( new Line( this ) );
    if( lines.length < maxLines && Math.random() < .5 ) lines.push( new Line( this ) );
    
    // kill the poor thing
    if( Math.random() < .2 ) dead = true;
  }
  
  ctx.strokeStyle = ctx.shadowColor = getColor( this.x );
  ctx.beginPath();
  ctx.lineWidth = this.width;
  ctx.moveTo( this.x, this.y );
  ctx.lineTo( prevX, prevY );
  ctx.stroke();
  
  if( dead ) return true
}

init();
anim();

window.addEventListener( 'resize', function() {
  
  w = c.width = window.innerWidth;
  h = c.height = window.innerHeight;
  starter.x = w / 2;
  starter.y = h / 2;
  
  init();
} )
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
  //direction
  $(".field").change(function() {
    if ($(this).val() == 0) {
      $(".text-effect").css("flex-direction", "row");
    }
    if ($(this).val() == 1) {
      $(".text-effect").css("flex-direction", "column");
    }
    if ($(this).val() == 2) {
      $(".text-effect").css("flex-direction", "row-reverse");
    }
    if ($(this).val() == 3) {
      $(".text-effect").css("flex-direction", "column-reverse");
    }
  });

  //align
  $(".field2").change(function() {
    if ($(this).val() == 0) {
      $(".text-effect").css("align-items", "center");
    }
    if ($(this).val() == 1) {
      $(".text-effect").css("align-items", "end");
    }
    if ($(this).val() == 2) {
      $(".text-effect").css("align-items", "flex-end");
    }
    if ($(this).val() == 3) {
      $(".text-effect").css("align-items", "flex-start");
    }
  });

  //justify
  $(".field3").change(function() {
    if ($(this).val() == 0) {
      $(".text-effect").css("justify-content", "center");
    }
    if ($(this).val() == 1) {
      $(".text-effect").css("justify-content", "space-around");
    }
    if ($(this).val() == 2) {
      $(".text-effect").css("justify-content"," flex-start");
    }
    if ($(this).val() == 3) {
      $(".text-effect").css("justify-content", "flex-end");
    }
  });
});

  </script>
  <script type="text/javascript">
    $(document).ready(function() {
  //direction
  $(".field").change(function() {
    if ($(this).val() == 1) {
      $(".text-effect2").css("flex-direction", "row");
    }
    if ($(this).val() == 2) {
      $(".text-effect2").css("flex-direction", "column");
    }
    if ($(this).val() == 3) {
      $(".text-effect2").css("flex-direction", "row-reverse");
    }
    if ($(this).val() == 4) {
      $(".text-effect2").css("flex-direction", "column-reverse");
    }
  });

  //align
  $(".field2").change(function() {
    if ($(this).val() == 1) {
      $(".text-effect2").css("align-items", "center");
    }
    if ($(this).val() == 2) {
      $(".text-effect2").css("align-items", "end");
    }
    if ($(this).val() == 3) {
      $(".text-effect2").css("align-items", "flex-end");
    }
    if ($(this).val() == 4) {
      $(".text-effect2").css("align-items", "flex-start");
    }
  });

  //justify
  $(".field3").change(function() {
    if ($(this).val() == 1) {
      $(".text-effect2").css("justify-content", "center");
    }
    if ($(this).val() == 2) {
      $(".text-effect2").css("justify-content", "space-around");
    }
    if ($(this).val() == 3) {
      $(".text-effect2").css("justify-content"," flex-start");
    }
    if ($(this).val() == 4) {
      $(".text-effect2").css("justify-content", "flex-end");
    }
  });
});
  </script>

  <footer>
<div class="bottom-details bg-transparent">
      <div class="bottom_text text-center">
        <h7 class ="justify-content-center">&copy;All Right Reserved. Created by Gaisano Corp. Programmers</h7>
        
      </div>
    </div>
</footer>
</body>



</html>
