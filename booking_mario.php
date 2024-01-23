<?php require('conn.php');
include('header.php');
if(isset($_SESSION['login']) && $_SESSION['login'] === true){
  if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
}
  }else{
  header('Location:login.php');
  }

if(isset($_POST['timeslot'])){
  $_SESSION['time'] = $_POST['timeslot'];
  $time = $_SESSION['time'];
}

if(isset($_POST['selected_date'])){
  $_SESSION['date'] = $_POST['selected_date'];
  $date = $_SESSION['date'];
}

if(isset($_POST['package'])){
  $_SESSION['packages'] = $_POST['package'];
  $package = $_SESSION['packages'];
  $selectedPackage = $_POST['package'];
        $_SESSION['selected_package'] = $selectedPackage;
        if ($selectedPackage === 'IMAX') {
            $_SESSION['selected_package_price'] = 30;
        } elseif ($selectedPackage === 'Classic') {
            $_SESSION['selected_package_price'] = 20;
        } elseif ($selectedPackage === 'Beanie') {
            $_SESSION['selected_package_price'] = 25;
        }
        $price = $_SESSION['selected_package_price'];
}


  $_SESSION['db'] = 'seat_mario';
  $_SESSION['movie'] = "The Super Mario Bros. Movie";

?>

<!DOCTYPE html>
<link rel="stylesheet" href="path/to/fontawesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<html>
    <head>
    <title>Please Select Seats</title>
