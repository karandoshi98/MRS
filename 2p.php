<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
// $p=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['button'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
     $conpassword = $conn->real_escape_string($_POST['conPassword']);
    // echo $conpassword;
    if(empty($email)){
        array_push($errors, "please...enter email id");
    }
    if(empty($password)){
        array_push($errors, "please...enter Password");
    }
    if(empty($conpassword)){
        array_push($errors, "please...enter Confirm Password");
    }
    if(count($errors) == 0){
        if($password == $conpassword){

            $sql1 = "select count(UID) from user";
            $result=$conn->query($sql1);
            $row = $result->fetch_assoc();
            $update =$row['count(UID)'];    

            $sql = "INSERT INTO user (UID,uname,upassword) VALUES ('$update','$email','$password')";
            if($conn->query($sql) == TRUE){
                $_SESSION['recepient']= $row["uname"];
                header('location: mainpage.php');
                exit();
            }
        }

    }
}

mysqli_close($conn);
?>