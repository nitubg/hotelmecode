<?php

include 'connect.php';

if (isset($_POST['booknow'])) {
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guestno = $_POST['guestno'];
    $roomno = $_POST['roomno'];
    $roomtype = $_POST['roomtype'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $arrivaltime = $_POST['arrivaltime'];
    
    // $password = md5($password);

    $checkName = "SELECT * From booking where name='$name'";
    $result = $conn->query($checkName);
    if ($result->num_rows > 0) {
        echo "Log In First!!!Press Back Button.";
    } else {
        $insertQuery = "INSERT INTO booking(checkin,checkout,guestno,roomno,roomtype,name,phone,arrivaltime)
                       VALUES ('$checkin','$checkout','$guestno','$roomno','$roomtype','$name','$phone','$arrivaltime')";
        if ($conn->query($insertQuery) == TRUE) {
            // header("location: login.html");
            // header(@link() )
            
            echo "Room Booked";
        } else {
            echo "Error:" . $conn->error;
        }
    }
}