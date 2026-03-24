<?php
session_start();
?>




<?php include("../includes/navbar.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<<div class="card login-card">
    <h2>Login</h2>

    <form action="../includes/formhandler.php" method="POST">

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Login As</label>
            <select name="role">
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select>
        </div>

        <button type="submit" name="login">Login</button>

    </form>
</div>