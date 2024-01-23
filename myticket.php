<?php include('header.php');
if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
}else{
  header('Location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    .title{
      text-align: center;
      margin-top: 10px;
    }
    .title2{
      text-align: center;
      margin-top: 20px;
      margin-bottom: 500px;
    }

    h2{
      margin-top: 30px;
    }

    .ticket-container {
      width: 40%;
      margin: 20px auto;
      background-color: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      color: white;
      padding: 20px;
      border-radius: 20px;

    }

    .ticket-container h3 {
      margin-bottom: 10px;
    }

    .ticket-container .cancel-button {
      background-color: red;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    label{
      color: black;
      font-weight: bold;
      font-size: 20px;
    }

    .cancel-button{
      text-decoration: none;
    }
    .cancel-button:hover {
      background-color: darkred;
    }

    .font{
      font-size: 30px;
    }


  </style>
</head>
<body>
<?php
if (isset($_GET['cancel_success']) && $_GET['cancel_success'] == 1) {
    ?>
    <div class="container mt-3">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Ticket cancellation successful!
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <?php
}
?>
<div class="title">
  <h2>Ticket Information</h2>
</div>

<?php
include('conn.php');
$sql = "SELECT * FROM seat_spider WHERE username = '$uname'";
$sql2 = "SELECT * FROM seat_john WHERE username = '$uname'";
$sql3 = "SELECT * FROM seat_mario WHERE username = '$uname'";
$sql4 = "SELECT * FROM seat_ant WHERE username = '$uname'";

$query = mysqli_query($conn, $sql4);
if (mysqli_num_rows($query) > 0) {
    while ($ticket = mysqli_fetch_assoc($query)) {
        echo '<div class="ticket-container">';
        echo '<label class="font">Ticket ID: ' . $ticket['id'] . '</label><br>';
        echo '<label>Movie Name: ' . $ticket['moviename'] . '</label><br>';
        echo '<label>Seat Number: ' . $ticket['seat_id'] . '</label><br>';
        echo '<label>Price: RM ' . number_format($ticket['price'], 2) . '</label><br>';
        echo '<label>Payment Method: ' . $ticket['paymentmethod'] . '</label><br>';
        echo '<label>Date: ' . $ticket['date'] . '</label><br>';
        echo '<label>Time: ' . $ticket['time'] . '</label><br>';
        echo '<label>Package: ' . $ticket['package'] . '</label><br><br>';
        
        ?><form action="cancel.php" method="post"><?php
        ?>
        <input type="hidden" name="ticket_id" value="<?php echo $ticket['id']; ?>">
        <input type="hidden" name="ticket_movie" value="<?php echo $ticket['moviename']; ?>">
        <input type="hidden" name="ticket_seat" value="<?php echo $ticket['seat_id']; ?>">
        <input type="hidden" name="ticket_date" value="<?php echo $ticket['date']; ?>">
        <input type="hidden" name="ticket_time" value="<?php echo $ticket['time']; ?>">
        <input type="hidden" name="ticket_package" value="<?php echo $ticket['package']; ?>">
        <?php
        echo '<button type="submit" class="cancel-button">Cancel</button>';
        
        echo '</div>';
        ?></form><?php
    }
} else {
  
}

$query = mysqli_query($conn, $sql3);
if (mysqli_num_rows($query) > 0) {
    while ($ticket = mysqli_fetch_assoc($query)) {
        echo '<div class="ticket-container">';
        echo '<label class="font">Ticket ID: ' . $ticket['id'] . '</label><br>';
        echo '<label>Movie Name: ' . $ticket['moviename'] . '</label><br>';
        echo '<label>Seat Number: ' . $ticket['seat_id'] . '</label><br>';
        echo '<label>Price: RM ' . number_format($ticket['price'], 2) . '</label><br>';
        echo '<label>Payment Method: ' . $ticket['paymentmethod'] . '</label><br>';
        echo '<label>Date: ' . $ticket['date'] . '</label><br>';
        echo '<label>Time: ' . $ticket['time'] . '</label><br>';
        echo '<label>Package: ' . $ticket['package'] . '</label><br><br>';
        
        ?><form action="cancel.php" method="post"><?php
        ?>
        <input type="hidden" name="ticket_id" value="<?php echo $ticket['id']; ?>">
        <input type="hidden" name="ticket_movie" value="<?php echo $ticket['moviename']; ?>">
        <input type="hidden" name="ticket_seat" value="<?php echo $ticket['seat_id']; ?>">
        <input type="hidden" name="ticket_date" value="<?php echo $ticket['date']; ?>">
        <input type="hidden" name="ticket_time" value="<?php echo $ticket['time']; ?>">
        <input type="hidden" name="ticket_package" value="<?php echo $ticket['package']; ?>">
        <?php
        echo '<button type="submit" class="cancel-button">Cancel</button>';
        
        echo '</div>';
        ?></form><?php
    }
} else {
  
}

$query = mysqli_query($conn, $sql2);
if (mysqli_num_rows($query) > 0) {
    while ($ticket = mysqli_fetch_assoc($query)) {
        echo '<div class="ticket-container">';
        echo '<label class="font">Ticket ID: ' . $ticket['id'] . '</label><br>';
        echo '<label>Movie Name: ' . $ticket['moviename'] . '</label><br>';
        echo '<label>Seat Number: ' . $ticket['seat_id'] . '</label><br>';
        echo '<label>Price: RM ' . number_format($ticket['price'], 2) . '</label><br>';
        echo '<label>Payment Method: ' . $ticket['paymentmethod'] . '</label><br>';
        echo '<label>Date: ' . $ticket['date'] . '</label><br>';
        echo '<label>Time: ' . $ticket['time'] . '</label><br>';
        echo '<label>Package: ' . $ticket['package'] . '</label><br><br>';
        
        ?><form action="cancel.php" method="post"><?php
        ?>
        <input type="hidden" name="ticket_id" value="<?php echo $ticket['id']; ?>">
        <input type="hidden" name="ticket_movie" value="<?php echo $ticket['moviename']; ?>">
        <input type="hidden" name="ticket_seat" value="<?php echo $ticket['seat_id']; ?>">
        <input type="hidden" name="ticket_date" value="<?php echo $ticket['date']; ?>">
        <input type="hidden" name="ticket_time" value="<?php echo $ticket['time']; ?>">
        <input type="hidden" name="ticket_package" value="<?php echo $ticket['package']; ?>">
        <?php
        echo '<button type="submit" class="cancel-button">Cancel</button>';
        
        echo '</div>';
        ?></form><?php
    }
} else {
  
}

$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($ticket = mysqli_fetch_assoc($query)) {
        echo '<div class="ticket-container">';
        echo '<label class="font">Ticket ID: ' . $ticket['id'] . '</label><br>';
        echo '<label>Movie Name: ' . $ticket['moviename'] . '</label><br>';
        echo '<label>Seat Number: ' . $ticket['seat_id'] . '</label><br>';
        echo '<label>Price: RM ' . number_format($ticket['price'], 2) . '</label><br>';
        echo '<label>Payment Method: ' . $ticket['paymentmethod'] . '</label><br>';
        echo '<label>Date: ' . $ticket['date'] . '</label><br>';
        echo '<label>Time: ' . $ticket['time'] . '</label><br>';
        echo '<label>Package: ' . $ticket['package'] . '</label><br><br>';
        
        ?><form action="cancel.php" method="post"><?php
        ?>
        <input type="hidden" name="ticket_id" value="<?php echo $ticket['id']; ?>">
        <input type="hidden" name="ticket_movie" value="<?php echo $ticket['moviename']; ?>">
        <input type="hidden" name="ticket_seat" value="<?php echo $ticket['seat_id']; ?>">
        <input type="hidden" name="ticket_date" value="<?php echo $ticket['date']; ?>">
        <input type="hidden" name="ticket_time" value="<?php echo $ticket['time']; ?>">
        <input type="hidden" name="ticket_package" value="<?php echo $ticket['package']; ?>">
        <?php
        echo '<button type="submit" class="cancel-button">Cancel</button>';
        
        echo '</div>';
        ?></form><?php
    }
} else {
  
}


?>

</body>
</html>

<?php include('footer.php'); ?>
