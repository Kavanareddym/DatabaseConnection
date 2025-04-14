<?php
session_start(); // Start the session

// Receive form values
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'login_system');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check username and password in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// If user found
if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username; // Save username to session
    header("Location: dashboard.php"); // Redirect to dashboard
    exit();
} else {
    echo "Invalid username or password.";
}

?>
