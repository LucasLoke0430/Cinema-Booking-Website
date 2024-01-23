<?php
session_start();
$seats = $_SESSION['seats'];
$method = $_SESSION['payment_method'];
$total = $_SESSION['total'];
$timeslot = $_SESSION['time'];
$date = $_SESSION['date'];
$movie = $_SESSION['movie'];
$db = $_SESSION['db'];
$package = $_SESSION['packages'];
if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
}

if(isset($_SESSION['alertcard'])){
    $errorcard = $_SESSION['alertcard'];
    echo $errorcard;
    unset($_SESSION['alertcard']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="credit.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="checkcredit.php" method="post">
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" name="owner" id="owner" required>
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" name="password" id="password" required>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" name="card" id="card" required>
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Card Number</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="vi.png" alt="">
                </div>
            </div>    
        </div>
        <button class="btn" name="submit" id="submit">Submit</button><br>
        <h3>Total Amount: RM <?php echo $total;?></h3>
    </div>
</form>
</body>
</html>