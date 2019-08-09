<?php include ('2p.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>THE SECOND PAGE</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="2.css">
  <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
</head>
<body style="background-image: url(https://cdn-images-1.medium.com/max/1600/0*VkSKWu2mROdzCCGO);opacity: 0.96">
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
    <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Sign Up <i class="fas fa-user-plus"></i></a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link" href="mainlog.php">Login <i class="fas fa-user"></i></a>
      </li>
  </ul>
  </div>
  </div>
</nav>
<!-- <h1><strong>Register Yourself</strong></h1>
 -->
 <div class="jumbotron" style="width: 30%;
  height: 10%;
  margin-top: 7%;
  margin-left: 36%;">
  <form method="POST">
    <div class="form-group">
      <label for="inputEmail">Email ID </label>
      <input  name="email" type="email" class="form-control" id="inputName" placeholder="Email..." required="true">
    </div>
  <div class="form-group">
    <label for="inputPassword">Password: </label>
    <input name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" id="inputAddress" placeholder="Password..." title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
  </div>
  <div class="form-group">
    <label for="inputConfirmPassword">Confirm Password: </label>
    <input name="conPassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" id="inputAddress2" placeholder="Confirm Password..." title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
  </div>
  <div class="form-row">
    <!-- <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div> -->
    <div class="form-group col-md-6">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>India</option>
        <option>Russia</option>
        <option>USA</option>
        <option>China</option>
        <option>UK</option>
<!--         <option>Dubai</option>
        <option>France</option>
        <option>Pakistan</option>
        <option>Rome</option> -->
      </select>
    </div>
    <!-- <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div> -->
  </div>
  <button name="button" class="btn btn-primary">Sign in</button>
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