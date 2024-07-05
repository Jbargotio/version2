<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded correct password for demonstration
    $correct_password = "123456";

    // Retrieve the posted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the password is correct
    if ($password == $correct_password) {
        echo "Login successful";
    } else {
        echo "Login unsuccessful";
    }
} else {
    echo "Invalid request method.";
}
