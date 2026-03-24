<?php
session_start();

if($_SESSION['role'] != 'student'){
    header("Location: ../auth/login.php");
}
?>

<h2>Student Dashboard</h2>
<p>Welcome Student</p>


<?php
// Check if user is logged in
if(!isset($_SESSION['role'])){
    header("Location: ../auth/login.php");
    exit();
}

// Check if user is student
if($_SESSION['role'] != 'student'){
    header("Location: ../auth/login.php");
    exit();
}
?>

<?php include("../includes/navbar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">

    <div class="marquee">
    <div class="track">
        Welcome, Student 🎓 — Access your learning materials here!
    </div>
</div>

        <ul>
            <ul>
    <li>📚 <a href="view_course.php">View Courses</a></li>
    <li>🚪 <a href="../auth/logout.php">Logout</a></li>
</ul>
        </ul>
    </div>

</div>

</body>
</html>