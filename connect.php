<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "Question-Answer-Platform-master";

    $conn = mysqli_connect($server,$user,$password,$db);
    if(!$conn){
        die("Connection Failed ". mysqli_connect_error());
    }
?>
