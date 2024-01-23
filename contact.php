<?php
include('conn.php');
session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $sql = "INSERT INTO contact(name, email, message) VALUES('$name','$email','$msg')";
    $result = mysqli_query($conn,$sql);
    if($result){
    $_SESSION['form'] = true;
    header('Location:movie.php#contact');
    }else{
        echo "something wrong";
    }

?>