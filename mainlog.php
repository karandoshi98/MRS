<?php include ('login.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>THE SECOND PAGE</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="2.css">
  <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
</head>
<body style="opacity: 0.96;background-image: url(https://cdn.shopify.com/s/files/1/0278/7891/products/IDCWP-JB-000894-2_1024x1024.jpg?v=1513510583);">

<nav class="navbar fixed-top navbar-expand-lg bg-dark">
    <div class="container">
  <a class="navbar-brand" href="mainpage.php"><img style="width: 40px; height: 40px;" src="https://www.iconsdb.com/icons/preview/white/theatre-masks-xxl.png"> MovRec</a>
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
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <div id="TextBoxDiv" style="display: none;">
  <input type='textbox' id='textbox1' >
  </div>
    
    <li class="nav-item active">
        <a class="nav-link" href="2.php">Sign Up <i class="fas fa-user-plus"></i></a>
      </li>
      
  </ul>
  </div>
  </div>
</nav>
<!-- <h1><strong>Register Yourself</strong></h1>
 -->
 <div class="jumbotron" style="width: 30%;
  height: 400px;
  margin-top: 12%;
  margin-left: 36%; border: 2px solid #3a2424; border-radius: 30px;">
  <form method="POST" style="margin-top: 20px;">
    <div class="form-group">
      <label for="inputEmail">Email ID </label>
      <input  name="email" type="email" class="form-control" id="inputName" placeholder="Email..." required="true">
    </div>
  <div class="form-group">
    <label for="inputPassword">Password: </label>
    <input name="password" type="password" class="form-control" id="inputAddress" placeholder="Password...">
  </div>
    
  <button name="button" class="btn btn-primary" style="margin-left: 40%;">Login</button>
</form>
</div>

<script type="text/javascript" src="2.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<!-- <script type="text/javascript" src="https://unpkg.com/popper.js"></script>
<script type="text/javascript" src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script> -->
<script src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="2.js"></script>
</body>
</html>