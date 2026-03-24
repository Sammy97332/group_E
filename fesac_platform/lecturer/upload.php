<?php
session_start();

if($_SESSION['role'] != 'lecturer'){
    header("Location: ../auth/login.php");
    exit();
}
?>

<?php include("../includes/navbar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Materials</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">

    <div class="card">
        <h2>Upload Course Material</h2>

        <form action="../includes/upload_handler.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" required>
            </div>
<div class="form-group">
    <label>Select Level</label>
    <select name="level_id" required>
        <option value="1">Level 100</option>
        <option value="2">Level 200</option>
        <option value="3">Level 300</option>
        <option value="4">Level 400</option>
    </select>
</div>

<div class="form-group">
    <label>Select Semester</label>
    <select name="semester_id" required>
        <option value="1">First Semester</option>
        <option value="2">Second Semester</option>
    </select>
</div>
            <div class="form-group">
                <label>Select File (PDF/DOCX/PPT)</label>
                <input type="file" name="file" required>
            </div>

            <button type="submit" name="upload">Upload</button>

        </form>

    </div>

</div>

</body>
</html>