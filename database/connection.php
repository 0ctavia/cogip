<?php

function dbconnect(){

    $servername = "database";
    $usernamedb = "root";
    $passworddb = "root";
    $dbname = "cogip";

    $conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname) or die ("unable to connect");
    return $conn;
}
?>
