<?php
        session_start();
        include("connect.php");

        $email = $_POST['email'];
        $password = $_POST['password'];
        // $password = md5($password);
        
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        
        $results = $conn->query($query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
              header('location: index.html');
            echo "Logged In";
            exit();
        } else
            echo "Wrong username/password combination";

?> 
      