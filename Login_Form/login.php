<?php
// Simple hardcoded credentials
$valid_username = "admin";
$valid_password = "password123"; // It's recommended to use hash in production, this is just for example purposes

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login credentials
    if ($username === $valid_username && $password === $valid_password) {
        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
    } else {
        echo "Invalid username or password.";
    }
}
?>
