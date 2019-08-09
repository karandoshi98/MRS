<?php
include 'main_data.php';
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
$name = array();
$link = array();
$n=-1;

// $p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $type=-1;
//$n=-1;

$type = $_POST['t'];
$n = $_POST['n'];


if(isset($_SESSION['recepient']))
{
	if($n!=-1)
	{
		$sql="select actor1_link,actor2_link,d_link,genre from movie where movie_name like '$movieName[$n]' and type = '$type'";
		$result = $conn->query($sql);
		$row = mysqli_fetch_array($result);	
		array_push($link,$row["actor1_link"]);
		array_push($link,$row["actor2_link"]);
		array_push($link,$row["d_link"]);
		array_push($link,$row["genre"]);
		echo $movie_link[$n];
		echo "$$";
		echo $link[0];
		echo "$$";
		echo $link[1];
		echo "$$";
		echo $link[2];
		echo "$$";
		echo $link[3];
		echo "$$";
		echo "0";
	}
}
else
{
	if($n!=-1)
	{
		$sql="select actor1_link,actor2_link,d_link,genre from movie where movie_name like '$movieName[$n]' and type = '$type'";
		$result = $conn->query($sql);
		$row = mysqli_fetch_array($result);	
		array_push($link,$row["actor1_link"]);
		array_push($link,$row["actor2_link"]);
		array_push($link,$row["d_link"]);
		array_push($link,$row["genre"]);
		echo $movie_link[$n];
		echo "$$";
		echo $link[0];
		echo "$$";
		echo $link[1];
		echo "$$";
		echo $link[2];
		echo "$$";
		echo $link[3];
		echo "$$";
		echo "1";
	}
}

mysqli_close($conn);
?>