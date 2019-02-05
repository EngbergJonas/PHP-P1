<?php
session_start()
?>
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
    <h2>Site Content</h2>
    <p>
        The site content depends on which session you start.
    </p>
    <h3>Members session</h3>
    <p>
        The members session is activated by logging in with members credentials.
        These credentials have access to members content which the normal users
        can't see.
    </p>
    <div class="img-container"><img src="captions/membersession.png"></a></div>
    <h3>Administrators session</h3>
    <p>
        The admin content is accessed exactly in the same way as the members
        content, except that you have to enter admin credentials instead.
    </p>
    <div class="img-container"><img src="captions/adminsession.png"></a></div>
    <p>
        I was surprised to see how easy the sessions are to work with,
        at least the basics.
    </p>
    </div>
  </div>

<?php
echo "<div class=main>";
echo "<div class=container-right>";
echo "<h2>Users site</h2>";
if (isset($_SESSION["member"])) {
    echo "<p>Welcome to the members site,
    you are logged in as {$_SESSION["member"]}!</p>";
    echo "<p>This is some pretty awesome content that I offer my members</p>";
    echo "<p>Would you like to <b><a href='endsession.php'>Log out</a>?</b></p>";
} elseif (isset($_SESSION["admin"])) {
    echo "<p>Welcome to the administrators site,
    you are logged in as {$_SESSION["admin"]}!</p>";
    echo "<p>This is some top-secret-dark-stuff that only the admins have access to.</p>";
    echo "<p>Would you like to <b><a href='endsession.php'>Log out</a>?</b></p>";
} else {
    echo "<div class=img-container><img src=images/get_out.jpg></div>";
    echo "<p>You are not logged in, this site is for <b>Users only</b>.</p>";
    echo "<p>Would you like to <b><a href='login.php'>Log in</a></b>?</p>";
    echo "<p>No credentials? <b><a href='register.php'>Create an account</a></b>.</p>";
}
echo "</div>";
echo "</div>";

?>
</div>
</body>
</html>