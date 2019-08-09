<?php include ('login.php');?>
<?php include ('main_data.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>MovRec</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
</head>
<body style="opacity: 0.96;">
<nav class="navbar fixed-top navbar-expand-lg bg-dark">
		<div class="container">
  <a class="navbar-brand" href="mainpage.php"><img style="width: 40px; height: 40px;" src="https://www.iconsdb.com/icons/preview/white/theatre-masks-xxl.png"> MovRec</a>

  <!-- <i class="fas fa-film"></i> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
        <a class="nav-link" href="mainpage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://docs.google.com/forms/d/1VkEMRJo28eRaxglQ6qLNLdFI-7Jik7TVTVZuZintn4Q/edit">Feedback<span class="sr-only">(current)</span></a>
      </li>
  </ul>
  <!-- <div id='TextBoxesGroup'> -->
	<!-- <div id="TextBoxDiv" style="display: none;"> -->
    <!-- <form>
	<input id="TextBoxDiv" style="display: none;" type='text'>
  </form> -->
	<!-- </div> -->
<!-- </div> -->
  <ul class="nav navbar-nav navbar-right">
  	<li class="nav-item active">
        <i onclick="document.location.href='search.php'" class="fas fa-search" id="toggleB"></i>
      </li>
      <?php if(isset($_SESSION['recepient'])): ?>
        <li class="nav-item active">
        <a class="nav-link" href="logout.php"><?php echo $_SESSION['recepient'] ?></a>
      </li>
    <?php endif; ?>
    <?php if(!isset($_SESSION['recepient'])): ?>
  	<li class="nav-item active">
        <a class="nav-link" href="2.php">Sign Up <i class="fas fa-user-plus"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" name="log" href="#" data-toggle="modal" data-target="#login1">Login <i class="fas fa-user"></i></a>
      </li>
      <?php endif; ?>

  </ul>
</div>
  </div>
</nav>
			<!-- <img src="http://www.lifewithcats.tv/wp-content/uploads/2017/05/referencecom.jpg">
 -->







<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login1">
  Launch demo modal
</button>
 -->
<!-- Modal -->
<div  id="login1" style="display: none; width: 500px; height: 500px; margin-top: 50px; margin-left: 35%" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="true">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button name="button" style="margin-right: 45%" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>








<h4>UPCOMING MOVIES</h4>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" id="top">
  <div class="row">
  
    <div onclick="show(0,0);" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[0];?>" alt="Doctor Strange">
      <span style="color: white"><b><i><?php echo $movieName[0]; ?><br>
        <?php echo $movie_rating[0]; ?>/5
</i></b></span>
    </div >
    <div onclick="show(0,1)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[1];?>">
      <span style="color: white"><b><i><?php echo $movieName[1]; ?><br>
        <?php echo $movie_rating[1]; ?>/5
    </i></b></span>
    </div >
    <div onclick="show(0,2)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[2];?>">
      <span style="color: white"><b><i><?php echo $movieName[2]; ?><br>
        <?php echo $movie_rating[2]; ?>/5
      </i></b></span>
    </div >
    <div onclick="show(0,3)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[3];?>">
      <span style="color: white"><b><i><?php echo $movieName[3]; ?><br>
        <?php echo $movie_rating[3]; ?>/5
      </i></b></span>
    </div >
    <div onclick="show(0,4)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[4];?>">
      <span style="color: white"><b><i><?php echo $movieName[4];?><br>
        <?php echo $movie_rating[4]; ?>/5
    </i></b></span>
    </div >
    <div onclick="show(0,5)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[5];?>">
      <span style="color: white"><b><i><?php echo $movieName[5]; ?><br>
        <?php echo $movie_rating[5]; ?>/5
      </i></b></span>
    </div>
  
  </div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container" id="top">
  <div class="row">
    <div onclick="show(0,6)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[6];?>">
      <span style="color: white"><b><i><?php echo $movieName[6]; ?><br>
        <?php echo $movie_rating[6]; ?>/5</i></b></span>
    </div>
    <div onclick="show(0,7)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[7];?>">
      <span style="color: white"><b><i><?php echo $movieName[7]; ?><br>
        <?php echo $movie_rating[7]; ?>/5</i></b></span>
    </div>
    <div onclick="show(0,8)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[8];?>">
      <span style="color: white"><b><i><?php echo $movieName[8]; ?><br>
        <?php echo $movie_rating[8]; ?>/5</i></b></span>
    </div>
    <div onclick="show(0,9)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[9];?>">
      <span style="color: white"><b><i><?php echo $movieName[9]; ?><br>
        <?php echo $movie_rating[9]; ?>/5</i></b></span>
    </div>
    <div onclick="show(0,10)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[10];?>">
      <span style="color: white"><b><i><?php echo $movieName[10]; ?><br>
        <?php echo $movie_rating[10]; ?>/5</i></b></span>
    </div>
    <div onclick="show(0,11)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[11];?>">
      <span style="color: white"><b><i><?php echo $movieName[11]; ?><br>
        <?php echo $movie_rating[11]; ?>/5</i></b></span>
    </div>
  </div>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<h4>TOP MOVIES</h4>
<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" id="top">
  <div class="row">
    <div onclick="show(1,12)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[12];?>">
      <span style="color: white"><b><i><?php echo $movieName[12]; ?><br>
        <?php echo $movie_rating[12]; ?></i></b></span>
    </div>
    <div onclick="show(1,13)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[13];?>">
      <span style="color: white"><b><i><?php echo $movieName[13]; ?><br>
        <?php echo $movie_rating[13]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,14)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[14];?>">
      <span style="color: white"><b><i><?php echo $movieName[14]; ?><br>
        <?php echo $movie_rating[14]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,15)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[15];?>">
      <span style="color: white"><b><i><?php echo $movieName[15]; ?><br>
        <?php echo $movie_rating[15]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,16)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[16];?>">
      <span style="color: white"><b><i><?php echo $movieName[16]; ?><br>
        <?php echo $movie_rating[16]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,17)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[17];?>">
      <span style="color: white"><b><i><?php echo $movieName[17]; ?><br>
        <?php echo $movie_rating[17]; ?>/5</i></b></span>
    </div>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container" id="top">
  <div class="row">
    <div onclick="show(1,18)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[18];?>">
      <span style="color: white"><b><i><?php echo $movieName[18]; ?><br>
        <?php echo $movie_rating[18]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,19)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[19];?>">
      <span style="color: white"><b><i><?php echo $movieName[19]; ?><br>
        <?php echo $movie_rating[19]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,20)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[20];?>">
      <span style="color: white"><b><i><?php echo $movieName[20]; ?><br>
        <?php echo $movie_rating[20]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,21)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[21];?>">
      <span style="color: white"><b><i><?php echo $movieName[21]; ?><br>
        <?php echo $movie_rating[21]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,22)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[22];?>">
      <span style="color: white"><b><i><?php echo $movieName[22]; ?><br>
        <?php echo $movie_rating[22]; ?>/5</i></b></span>
    </div>
    <div onclick="show(1,23)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie_link[23];?>">
      <span style="color: white"><b><i><?php echo $movieName[23]; ?><br>
        <?php echo $movie_rating[23]; ?>/5</i></b></span>
    </div>
  </div>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" id="one" href="#carouselExampleControls1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" id="two" href="#carouselExampleControls1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br>
<br>



 <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>



<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script type="text/javascript" src="mainpage.js"></script>
<script type="text/javascript">
function show(t,n){
    $.ajax({
            type: "POST",
            url: 'show_data.php',
            async: false,
            data: {n: n,t: t},
            success: function(data)
            {
              if(data.slice(-1)[0] == 0)
              {
                window.location="inter.php?x="+data;
              }
              else if(data.slice(-1)[0] == 1)
              {
                window.location="mainlog.php?x="+data;
              }
            },
            error: function() {
              // body...
              alert("ERROR");
            }
        });
}


// function on() {
//     document.getElementById("login1").style.display = "block";
// }

// function off() {
//     document.getElementById("login1").style.display = "none";
// }


</script>


</body>
  </html>

