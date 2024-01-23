<?php include('conn.php');

if (isset($_POST['ticket_id'])) {
    $ticket_id = $_POST['ticket_id'];
    $ticket_movie = $_POST['ticket_movie'];
    $ticket_seat = $_POST['ticket_seat'];
    $ticket_date = $_POST['ticket_date'];
    $ticket_time = $_POST['ticket_time'];
    $ticket_package = $_POST['ticket_package'];

    $sql = "DELETE FROM seat_spider
    WHERE id = '$ticket_id' 
    AND moviename = '$ticket_movie'
    AND seat_id = '$ticket_seat'
    AND date = '$ticket_date'
    AND time = '$ticket_time' 
    AND package = '$ticket_package'";

    $sql2 = "DELETE FROM seat_john
    WHERE id = '$ticket_id' 
    AND moviename = '$ticket_movie'
    AND seat_id = '$ticket_seat'
    AND date = '$ticket_date'
    AND time = '$ticket_time' 
    AND package = '$ticket_package'";

    $sql3 = "DELETE FROM seat_mario
    WHERE id = '$ticket_id' 
    AND moviename = '$ticket_movie'
    AND seat_id = '$ticket_seat'
    AND date = '$ticket_date'
    AND time = '$ticket_time' 
    AND package = '$ticket_package'";

    $sql4 = "DELETE FROM seat_ant
    WHERE id = '$ticket_id' 
    AND moviename = '$ticket_movie'
    AND seat_id = '$ticket_seat'
    AND date = '$ticket_date'
    AND time = '$ticket_time' 
    AND package = '$ticket_package'";

    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_query($conn,$sql2);
    $result3 = mysqli_query($conn,$sql3);
    $result4 = mysqli_query($conn,$sql4);

    header('Location: myticket.php?cancel_success=1');
}else{
    header('Location:movie.php');
}


?>