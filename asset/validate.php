<?php

session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    // Get form value
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysqli_connect("localhost", "root", "", "weaveproject") or die(mysql_error($connection));
        if ($connection) {

            $query = mysqli_query($connection, "select * from user where password='$password' AND username='$username'") or die(mysql_errno($connection));
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                $_SESSION['loginuser'] = $username; // Initializing Session
                header("location: ../account.php"); // Redirecting To Other Page
            } else {
                $error = "Username or Password is invalid";
            }
        }
    } else {
        header("location: ../login.php");
       
    }
    
    mysql_close($connection); // Closing Connection
    echo "User not found";
}

