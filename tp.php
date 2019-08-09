<?php
$content =     file_get_contents("http://127.0.0.1:5000/todo/api/v1.0/tasks");

$result  = json_decode($content);

print_r( $result );
?>