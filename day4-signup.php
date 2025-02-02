<?php
// form handling is the process of collecting data entered by the user and then processing it on the server

// superglobals are predefined variable that can be accessible in any scope, it is used to store important information

// POST, GET, SESSION, COOKIE,SERVER,REQUEST

// POST is used to send data to the server, the URL is invisible to the user
// isset it used to check if a variable exist before perfoeming the operation
include('connect1.php');
$error1 = [];
if (isset($_POST['submit'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    // echo $firstname;
    echo "<br>";
    $lastname = htmlspecialchars($_POST['lastname']);
    // echo $lastname;
    echo "<br>";

    $email = htmlspecialchars($_POST['email']);
    // echo $email;
    echo "<br>";

    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    // echo $phonenumber;
    echo "<br>";

    $dateofbirth = htmlspecialchars($_POST['dateofbirth']);
    // echo $dateofbirth;
    echo "<br>";

    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // echo $password;

    if (empty($firstname) && empty($lastname) && empty($email) && empty($phonenumber) && empty($dateofbirth) && empty($image) && empty($password)) {
        echo "<div style='color:red;'>All field required</div>";
    }

    if (empty($firstname)) {
        $error['firstname'] = "Enter your first name";
    }
    if (empty($lastname)) {
        $error['lastname'] = "Enter your last name";
    }
    if (empty($email)) {
        $error['email'] = "Enter your email";
    }
    if (empty($phonenumber)) {
        $error['phonenumber'] = "Enter your phone number";
    }
    if (empty($dateofbirth)) {
        $error['dateofbirth'] = "Enter your date of birth";
    }
    if (empty($password)) {
        $error['password'] = "Enter your password";
    }
    if (empty($image)) {
        $error['image'] = "Enter your image";
    }

    if (empty($error)) {
        $select = "SELECT * FROM `form1` WHERE email = '$email'";
        $selectQuery = mysqli_query($connect, $select);
        $result = mysqli_num_rows($selectQuery);
        if ($result > 0) {
            echo "EMAIL ALREADY EXIST";
        } else {
            $upload = 'upload/' . $image;
            // move uploaded file , is going to move our file from a temporary location to a permanent location , it takes two parameters, (from and to)
            if (move_uploaded_file($tmp_image, $upload)) {
                // It ensures that even if a hacker gains access to the database, they cannot easily retrieve the original password.
                // It automatically chooses the best encryption algorithm available in PHP

                $insert = "INSERT INTO `form1`(`firstname`, `lastname`, `email`, `phonenumber`, `dateofbirth`, `password`, `image`) VALUES ('$firstname','$lastname','$email','$phonenumber','$dateofbirth','$password', '$image')";
                $insertQuery = mysqli_query($connect, $insert);
                echo "successfully inserted";
                header('location: day4-login.php');
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
    <title>sign up</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="all">
        <form action="" class="form" method="POST" enctype="multipart/form-data">
            <h1> Sign Up</h1>
            <div class="fullname input">
                <input type="text" id="" name="firstname" placeholder="Enter your first name">
                <div class="error"><?php echo isset($error['firstname']) ? $error['firstname'] : ''; ?></div>
            </div>
            <div class="fullname input">
                <input type="text" id="" name="lastname" placeholder="Enter your last name">
                <div class="error"><?php echo isset($error['lastname']) ? $error['lastname'] : ''; ?></div>

            </div>
            <div class="email input">
                <input type="email" id="" name="email" placeholder="Enter your email">
                <div class="error"><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>

            </div>
            <div class="email input">
                <input type="number" id="" name="phonenumber" placeholder="Enter your phone number">
                <div class="error"><?php echo isset($error['phonenumber']) ? $error['phonenumber'] : ''; ?></div>


            </div>
            <div class="email input">
                <input type="date" id="" name="dateofbirth" placeholder="Enter your date of birth">
                <div class="error"><?php echo isset($error['dateofbirth']) ? $error['dateofbirth'] : ''; ?></div>

            </div>
            <div class="password input">
                <input type="password" id="" name="password" placeholder="Enter your password">
                <div class="error"><?php echo isset($error['password']) ? $error['password'] : ''; ?></div>
            </div>
            <div class='file'>
                <input type="file" name="image" id="">
            </div>
            <button type="submit" name="submit">Sign up</button>
            <div class="log">
                <p>Already have an account? <a href="">Log in</a></p>
            </div>
        </form>
    </div>
</body>

</html>