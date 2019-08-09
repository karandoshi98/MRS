<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
$link = array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $name=$_POST['name'];
  $sql="select movie_link from movie where movie_name like '$name'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result); 
  array_push($link,$row["movie_link"]);
  if(empty($link[0])){
    echo 1;
    // header("location: search.php");

	}
  else{
    echo $link[0];
  }

mysqli_close($conn);
?>