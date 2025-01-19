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
$errors = []; // Initialize an empty array to store error messages

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>