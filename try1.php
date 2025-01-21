<?php
$error = $error1 = $error2 = $error3 = '';
if (isset($_POST['submit'])) {
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $phonenumber = htmlspecialchars($_POST['phonenumber']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);

  if (empty($firstname)) {
    $error1 = "enter your firstname";
  }
  if (empty($firstname)) {
    $error2 = "enter your lastname";
  }

  // check error message if any field is empty
  if (empty($firstname) || empty($lastname) || empty($phonenumber) || empty($email) || empty($password)) {
    $error = "ALL FIELD REQUIRED";
  }

  // if no errors process the form
  if (empty($firstname) && empty($lastname) && empty($phonenumber) && empty($email) && empty($password)) {
    $error3 = "FROM SUCCESSFULLY SUBMITTED";
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

  .show {
    color: red;
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
      <div class="show"><?php echo isset($error) ? $error : ''; ?></div>
      <div class="fullname input">
        <input type="text" id="" name="firstname" placeholder="Enter your first name">
        <!-- ternary operator -->
        <!-- echo isset($firstname) ? $firstname : '' -->
        <div class="show"><?php echo isset($error1) ? $error1 : ''; ?></div>
      </div>
      <div class="fullname input">
        <input type="text" id="" name="lastname" placeholder="Enter your last name">
        <!-- null coalescing operator -->
        <!-- echo $firstname ?? '' -->
        <div class="show"><?php echo isset($error2) ? $error2 : ''; ?></div>

      </div>
      <div class="email input">
        <input type="email" id="" name="email" placeholder="Enter your email">

      </div>
      <div class="email input">
        <input type="number" id="" name="phonenumber" placeholder="Enter your phone number">
        <div class="show"><?php echo isset($error4) ? $error2 : ''; ?></div>

      </div>
      <div class="email input">
        <input type="date" id="" name="dateofbirth" placeholder="Enter your date of birth">
        <div class="show"><?php echo isset($dateofbirth) ? $dateofbirth : ''; ?></div>

      </div>
      <div class="password input">
        <input type="password" id="" name="password" placeholder="Enter your password">
        <div class="show"><?php echo isset($password) ? $password : ''; ?></div>

      </div>
      <button type="submit" name="submit">Sign up</button>
      <div class="log">
        <p>Already have an account? <a href="">Log in</a></p>
      </div>
    </form>
  </div>
</body>

</html>