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
    <h2>About Project 1</h2>
  </div>
  </div>

<?php
echo "<div class=main>";
echo "<div class=container-right>";
echo "<h2>Title</h2>";
echo "</div>";
echo "</div>";
?>
</div>
</body>
</html>