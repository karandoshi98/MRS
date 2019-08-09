
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrs";
$errors = array();
// $p=array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

echo "<script type='text/javascript'> x=window.location.href; x=x.slice(34);
    arr = x.split('$$'); </script>";

   if(isset($_POST['button'])){
        $email = $conn->real_escape_string($_POST['email']);
        $password1 = $conn->real_escape_string($_POST['password']);
        if(empty($email)){
            array_push($errors, "Email ID is required");
        }
        if(empty($password1)){
            array_push($errors, "Password is required");
        }
        if(count($errors) == 0){
            session_start();

            $pass = $password1;
            $sql = "select uname from user where uname like '$email' and upassword like '$pass'";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $_SESSION['recepient']= $row["uname"];
                if(isset($_SESSION['recepient']))
                {
                    header('location:mainpage.php');
                }
                exit();
            } 
            else 
            {    
                array_push($errors, "Email Id/Password is invalid");

                echo "<script type='text/javascript'>alert('Email Id/Password is invalid');</script>";
                // echo "Email Id/Password is invalid";
            }
        }   
    }
?>