<style>
    body {
      background-image: url("mario.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }

    .font{
        font-size: 18px;
    }

    .screen {
        background-color: #fff;
        height: 70px;
        width: 100%;
        margin: 15px 0;
        transform: rotateX(-48deg);
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.75);
    }

    #selected-seats {
      display: inline-block;
      padding: 10px;
      width: 500px; /* Set a fixed width for the element */
      text-align: center;
      background-color: lightgray;
      color: black;
      font-weight: bold;
    }

    .movie-details {
      font-size: 24px;
      margin-top: 10px;
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      text-shadow: -1px -1px 0 #000, 
                    1px -1px 0 #000, 
                    -1px 1px 0 #000, 
                    1px 1px 0 #000;
    }

    .movie-desc{
        text-align: center;
    }

    .movie-image {
      max-width: 300px;
      margin-right: 20px;
      margin-top: 50px;
      margin-left: 80px;
      margin-bottom: 30px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease;
    }

    .movie-image:hover {
      transform: scale(1.1);
    }

    .movie-content {
      flex: 1;
      margin-right: 200px;
    }

    table {
      margin: 50px auto;
      border-collapse: collapse;
      text-align: center;
    }

    th, td {
      font-family: 'Poppins', sans-serif;
      padding: 5px;
    }

    th {
      font-size: 20px;

    }

    td {
      font-size: 18px;
    }

    input[type=checkbox] {
      position: relative;
      cursor: pointer;
      width: 20px;
      height: 20px;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      outline: none;
    }

    input[type=checkbox]:before {
       content: "";
       display: block;
       position: absolute;
       width: 20px;
       height: 20px;
       top: 0;
       left: 0;
       background-color:#e9e9e9;
       border: 1px solid black;
       
    }

    input[type=checkbox]:checked:before {
       content: "";
       display: block;
       position: absolute;
       width: 20px;
       height: 20px;
       top: 0;
       left: 0;
       background-color:rgb(28, 156, 67);
    }
    
    input[type=checkbox]:checked:after {
        content: "";
        display: block;
        width: 20px;
        height: 20px;
        position: absolute;
        top: 0px;
        left: 0px;
    }

    input[type=checkbox]:disabled:after{
        content: "";
        display: block;
        position: absolute;
        cursor: none;
        width: 20px;
        height: 20px;
        top: 0;
        left: 0;
        background-color: red;
    }

    .disabledd{
        display: inline-block;
        cursor: none;
        width: 20px;
        height: 20px;
        background-color: red;
    }

    .empty{
        display: inline-block;
        cursor: none;
        width: 20px;
        height: 20px;
        background-color: #e9e9e9;
        border: 1px solid black;
    }

    .selected{
        display: inline-block;
        cursor: none;
        width: 20px;
        height: 20px;
        background-color: rgb(28, 156, 67);
    }

    input[type="submit"] {
      font-family: 'Poppins', sans-serif;
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: #1c9c43;
      color: #fff;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #0a6e2a;
    }

    /*decoration*/

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .section{
        margin-right: 50px;
        perspective: 1000px;
    }

    .section-title {
      font-size: 36px;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .section-description {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .divider {
      width: 100%;
      height: 2px;
      background-color: #fff;
      margin-bottom: 30px;
    }

    .highlight {
      color: #1c9c43;
      font-weight: bold;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #1c9c43;
      color: #fff;
      font-size: 18px;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0a6e2a;
    }

    .margin{
        margin-bottom: 20px;
        text-align: center;
    }

    .payment-options {
      margin-top: 30px;
    }

    .payment-option {
      display: inline-flex;
      align-items: center;
      margin-right: 20px;
      font-size: 14px;
    }

    .payment-option input {
      margin-right: 5px;
    }

    .marginbox{
        margin-right: 50px;
    }

    .texttt{
      display: inline-block;
      margin-left: 5px;
      margin-right: 5px;
    }

    </style>
    </head>

    <body>
<div class="container">
    <div class="movie-details">
    <div class="movie-content">
    <img src="postersupermario.jpg" alt="Movie Poster" class="movie-image">
    <h2>The Super Mario Bros. Movie</h2>
      <p class="font"><i>It features an origin story for the brothers Mario and Luigi, 
      Italian-American plumbers who are transported to an alternate world and become entangled in a 
      battle between the Mushroom Kingdom, led by Princess Peach, and the Koopas, led by Bowser.</i></p>
    
    </div>
  <div class="section">
      <h2 class="section-title">Select Your Seats</h2>
      <p class="section-description">Click on the seats to choose them:</p>
      <div class="screen"></div>
        <table style="width:100%">
        <form action="method.php" method="post">
        <div class="margin">
        <div class="disabledd"></div> <div class="texttt">Unavailable</div>
        <div class="empty"></div> <div class="texttt">Empty</div>
        <div class="selected"></div> <div class="texttt">Selected</div>
  </div>
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <?php include('checkseats.php'); ?>
        <tr>
            <td>A</td>
            <td><input type="checkbox" name="seats[]" value="A-01"<?php checkkseat("A-01",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-02"<?php checkkseat("A-02",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-03"<?php checkkseat("A-03",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-04"<?php checkkseat("A-04",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-05"<?php checkkseat("A-05",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-06"<?php checkkseat("A-06",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-07"<?php checkkseat("A-07",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-08"<?php checkkseat("A-08",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-09"<?php checkkseat("A-09",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="A-10"<?php checkkseat("A-10",$bookeds); ?>></td>
        </tr>
        <tr>
            <td>B</td>
            <td><input type="checkbox" name="seats[]" value="B-01"<?php checkkseat("B-01",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-02"<?php checkkseat("B-02",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-03"<?php checkkseat("B-03",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-04"<?php checkkseat("B-04",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-05"<?php checkkseat("B-05",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-06"<?php checkkseat("B-06",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-07"<?php checkkseat("B-07",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-08"<?php checkkseat("B-08",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-09"<?php checkkseat("B-09",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="B-10"<?php checkkseat("B-10",$bookeds); ?>></td>
        </tr>
        <tr>
            <td>C</td>
            <td><input type="checkbox" name="seats[]" value="C-01"<?php checkkseat("C-01",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-02"<?php checkkseat("C-02",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-03"<?php checkkseat("C-03",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-04"<?php checkkseat("C-04",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-05"<?php checkkseat("C-05",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-06"<?php checkkseat("C-06",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-07"<?php checkkseat("C-07",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-08"<?php checkkseat("C-08",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-09"<?php checkkseat("C-09",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="C-10"<?php checkkseat("C-10",$bookeds); ?>></td>
        </tr>
        <tr>
            <td>D</td>
            <td><input type="checkbox" name="seats[]" value="D-01"<?php checkkseat("D-01",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-02"<?php checkkseat("D-02",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-03"<?php checkkseat("D-03",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-04"<?php checkkseat("D-04",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-05"<?php checkkseat("D-05",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-06"<?php checkkseat("D-06",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-07"<?php checkkseat("D-07",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-08"<?php checkkseat("D-08",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-09"<?php checkkseat("D-09",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="D-10"<?php checkkseat("D-10",$bookeds); ?>></td>
        </tr>
        <tr>
            <td>E</td>
            <td><input type="checkbox" name="seats[]" value="E-01"<?php checkkseat("E-01",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-02"<?php checkkseat("E-02",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-03"<?php checkkseat("E-03",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-04"<?php checkkseat("E-04",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-05"<?php checkkseat("E-05",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-06"<?php checkkseat("E-06",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-07"<?php checkkseat("E-07",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-08"<?php checkkseat("E-08",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-09"<?php checkkseat("E-09",$bookeds); ?>></td>
            <td><input type="checkbox" name="seats[]" value="E-10"<?php checkkseat("E-10",$bookeds); ?>></td>
        </tr>
        </table>
        <div class="divider"></div>
        <div class="payment-options">
  <p class="font">Payment Method:</p>
  <label class="payment-option">
    <input type="radio" name="payment_method" value="online_payment" checked>
    <h5>Online Payment</h5>
  </label>
  <label class="payment-option">
    <input type="radio" name="payment_method" value="pay_at_counter">
    <h5>Pay at Counter</h5>
  </label>
  <input class="btn" type="submit" name="submit" id="submit">
</div>
    </form>
</div>
    </div>
    <div class="margin">
    <p class="font">Selected seats:</p>
    <span class="highlight" id="selected-seats"></span>
</div>
    </body>
</html>
<?php include('footer.php');?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all checkboxes
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      // Get the element to display selected seats
      var selectedSeatsElement = document.getElementById('selected-seats');

      // Function to update selected seats
      function updateSelectedSeats() {
        var selectedSeats = [];
        // Loop through all checkboxes and check if they are checked
        checkboxes.forEach(function(checkbox) {
          if (checkbox.checked) {
            selectedSeats.push(checkbox.value);
          }
        });
        // Update the selected seats element with the new selected seats
        selectedSeatsElement.textContent = selectedSeats.join(', ');
      }

      // Add event listener to each checkbox
      checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
          // Call the updateSelectedSeats function when a checkbox is changed
          updateSelectedSeats();
        });
      });
    });
  </script>