<?php
// form handling is the process of collecting data entered by the user and then processing it on the server

// superglobals are predefined variable that can be accessible in any scope, it is used to store important information

// POST, GET, SESSION, COOKIE,SERVER,REQUEST

// POST is used to send data to the server, the URL is invisible to the user
// isset it used to check if a variable exist before perfoeming the operation
// $error = $error1 = $error2 = $error3 = $error4 = $error5 = $error6 = '';
$error = [];
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
    if (empty($firstname)) {
        $error['firstname'] = "ENTER YOUR FIRST NAME";
    }
    if (empty($lastname)) {
        $error['lastname'] = "ENTER YOUR LAST NAME";
    }
    if (empty($email)) {
        $error['email'] = "ENTER YOUR EMAIL";
    }
    if (empty($phonenumber)) {
        $error['phonenumber'] = "ENTER YOUR PHONE NUMBER";
    }
    if (empty($dateofbirth)) {
        $error['dateofbirth'] = "ENTER YOUR DATE OF BIRTH";
    }
    if (empty($password)) {
        $error['password'] = "ENTER YOUR PASSWORD";
    }

    if (empty($error)) {
        $insert = "INSERT INTO `form1`(`firstname`, `lastname`, `email`, `phonenumber`, `dateofbirth`, `password`) VALUES ('$firstname','$lastname','$email','$phonenumber','$dateofbirth','$password')";
        $insertQuery = mysqli_query($connect, $insert);
        echo "form successfully submitted";
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
        flex-direction: row;
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
            <h1> Log in</h1>
            <div class="email input">
                <input type="email" id="" name="email" placeholder="Enter your email">
                <div class="error"><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
            </div>

            <div class="password input">
                <input type="password" id="" name="password" placeholder="Enter your password">
                <div class="error"><?php echo isset($error['password']) ? $error['password'] : ''; ?></div>



            </div>
            <button type="submit" name="submit">Log in</button>
            <div class="log">
                <p>Already have an account? <a href="">Sign up</a></p>
            </div>
        </form>
    </div>
</body>

</html>