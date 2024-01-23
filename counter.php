<?php include('header.php');
if(isset($_SESSION['login']) && $_SESSION['login'] === true){
    if (isset($_SESSION['uname'])) {
      $uname = $_SESSION['uname'];
  }
}else{
    header('login.php');
}
$seats = $_SESSION['seats'];
$method = $_SESSION['payment_method'];
$total = $_SESSION['total'];
$timeslot = $_SESSION['time'];
$date = $_SESSION['date'];
$movie = $_SESSION['movie'];
$package = $_SESSION['packages'];
$db = $_SESSION['db'];
?>

<!DOCTYPE html>
<html>
    <head>
        <style>

            body{
                background-color: black;
                font-family: 'Poppins', sans-serif;
            }

            .alert-success {
                --bs-alert-color: var(--bs-success-text-emphasis);
                --bs-alert-bg: var(--bs-success-bg-subtle);
                --bs-alert-border-color: var(--bs-success-border-subtle);
                --bs-alert-link-color: var(--bs-success-text-emphasis);
                width: 300px;
                height: 350px;
                font-size: 20px;
            }

            .container{
                width: 100%;
                height: 100%;
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 120px;
                margin-bottom: 160px;
                text-align: center;
                
            }

            .spinner-border{
                margin-top: 50px;
                margin-bottom: 50px;
                width: 60px;
                height: 60px;
            }

            </style>
</head>
        <body>
        <div class="container">
        <div class="alert alert-success" role="alert">
            Booked successfully!!<br>
            Please pay within 72 hours or the ticket will be cancel.<br>
            <div class="spinner-border text-success" role="status">
            <span class="visually-hidden">Loading...</span>
            </div>
            <br>You will be redirect soon..
        </div>  
</div>
<script>
        setTimeout(function () {
            window.location.href = 'payment.php'; 
        }, 10000);
    </script>
</body>
</html>
<?php include('footer.php');?>