<?php
function create_csv_r(){ 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT r.UID,r.movie_id,r.ratings,m.movie_id,m.genre FROM ratings r,movie m where r.movie_id=m.movie_id";
$result = $conn->query($query);
if (!$result) {
    exit(mysqli_error($con));
}

$ratings = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ratings[] = $row;
    }
}
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=ratings.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('user', 'movieId', 'ratings','genre'));

if (count($ratings) > 0) {
    foreach ($ratings as $r) {
        fputcsv($output, $r);
    }
}
mysqli_close($conn);

}

?>	