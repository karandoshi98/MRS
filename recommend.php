<?php

$content =     file_get_contents("http://127.0.0.1:5000/todo/api/v1.0/tasks");

$result1  = json_decode($content);

$r=array_unique($result1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
$name = array();
$link = array();


// $p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$count = 12/sizeof($r);
$movie = array();
$mname = array();
$mrating= array();

foreach ($r as $value) {
    $sql="select movie_link,movie_name,rating from movie where g_main like '$value' limit $count";
	$result = $conn->query($sql);
	while($row = mysqli_fetch_array($result))
	{
		array_push($movie,$row["movie_link"]);
		array_push($mname,$row["movie_name"]);
		array_push($mrating,$row["rating"]);
	}
}

mysqli_close($conn);
?>