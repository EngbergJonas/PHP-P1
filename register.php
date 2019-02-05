<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="uft-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jonas PHP Site</title>
    <meta name="viewport" content="width=device-width", initial-scale="1">
    <script src="script.js"></script>
</head>
<div class="header">
  <h1 class="title">&lt;?Projekt 1&gt;</h1>
</div>

<?php include 'navbar.php';?>
<?php include 'visitorcounter.php';?>

<div class="row">
<div class="side">
    <div class="container-left">
    <h3>Registering</h3>
    <p>
        The registration form is the same as any form, except it uses a get method
        to recieve and use the variables that the user enters in the form. The variables
        are used to create a registration email that will be sent to the user containing
        a random password based of a long list of characters and numbers.
    </p>
    <h3>Creating the variables</h3>
    <p>
        The email is sent to the users email address and welcoming the user to
        the website, and also creating a random password.
    </p>
    <div class="img-container"><img src="captions/emailvariables.png"></div>
    <h3>Sending the email</h3>
    <p>
        It is important to validate the email format to prevent the user from typing in
        additional emails, or creating CC chains. Ones the email is validated using the
        <b>"if (filter_var($email, FILTER_VALIDATE_EMAIL))"</b> method, the email will be
        sent to the user.
    </p>
    <div class="img-container"><img src="captions/emailvalidation.png"></div>
    </div>
</div>
<div class="main">
    <div class ="container-right">
    <h2>Registration</h2>
    <h3>Sign up</h3>
    <article>
        <form action="register.php" method="get">
        <div class="col-25">Name:</div>
        <div class="col-75"><input type="text" placeholder="Enter Name" name="name"><br></div>
        <div class="col-25">Email:</div>
        <div class="col-75"><input type="text" placeholder="Enter Email" name="email"><br></div>
        <div class="col-25">Username:</div>
        <div class="col-75"><input type="text" placeholder="Enter Username" name="username"><br></div>
        <input type="submit" name="send" value="register">
        </form>
    </article>
<?php
if ($_GET["send"] == "register") {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
    $password = substr(str_shuffle($chars), 0, 8);
    $name = $_GET["name"];
    $email = $_GET["email"];
    $username = $_GET["username"];
    $subject = "Registration confirmation for " . $name . "";
    $message = "Welcome, {$name}!

    Your username and password are the following:

    - Username: {$username},

    - Your new password: {$password},

    Thank you for regsitering to Jonas PHP Site!";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print("<p>You have registered!</p>");
        print("<p>$email is a valid email address</p>");
        mail($email, $subject, $message);
    } else {
        print("<p>$email is not a valid email address.</p>");
    }
} else {
    print("<p>Fill in the registration form to register</p>");
}
?>
</div>
</div>
</div>
</body>
</html>