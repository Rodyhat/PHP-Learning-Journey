<?php
include("connect.php");
$error = '';
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $regdate = $_POST['regdate'];
    $countryandcity = $_POST['countryandcity'];
    $phonenumber = $_POST['phonenumber'];
    $_birthdate = $_POST['birthdate'];
    $password = $_POST['password'];
    $_image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    if (empty($fullname) && empty($email) && empty($regdate) && empty($countryandcity) && empty($phonenumber) && empty($_birthdate) && empty($password) && empty($_image)) {
        $error = "All field required";
    } elseif (empty($fullname)) {
        $error = "Enter your full name";
    } elseif (empty($email)) {
        $error = "Enter your Email";
    } elseif (empty($regdate)) {
        $error = "Enter your registration date";
    } elseif (empty($countryandcity)) {
        $error = "Enter your country and city";
    } elseif (empty($phonenumber)) {
        $error = "Enter your phone number";
    } elseif (empty($_birthdate)) {
        $error = "Enter your birth date";
    } elseif (empty($password)) {
        $error = "Enter your password";
    } else {

        $select = "SELECT * FROM `studentsignup` WHERE email = '$email'";
        $selectQuery = mysqli_query($connect, $select);
        $result = mysqli_fetch_assoc($selectQuery);
        if ($result > 0) {
            echo "Email already exist";
        } else {
            $target_path = "images/" . $_image;
            if (move_uploaded_file($tmp_image, $target_path)) {
                $insert = "INSERT INTO `studentsignup`(`fullname`, `email`, `regdate`, `countryandcity`, `phonenumber`, `birthdate`, `password`, `image`) VALUES ('$fullname','$email','$regdate','$countryandcity','$phonenumber','$_birthdate','$password', '$_image')";
                $insertQuery = mysqli_query($connect, $insert);
                header('location: first_login.php');
            } else {
                echo "error";
            }
        }
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
        <form action="" method="POST" class="form" enctype="multipart/form-data">
            <h1>Student Sign Up</h1>
            <div class="fullname input">
                <input type="text" name="fullname" id="" placeholder="Enter your fullname">
                <p class="error"> <?php echo $error; ?></p>
            </div>
            <div class="email input">
                <input type="email" name="email" id="" placeholder="Enter your email">
                <p class="error"> <?php echo $error; ?></p>

            </div>
            <div class="regdate input">
                <input type="date" name="regdate" id="" placeholder="Enter your registration date">
                <p class="error"> <?php echo $error;?></p>

            </div>
            <div class="countryandcity input">
                <input type="text" name="countryandcity" id="" placeholder="Enter your country and city">
                <p class="error"> <?php echo $error;?></p>

            </div>
            <div class="number input">
                <input type="number" name="phonenumber" id="" placeholder="Enter your phone number">
                <p class="error"> <?php echo $error;?></p>

            </div>
            <div class="birthdate input">
                <input type="date" name="birthdate" id="" placeholder="Enter your date of birth">
                <p class="error"> <?php echo $error;?></p>

            </div>
            <div class="password input">
                <input type="password" name="password" id="" placeholder="Enter your password">
                <p class="error"> <?php echo $error;?></p>

            </div>
            <div class="image">
                <input type="file" name="image" id="">
            </div>
            <input type="submit" name="submit" value="Sign up" id="" class="input">
            <div class="log">
                <p>Already have an account? <a href="">Log in</a></p>
            </div>
        </form>
    </div>
</body>

</html>