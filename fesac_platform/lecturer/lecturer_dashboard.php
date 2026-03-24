<?php
session_start();

if($_SESSION['role'] != 'lecturer'){
    header("Location: ../auth/login.php");
}
?>

<h2>Lecturer Dashboard</h2>
<p>Welcome Lecturer</p>



<?php

// Check if user is logged in
if(!isset($_SESSION['role'])){
    header("Location: ../auth/login.php");
    exit();
}

// Check if user is lecturer
if($_SESSION['role'] != 'lecturer'){
    header("Location: ../auth/login.php");
    exit();
}
?>

<?php include("../includes/navbar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Lecturer Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">

    <div class="marquee">
    <div class="track">
        Welcome, Lecturer 🎉 — Manage your course materials easily!
    </div>
</div>

          <ul>
    <li>📤 <a href="upload.php">Upload Materials</a></li>
    <li>📁 <a href="manage_files.php">Manage Materials</a></li>
    <li>🚪 <a href="../auth/logout.php">Logout</a></li>
        </ul>
    </div>

</div>

</body>
</html>