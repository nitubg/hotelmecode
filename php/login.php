<!-- <?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
    //    if(isset($_SESSION['email'])){
    //     $email=$_SESSION['email'];
    //     $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
    //     while($row=mysqli_fetch_array($query)){
    //         echo $row['firstName'].' '.$row['lastName'];
    //     }
    //    }
    //    ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html> -->


<?php 

include 'connect.php';


if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password) ;
    
    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: <php/login.php");
     exit();
    }
    else{
     echo "Not Found, Incorrect Email or Password";
    }
 
 }
 ?>