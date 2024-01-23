<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "movieoom";

$conn = mysqli_connect($server,$username,$pass,$db);

if(mysqli_connect_errno()){
    echo "Failed to connect mySQL.";
}

?>