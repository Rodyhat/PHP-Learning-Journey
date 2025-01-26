<?php
if (isset($_POST['submit'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    echo $firstname;
    echo "<br>";
    $lastname = htmlspecialchars($_POST['lastname']);
    echo $lastname;
    echo "<br>";

    $email = htmlspecialchars($_POST['email']);
    echo $email;
    echo "<br>";

    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    echo $phonenumber;
    echo "<br>";

    $dateofbirth = htmlspecialchars($_POST['dateofbirth']);
    echo $dateofbirth;
    echo "<br>";

    $password = htmlspecialchars($_POST['password']);
    echo $password;
}
?>