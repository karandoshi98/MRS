<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT movie_link,actor1_link,actor2_link,d_link from movie where movie_id=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	array_push($p, $row["movie_link"]);
    	array_push($p, $row["actor1_link"]);
    	array_push($p, $row["actor2_link"]);
    	array_push($p, $row["d_link"]);
        echo $row["movie_link"]. "<br>" . $row["actor1_link"]. "<br>" . $row["actor2_link"]."<br>".$row["d_link"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="$p[0]">
</body>
</html>