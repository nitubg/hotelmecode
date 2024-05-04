<?php

include 'connect.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    

    $checkEmail = "SELECT * From users where email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "Email Address Already Exists !";
    } else {
        $insertQuery = "INSERT INTO users(email,name,password)
                       VALUES ('$email','$name','$password')";
        if ($conn->query($insertQuery) == TRUE) {
            // header("location: login.html");
            // header(@link())
            echo "Data added;now press back and Log In";
        } else {
            echo "Error:" . $conn->error;
        }
    }
}
