<?php
include('conn.php');
$timeslot = $_SESSION['time'];
$date = $_SESSION['date'];
$package = $_SESSION['packages'];
$db = $_SESSION['db'];
$q = "SELECT seat_id FROM $db WHERE status = 1 AND time = '$timeslot' AND date = '$date' AND package = '$package'";
$qury = mysqli_query($conn,$q);
$resultt = mysqli_fetch_all($qury);

$bookedSeat= array();
foreach($resultt as $id){
    $bookedSeat[] = $id[0];
}

$booked='';
for($i=0;$i<count($bookedSeat);$i++){
    $booked = $booked .$bookedSeat[$i] . ",";
}

$bookeds = explode(",",$booked);

function checkkseat($seatiddd,$bookeds){
    $disable = '';

    foreach($bookeds as $f){
        if($seatiddd == $f){
            $disable = $disable . "disabled";
        }
    }
    echo $disable;
}

?>
