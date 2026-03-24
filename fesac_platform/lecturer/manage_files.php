

<?php
session_start();


include("../config/db.php");


if($_SESSION['role'] != 'lecturer'){
    header("Location: ../auth/login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$level_id = isset($_GET['level_id']) ? $_GET['level_id'] : 1;
$semester_id = isset($_GET['semester_id']) ? $_GET['semester_id'] : 1;


$query = "SELECT * FROM files 
          WHERE uploaded_by='$user_id'
          AND level_id='$level_id'
          AND semester_id='$semester_id'";

$result = mysqli_query($conn, $query);
?>

<?php include("../includes/navbar.php"); ?>

<form method="GET">

    <div class="form-group">
        <label>Select Level</label>
        <select name="level_id">
            <option value="1">Level 100</option>
            <option value="2">Level 200</option>
            <option value="3">Level 300</option>
            <option value="4">Level 400</option>
        </select>
    </div>

    <div class="form-group">
        <label>Select Semester</label>
        <select name="semester_id">
            <option value="1">First Semester</option>
            <option value="2">Second Semester</option>
        </select>
    </div>

    <button type="submit">Filter</button>

</form>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Files</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">

    <div class="card">
        <h2>Manage Your Uploaded Files</h2>

        <ul>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <li>
                    📄 <?php echo $row['title']; ?>
                    
                  <a href="../includes/delete_file.php?id=<?php echo $row['id']; ?>" 
   onclick="return confirmDelete()">
                        <button>Download</button>
                    </a>

                    <a href="../includes/delete_file.php?id=<?php echo $row['id']; ?>">
                        <button id="delete" style="background:red;" onclick="return confirmDelete()">Delete</button>
                    </a>
                </li>
            <?php } ?>
        </ul>

    </div>
<script>
function confirmDelete(){
    return confirm("Are you sure you want to delete this file?");
}
</script>
</div>
</body>
</html>