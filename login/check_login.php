<?php

require_once('../connect/db.php');


if (isset($_POST['username']) && isset($_POST['password'])) { 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($conn, $sql); 

    if (mysqli_num_rows($result) > 0) { 
        header("Location: ../index.php");
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Missing data.";
}

?>