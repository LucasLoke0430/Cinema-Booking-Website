<?php
include('conn.php');
session_start();
$seats = $_SESSION['seats'];
$method = $_SESSION['payment_method'];
$total = $_SESSION['total'];
$timeslot = $_SESSION['time'];
$date = $_SESSION['date'];
$movie = $_SESSION['movie'];
$db = $_SESSION['db'];
$package = $_SESSION['packages'];

if (isset($_POST['submit'])) {
    

    if (!preg_match("/^[0-9]{3}$/", $_POST['password'])) {
        // Invalid CVV
        $_SESSION['alertcard'] = "<script>alert('Invalid CVV');</script>";
        header('Location:creditcard.php');

    }else if (!preg_match("/^[0-9]{16}$/", $_POST['card'])){
        
            // Invalid card number
            $_SESSION['alertcard'] = "<script>alert('Invalid Card Number');</script>";
            header('Location:creditcard.php');

        }else{
            header('Location:payment.php');
        }
    }

    

?>
