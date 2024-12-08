<?php
session_start();
$error = $error1 = $error2 = '';
include("connect.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email) && empty($password)) {
        $error = "All fields required";
    } elseif (empty($email)) {
        $error1 = "Enter your email";
    } elseif (empty($password)) {
        $error2 = "Enter your password";
    } else {
        $select  = "SELECT * FROM `studentsignup` WHERE email = '$email' AND password = '$password'";
        $selectQuery = mysqli_query($connect, $select);
        $fetch = mysqli_fetch_assoc($selectQuery);
        $_SESSION['email'] = $fetch['email'];
        $_SESSION['password'] = $fetch['password'];
        header("location: dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student sign up</title>
    <link rel="stylesheet" href="first_project.css">
</head>

<body>
    <div class="all">
        <form action="" method="POST" class="form">
            <p class="error"> <?php echo $error; ?></p>

            <h1>Student Log in</h1>
            <div class="email input">
                <input type="email" name="email" id="" placeholder="Enter your email">
                <p class="error"> <?php echo $error1; ?></p>

            </div>

            <div class="password input">
                <input type="password" name="password" id="" placeholder="Enter your password">
                <p class="error"> <?php echo $error2; ?></p>

            </div>

            <input type="submit" name="submit" value="Sign up" id="" class="input">
            <div class="log">
                <p>Don't have an account? <a href="">sign up</a></p>
            </div>
        </form>
    </div>
</body>

</html>