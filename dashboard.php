<?php
session_start(); // Start session

if (!isset($_SESSION['username'])) {
    // User is not logged in
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
            margin-top: 50px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>! 👋</h2>
    <p>You are now logged in.</p>
</div>

</body>
</html>
kavana 