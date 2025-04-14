<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; // Consider hashing the password later for security

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "login_system");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Account created successfully. You can <a href='login.html'>login</a> now.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
