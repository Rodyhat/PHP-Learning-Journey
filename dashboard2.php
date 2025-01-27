<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: day4-login.php');
}

include 'connect1.php';
$email = $_SESSION['email'];

$select = "SELECT * FROM `form1` WHERE email = '$email'";
$selectQuery = mysqli_query($connect, $select);
$fetch = mysqli_fetch_assoc($selectQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $fetch['firstname']; ?></h1>
    <h1><?php echo  $fetch['lastname']; ?></h1>
    <h1><?php echo $fetch['email']; ?></h1>
    <h1><?php echo $fetch['dateofbirth']; ?></h1>
    <h1><?php echo $fetch['phonenumber']; ?></h1>
</body>

</html>