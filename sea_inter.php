<?php
include 'main_data.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
$link = array();
session_start();

// $p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$type = $_POST['name'];

if(isset($_SESSION['recepient']))
{
	$sql="select * from movie where movie_name like '$type'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);
	array_push($link,$row["movie_link"]);
	array_push($link,$row["actor1_link"]);
	array_push($link,$row["actor2_link"]);
	array_push($link,$row["d_link"]);
	array_push($link,$row["genre"]);
	echo $link[0];
	echo "$$";
	echo $link[1];
	echo "$$";
	echo $link[2];
	echo "$$";
	echo $link[3];
	echo "$$";
	echo $link[4];
	echo "$$";
	echo "0";
}
else
{
	$sql="select * from movie where movie_name like '$type'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);
	array_push($link,$row["movie_link"]);
	array_push($link,$row["actor1_link"]);
	array_push($link,$row["actor2_link"]);
	array_push($link,$row["d_link"]);
	array_push($link,$row["genre"]);
	echo $link[0];
	echo "$$";
	echo $link[1];
	echo "$$";
	echo $link[2];
	echo "$$";
	echo $link[3];
	echo "$$";
	echo $link[4];
	echo "$$";
	echo "1";
}
mysqli_close($conn);
?>