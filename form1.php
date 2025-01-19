<?php
// form handling involove the process of collecting entered in a form bhy the user and then processing it on the server
// data can typically sent using two method
// GET AND POST
// Get is used to retrieve data, the URL is vosible to the everyone
// POST is used to send data, the URL is invisible

// action attribute in the form is where you want your data to go after submission

// superglobals are predefined variables that are always accessible regardless of scope, this variable store important information like form dat, server details, session data, cookie

// GET, POST, SESSION, COOKIE, SERVER,FILE, REQUEST

// / Get is used to collect or retrieve data, the URL is vosible to the everyone, it us suitable for retrieving non-sensitive data such as the search queries
// POST is used to send data, the URL is invisible, it is suitable for sensitive data such as password


// isset function = it checks if a variable is set and not null, it checks whether a varibles exist before performing the operation

// htmlspecialchars = they are usefull for preventing cross-site scripting attack, they are used to convert special charaters into HTML entities ensuring that data is safe to display in the browser

$errors = []; // Initialize an empty array to store error messages

if (isset($_POST['submit'])) {
  $firstname = htmlspecialchars($_POST['firstname']);
  echo $firstname;
  echo "<br>";
  $lastname = $_POST['lastname'];
  echo $lastname;
  echo "<br>";

  $email = $_POST['email'];
  echo $email;
  echo "<br>";

  $phoneNumber = $_POST['phonenumber'];
  echo $phoneNumber;
  echo "<br>";

  $password = $_POST['password'];
  echo $password;

  // if (empty($firstname) && empty($lastname) && empty($email) && empty($phoneNumber) && empty($password)) {
  //   echo "Enter all the form";
  // } elseif (empty($firstname)) {
  //   echo "ENTER YOUR FIRST NAME";
  // } elseif (empty($lastname)) {
  //   echo "ENTER YOUR LAST NAME";
  // } elseif (empty($email)) {
  //   echo "ENTER YOUR EMAIL";
  // } elseif (empty($phoneNumber)) {
  //   echo "ENTER YOUR PHONE NUMBER";
  // }


  // Check each field and add an error message if it's empty
  if (empty($firstname)) {
    $errors['firstname'] = "Please enter your first name.";
  }
  if (empty($lastname)) {
    $errors['lastname'] = "Please enter your last name.";
  }
  if (empty($email)) {
    $errors['email'] = "Please enter your email.";
  }
  if (empty($phoneNumber)) {
    $errors['phonenumber'] = "Please enter your phone number.";
  }
  if (empty($password)) {
    $errors['password'] = "Please enter your password.";
  }

  if (!empty($errors)) {
    foreach ($errors as $field => $message) {
      echo "<p>$message</p>";
    }
  } else {
    echo "form successfully submitted";
  }

  // If there are errors, display them under each input field
  // if (!empty($errors)) {
  //   foreach ($errors as $field => $message) {
  //     echo "<p style='color: red;'>{$message}</p>";
  //   }
  // } else {
  //   echo "Form submitted successfully!";
  // }
}

// filter_var - they are used to validate and sanitize data
$email = 'isiaqrodiat@gmail.com';
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "The email is valid";
} else {
  echo "the email is invalid";
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
    /* background-color: #5650aa; */
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

  }

  .all {
    background-color: #5650aa;
    border-radius: 15px;
    padding: 15px 25px 25px;
    width: 340px;

  }

  .form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    /* background-color: #5650aa; */
  }

  h1 {
    text-align: center;
    color: white;
  }

  a {
    text-decoration: none;
    color: white;
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
    /* background-color: rgba(128, 128, 128, 0.215); */
    background-color: white;
    color: rgba(0, 0, 0, 0.604);
  }

  button {
    background-color: white;
    /* color:#5650aa; */
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
    color: white;
  }
</style>

<body>
  <div class="all">
    <form action="./show-form1.php" class="form" method="POST">
      <h1> Sign Up</h1>
      <div class="fullname input">
        <input type="text" name="firstname" id="" placeholder="Enter your first name">
        <!-- <div class="error"></div> -->
      </div>
      <div class="fullname input">
        <input type="text" name="lastname" id="" placeholder="Enter your last name">

      </div>
      <div class="email input">
        <input type="email" name="email" id="" placeholder="Enter your email">

      </div>
      <div class="email input">
        <input type="number" name="phonenumber" id="" placeholder="Enter your phone number">
 
      </div>
      <div class="password input">
        <input type="password" name="password" id="" placeholder="Enter your password">

      </div>
      <button type="submit" name="submit">Sign up</button>
      <div class="log">
        <p>Already have an account? <a href="">Log in</a></p>
      </div>
    </form>
  </div>
</body>

</html>