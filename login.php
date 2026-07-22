<?php
session_start();
include "config/database.php";


if($_SERVER["REQUEST_METHOD"] =="POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            where email='$email'
            AND password='$password'";

            echo $sql;
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
                exit();
            }else{

                echo "<script>
                alert('Invalid Email or Password');
                </script>";
            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Management System</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link> <rel="preconnect" href="https://fonts.googleapis.com"> </rel=>
    <link> <rel="preconnect" href="https://fonts.gstatic.com" crossorigin> </rel=>

    <link> <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> </link>

</head>
<body>
    <div class="container"> 
        <div class="login-card">
           <img src="images/logo.png" alt="Logo" class="logo">
           <h2>ANABEEB ICT Asset Management System</h2>
           <p>Welcome Back!</p>
           <form action="" method="post"> 
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class = "login-btn" type="submit" name="login">Login</button>
           </form>
        </div>
    </div>
    

</body>
</html>