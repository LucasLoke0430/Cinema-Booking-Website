<?php include('header.php');
include('conn.php');
if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
}
?>
<?php
        if(isset($_POST['submit'])){
            if(empty($_POST['seats'])){
                $empty = "<script>alert('Please select at least one seat!!')</script>";
                $_SESSION['empty'] = $empty;
                header('Location:movie.php');
            }

            $selectedSeats = $_POST['seats'];
            $seats = implode(",",$_POST['seats']);
            $time = $_SESSION['time'];
            $date = $_SESSION['date'];
            $movie = $_SESSION['movie'];
            $db = $_SESSION['db'];
            $package = $_SESSION['packages'];
            $price = $_SESSION['selected_package_price'];
            
            
            if($_POST['payment_method'] == 'online_payment'){
                $_SESSION['total'] = count($selectedSeats) * $price;
                $method = "Online";
                $_SESSION['payment_method'] = $method;
                $_SESSION['seats'] = $seats;
                header("Location:creditcard.php");
            }

            if($_POST['payment_method'] == 'pay_at_counter'){
                $_SESSION['total'] = count($selectedSeats) * $price;
                $method = "Pay at counter";
                $_SESSION['payment_method'] = $method;
                $_SESSION['seats'] = $seats;
                header("Location:counter.php");
            }
            
        }

?>
<?php include('footer.php');?>