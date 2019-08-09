<?php
  // include 'mainpage.php';
  include 'login.php';
  session_destroy();
  header('location:mainpage.php');

 ?>
