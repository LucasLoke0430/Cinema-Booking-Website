<?php
require('conn.php');
    session_start();
    $seats = $_SESSION['seats'];
    $method  = $_SESSION['payment_method'];
    $timeslot = $_SESSION['time'];
    $date = $_SESSION['date'];
    $total = $_SESSION['total'];
    $movie = $_SESSION['movie'];
    $package = $_SESSION['packages'];
    $db = $_SESSION['db'];
    if (isset($_SESSION['uname'])) {
        $uname = $_SESSION['uname'];
    }
    $query = "INSERT INTO $db VALUES(null,'$seats',1,'$uname','$movie','$method','$total','$date','$timeslot','$package')";
    $result = mysqli_query($conn,$query);
    if($result){
        echo "seats booked..";
    }else{
        echo "error";
    }

mysqli_close($conn);
header('Location:myticket.php');
?>