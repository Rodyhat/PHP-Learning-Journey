<?php
// form handling is the process of collecting data entered by the user and then processing it on the server

// superglobals are predefined variable that can be accessible in any scope, it is used to store important information

// POST, GET, SESSION, COOKIE,SERVER,REQUEST

// POST is used to send data to the server, the URL is invisible to the user
// isset it used to check if a variable exist before perfoeming the operation
include "connect1.php";
$error = []; // initialize an empty array
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

    $password = htmlspecialchars($_POST['password']);
    // echo $password;

    if (empty($firstname) || empty($lastname) || empty($email) || empty($phonenumber) || empty($dateofbirth) || empty($password)) {
        echo "<div style='color:red;'>ALL FIELD REQUIRED</div>";
    }

    if (empty($firstname)) {
        $error['firstname'] =  "enter your first name";
    }
    if (empty($lastname)) {
        $error['lastname'] =  "enter your last name";
    }
    if (empty($email)) {
        $error['email'] =  "enter your email";
    }
    if (empty($phonenumber)) {
        $error['phonenumber'] =  "enter your phone number";
    }
    if (empty($dateofbirth)) {
        $error['dateofbirth'] =  "enter your date of birth";
    }
    if (empty($password)) {
        $error['password'] =  "enter your password";
    }


    if (empty($error)) {
        $select = "SELECT * FROM `form1` WHERE `email` = '$email'";
        $selectQuery = mysqli_query($connect, $select);
        $result = mysqli_fetch_assoc($selectQuery);
        if ($result > 0) {
            echo "email already exist";
        } else {
            $insert = "INSERT INTO `form1`(`firstname`, `lastname`, `email`, `phonenumber`, `dateofbirth`, `password`) VALUES ('$firstname','$lastname','$email','$phonenumber','$dateofbirth','$password')";
            $insertQuery = mysqli_query($connect, $insert);
            header('location: show4.php');
            echo "FORM SUCCESSFULLY SUBMITTED";
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
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

    }

    .all {
        background-color: white;
        border-radius: 15px;
        padding: 15px 25px 25px;
        width: 340px;
    }

    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    h1 {
        text-align: center;
    }

    a {
        text-decoration: none;
    }

    .error {
        color: red;
    }

    #image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }

    input {
        width: 100%;
        height: 30px;
        border-radius: 15px;
        border: none;
        outline: none;
        padding: 10px;
        background-color: rgba(128, 128, 128, 0.215);
        color: rgba(0, 0, 0, 0.604);
    }

    button {
        background-color: #5650aa;
        color: white;
        font-size: 15px;
        border: none;
        border-radius: 15px;
        padding: 6px;
    }

    input[type="file"] {
        background-color: transparent;
    }

    .log p {
        text-align: center;
    }
</style>

<body>
    <div class="all">
        <form action="" class="form" method="POST">
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
            <button type="submit" name="submit">Sign up</button>
            <div class="log">
                <p>Already have an account? <a href="">Log in</a></p>
            </div>
        </form>
    </div>
</body>

</html>