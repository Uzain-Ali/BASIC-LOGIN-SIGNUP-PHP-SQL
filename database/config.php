<?php


    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "registration";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("Connection Error". mysqli_connect_error());
        }

?>