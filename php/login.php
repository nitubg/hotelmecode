<!-- <?php
        session_start();
        include("connect.php");

        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        
        $results = $conn->query($query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            //   header('location: index.php');
            echo "Logged In";
            exit();
        } else
            echo "Wrong username/password combination";

?>
        // <!DOCTYPE html>
        // <html lang="en">
        // <head>
        //     <meta charset="UTF-8">
        //     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        //     <title>Homepage</title>
        // </head>
        // <body>
        //     <div style="text-align:center; padding:15%;">
        //       <p  style="font-size:50px; font-weight:bold;">
        //        Hello  
        //    if(isset($_SESSION['email'])){
        //     $email=$_SESSION['email'];
        //     $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        //     while($row=mysqli_fetch_array($query)){
        //         echo $row['firstName'].' '.$row['lastName'];
        //     }
        //    }
        //     //    
        
//        :)
//       </p>
//       <a href="logout.php">Logout</a>
//     </div>
// </body>
// </html> -->

<!-- 
// include 'connect.php';

// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "login";
// $conn = new mysqli($host, $user, $pass, $db);
// if ($conn->connect_error) {
//     echo "Failed to connect DB" . $conn->connect_error;
// }



// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $sql = "select * from login where email = '$email' and password = '$password'";
//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//     $count = mysqli_num_rows($result);

//     if ($count == 1) {
//         // header("location: index.html");
//         echo 'logged in!!';
//     } else {
//         echo  'Invalied Info';
//     }
// }


//if(isset($_POST['login'])){


/* if (empty($email)) {
        array_push($errors, "email/phone no is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }*/


// }
//  } -->

<!-- // $result=$conn->query($sql);
// if($result->num_rows>0){
//  session_start();
//  $row=$result->fetch_assoc();
//  $_SESSION['email']=$row['email'];
// //  header("Location: <php/login.php");
//  echo "Logged In";
//  exit();
// }
// else{
//  echo "Not Found, Incorrect Email or Password";
// }
 -->
