<?php
session_start();
//Unset all the session variables
$_SESSION = array();
//Destroy the session
session_destroy();
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
    <h2>Logged out.</h2>
    <p>You havesuccesfully logged out</p>
  </div>
</div>
</body>
</html>
