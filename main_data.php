<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
$movieName = array();
$movie_link = array();
$link = array();
$movie_rating= array();




// $p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select movie_name,movie_link,rating from movie";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result))
{
	array_push($movieName,$row["movie_name"]);
	array_push($movie_link,$row["movie_link"]);
	array_push($movie_rating,$row["rating"]);
}
mysqli_close($conn);
?>