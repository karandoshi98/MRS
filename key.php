<?php
session_start();
include 'main_data.php';
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

 
$key = -1;
$key = $_POST['key'];
$arr = $_POST['arr'];
if($key==1)
{
	$sql1="select movie_link from movie where actor1_link like '$arr'";
	$result = $conn->query($sql1);
	while($row = mysqli_fetch_array($result))
	{
		echo $row['movie_link'];
		echo "$$";
	}	
	
}
else if($key==2)
{
	$sql1="select movie_link from movie where actor2_link like '$arr'";
	$result = $conn->query($sql1);
	while($row = mysqli_fetch_array($result))
	{
		echo $row['movie_link'];
		echo "$$";
	}

	// $name=Array();
	// $sql="select actor2_name from movie where actor1_link like '$arr'";
	// $result = $conn->query($sql);
	// $row = mysqli_fetch_array($result);	
	// array_push($name,$row["actor2_name"]);
	// $sql1="select * from actor where actor_name like '$name[0]'";
	// $result = $conn->query($sql);
	// $row = mysqli_fetch_array($result);	
	// unset($link); // $foo is gone
	// $link = array();
	// array_push($link,$row["movie1_link"]);
	// array_push($link,$row["movie2_link"]);
	// array_push($link,$row["movie3_link"]);
	// array_push($link,$row["movie4_link"]);
	// echo $link[0];
	// echo "$$";
	// echo $link[1];
	// echo "$$";
	// echo $link[2];
	// echo "$$";
	// echo $link[3];
	// echo "$$";
}
else if($key==3)
{
	$sql="select * from movie where d_link like '$arr'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);	
	array_push($name,$row["d_name"]);
	$sql1="select * from director where d_name like '$name[0]'";
	$result1 = $conn->query($sql1);
	$row1 = mysqli_fetch_array($result1);	
	unset($link); // $foo is gone
	$link = array();
	array_push($link,$row1["movie1_link"]);
	array_push($link,$row1["movie2_link"]);
	array_push($link,$row1["movie3_link"]);
	array_push($link,$row1["movie4_link"]);
	echo $link[0];
	echo "$$";
	echo $link[1];
	echo "$$";
	echo $link[2];
	echo "$$";
	echo $link[3];
	echo "$$";
}
else if($key==4)
{
	$sql="select movie_link from movie where genre like '$arr'";
	$result = $conn->query($sql);
	while($row = mysqli_fetch_array($result))
	{
		echo $row['movie_link'];
		echo "$$";
	}
}


mysqli_close($conn);
?>


