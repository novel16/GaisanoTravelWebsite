<?php
session_start();
if(isset($_SESSION['user_name']) && isset($_SESSION['role']) && isset($_SESSION['user']))
{
  header('location: user_dash.php');
}

else if(isset($_SESSION['user_name']) && isset($_SESSION['role']) && isset($_SESSION['audit']))
{
  header('location: TF/dashboard.php');
}
else if(isset($_SESSION['user_name']) && isset($_SESSION['role']) && isset($_SESSION['admin']))
{
  header('location: administrator/admin_dash.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Travel System</title>

  <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="fontawesome/js/all.min.js"></script>
  
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" /> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
    body{
      margin: 0;
      padding: 0;
      border-box: box-sizing;
      
    }
    
     h2 {
            background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);   -webkit-background-clip: text;
            color: transparent;
        }
     .bg-light{
            opacity: 0.9;
            
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
  height: 90%;
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

  <!-- Start your project here-->
 <div class="container-fluid"><br><br>
  <div class="row">

    <div class="col-md-12"><h1><center>
      <div class="text-effect">
        <span>T</span>
        <span>R</span>
        <span>A</span>
        <span>V</span>
        <span>E</span>
        <span>L</span>
        <span>F</span>
        <span>O</span>
        <span>R</span>
        <span>M</span>
      </div>
    </center></h1></div>
  </div>
  
  
    
    <div class = " bg-light border shadow w-25  p-4  m-auto rounded-3" >
        <div class = "">
        <strong><b><h1 class = "text-center mb-4 text-info" >LOGIN </h1></b></strong>
        </div>
        
        <?php  if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
         <?=$_GET['error']?>
         
        </div>
            
      <?php } ?>
      
        <div class = "">
            <form action="./functions/login2.php" method ="POST">
            <div class=" mb-4">
                    <strong><label for="Select Role">Select Role</label></strong>
                    <select name="role" class = "form-select">
                        <option class="" value="User">User</option>
                        <option value="Audit">Audit</option>
                        <option value="Admin">Administrator</option>
                        </select>                      
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" class="form-control" name ="username" id="username" placeholder="Enter your e-mail" >
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="password" class="form-control" name ="password" id="password" placeholder="Enter your password">
                </div>
                <button type = "submit" name ="save" class = "btn btn-primary  btn-block mb-2  ">Login</button>
                <small class = "text-dark text-center">Don't have an account?<a href="./TF/registration.php" class = "text-primary text-center">Register here</a></small>
            </form>
        </div>
    </div>

    
     <div class="col-md-2"></div>
   </div>
 </div>
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
</body>

</html>
