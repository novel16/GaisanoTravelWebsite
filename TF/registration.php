

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Travel System</title>
  <!-- Font Awesome -->

  <!-- bootstrap from the folder -->
  <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
    
  <!-- fontawesome -->
  <link rel="stylesheet" href="../fontawesome/css/all.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
      .main a{
        text-decoration: none;
      }
    
     .bg-light{
            opacity: 0.8;
            
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
 
  
  
    <br>
    
    <div class = "bg-light shadow  p-4  m-auto rounded-3" style= "width:25%;">
        <div class = "">
        <h2 class = "text-center mb-3 text-primary" >REGISTRATION</h2>
        </div>

          <?php  if(isset($_GET['error'])){ ?>
          <div class="alert alert-danger" role="alert">
          <?=$_GET['error']?>
          </div>
          <?php } ?>

        <div class = "main">
            <form action="../functions/register.php" method ="POST">

            <div class="mb-3 input-group">
                    
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span> 
               <input type="email" class="form-control" name ="username" id="username" placeholder="E-mail" required = "required">
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fa-solid fa-f"></i></span> 
                    <input type="text" class="form-control" style ="text-transform: capitalize;" name ="firstname" id="username" placeholder="Firstname" required = "required">
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fa-solid fa-l"></i></span> 
                    <input type="text" class="form-control " style ="text-transform: capitalize;" name ="lastname" id="" placeholder="Lastname" required = "required">
                </div>
                <div class="mb-3 input-group">
                     <span class="input-group-text"><i class="fa-solid fa-code-branch"></i></span> 
                    <input type="text" class="form-control" style ="text-transform: capitalize;" name ="branch" id="branch" placeholder="Branch" required = "required">
                </div>

                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fa-solid fa-building"></i></span> 
                    <input type="text" class="form-control" style ="text-transform: capitalize;" name ="department" id="department" placeholder="Department" required = "required">
                </div>
                
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fa-solid fa-unlock"></i></span> 
                    <input type="password" class="form-control " name ="password" id="password" placeholder="Password" required = "required">
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span> 
                    <input type="password" class="form-control " name ="password2" id="password2" placeholder="Confirm Password" required = "required">
                </div>

                

                <button type = "submit" name ="save" class = "btn btn-primary btn-sm my-2 w-100">REGISTER</button>
                <small class = "text-dark text-center">Already have an account?<a href="../index.php" class = "text-primary">Login here</a></small>
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
