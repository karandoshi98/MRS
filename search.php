<!DOCTYPE html>
<html>
<head>
	<title>THE PUURFECT MATCH</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="search.css">
  <link rel="stylesheet" type="text/css" href="mainpage.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!------ Include the above in your HEAD tag ---------->
</head>

<body style="background-image: url(https://cdn-images-1.medium.com/max/1200/1*PsI17WdbeL1OUyhD5H6JMQ.png);opacity: 0.96">

<div class="search-box">
    <input id="textBox" class="search-txt" type="text" name="search" placeholder="Type to search">
    <a class="search-btn" href="#">
        <i onclick="search()" class="fas fa-search"></i>
    </a>
</div>

<div id="movie" style="margin-top: 200px;
margin-left: 10%;
  width: 200px;
  height: 400px;
  display: none;">
  <img onclick="dan()" src="" id="image"
  style="width: 200px;
  height: 300px;">
  <span id="name" style="color: white;
  font-weight: bold;
  margin-top: 5px;"></span>
</div>





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
        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="2.php">Sign Up <i class="fas fa-user-plus"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" name="log" href="mainlog.php" onclick="log()">Login <i class="fas fa-user"></i></a>
      </li>
  </ul>
</div>
  </div>
</nav>
			<!-- <img src="http://www.lifewithcats.tv/wp-content/uploads/2017/05/referencecom.jpg">
 -->
 <modal id="login1" style="display: none;">
<form method="POST">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="true">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <!-- <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div> -->
				  <button name="button" type="submit" class="btn btn-primary">Submit</button>
				</form>
</modal>


 <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
document.getElementById("textBox").onkeypress = function(event){
                if (event.keyCode == 13 || event.which == 13){
                    search();
                }
            };  


function search()
  {
    name = document.getElementById('textBox').value;
img = document.getElementById('image');
movie = document.getElementById('movie');
    $.ajax({
                    type: "POST",
                    url: 'search_name.php',
                    data: {name: name},
                    success: function(data)
                    {
                        if(data==1)
                        {
                            movie.style.display= 'none';
                            alert("Sorry, No movie found");
                            $('#textBox').val("");
                        }
                        else
                        {
                            $('#image').attr('src', data);
                            $('#name').html(name);
                            $('#textBox').val("");
                            // $('img').on('click',dan());
                            movie.style.display= 'block';
                        }
                    },
                    error: function() {
                      // body...
                      alert("ERROR");
                    }
                });
  }

  function dan()
  {
    $.ajax({
      type: "POST",
      url: 'sea_inter.php',
      data: {name: name},
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
      }
    });
  }

</script>
<!-- <script type="text/javascript" src="search.js"></script> -->



</body>
</html>