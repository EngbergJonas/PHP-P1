<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="uft-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jonas PHP Site</title>
    <meta name="viewport" content="width=device-width", initial-scale="1">
</head>
<div class="header">
  <h1 class="title">&lt;?Projekt 1&gt;</h1>
</div>

<?php include 'navbar.php';?>
<?php include 'visitorcounter.php';?>

<div class="row">
  <div class="side">
  <div class="container-left">
    <h3>Creating an account</h3>
    <p>
        This site doesn't actually create an account, but creates a Session if the user
        enters the correct credentials. It is important to start the session before
        the html tag.
    </p>
    <div class="img-container"><img src="captions/sessionstart.png"></a></div>
    <h3>Trimming the data</h3>
    <p>
        Then I create a function that trims the data from any harmful characters,
        preventing the most basic attacks.
    </p>
    <div class="img-container"><img src="captions/datatrimmer.png"></a></div>
    <h3>Using the data</h3>
    <p>
        Then I use the data with an isset() function to create the session variables,
        which will later be used to access sites with different permissions (dark web style).
    </p>
    <div class="img-container"><img src="captions/setsessionvariables.png"></a></div>
    <p>
        This was pretty interesting, since I did not know much about sessions and how they work.
    </p>
  </div>
</div>

<div class="main">
    <div class="container-right">
    <h2>Log in</h2>
    <h3>Enter your credentials.</h3>
        <article>
            <form action="login.php" method="get">
            <div class="col-25">Username:</div>
            <div class="col-75"><input type="text" placeholder="(Usr: Dennis / Adm: Jonas)" name="username"/><br></div>
            <div class="col-25">Password:</div>
            <div class="col-75"><input type="password" placeholder="(Usr: Dena / Adm: Engberg)" name="password"/><br></div>
            <input type="submit" name="login" value="Log In"/>
            </form>
        </article>
<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//if the get request is succesfull (someone pressed the login button),
//display variables - removes the illegal characters like scripts
if (isset($_GET["login"])) {
    $username = test_input($_GET["username"]);
    $password = test_input($_GET["password"]);
    if ($username == "Dennis" and $password == "Dena") {
        echo "<p>Members Login Successfull!</p>";
        $_SESSION["member"] = $username;
        print("<p>You now have access to <b><a href='loginsession.php'>Members Site</a></b>.");
    } elseif ($username == "Jonas" and $password == "Engberg") {
        $_SESSION["admin"] = $username;
        echo "<p>Admin Login Succesfull!</p>";
        print("<p>You now have access to <b><a href='loginsession.php'>Administrators Site</a></b>.");
    } else {
        echo "<p>Wrong username or password.</p>";
    }
}
?>
</div>
</div>
</body>
</html>