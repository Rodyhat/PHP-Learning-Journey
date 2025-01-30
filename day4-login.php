<?php
// form handling is the process of collecting data entered by the user and then processing it on the server

// superglobals are predefined variable that can be accessible in any scope, it is used to store important information

// POST, GET, SESSION, COOKIE,SERVER,REQUEST

// POST is used to send data to the server, the URL is invisible to the user
// isset it used to check if a variable exist before perfoeming the operation
// $error = $error1 = $error2 = $error3 = $error4 = $error5 = $error6 = '';

// session is used to store information across multiple pages for a single user, it is stored on the server, making it more secure, it is commonly used for user authenticatiton and preserving user data across web pages
// header = header is used to redirect the user to another page
ini_set('session.gc_maxlifetime', 60); // Set session timeout to 1 minutes
session_start();
include 'connect1.php';
$error = [];
if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    // echo $email;
    echo "<br>";
    $password = htmlspecialchars($_POST['password']);

    if (empty($email)) {
        $error['email'] = "ENTER YOUR EMAIL";
    }

    if (empty($password)) {
        $error['password'] = "ENTER YOUR PASSWORD";
    }

    if (empty($error)) {
        $select = "SELECT * FROM `form1` WHERE email = '$email'";
        $selectQuery = mysqli_query($connect, $select);
        $result = mysqli_num_rows($selectQuery);

        if ($result > 0) {
            $fetch = mysqli_fetch_assoc($selectQuery);
            $hashedPassword = $fetch['password']; // Get hashed password from DB

            // ✅ Verify entered password with stored hash
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['email'] = $fetch['email'];
                echo "<div style='color:green;'>Login successful!</div>";
                header('location: dashboard2.php');
                exit();
            } else {
                echo "<div style='color:red;'>Invalid password</div>";
            }
        } else {
            echo "<div style='color:red;'>INVALID DETAILS</div>";
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