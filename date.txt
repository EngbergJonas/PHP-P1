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
    <h3><b>Date countdown</b></h3>
    <p>This site doesn't use any PHP.</p>
    <p>
      Enter a date in the future, and the script will tell you exactly when that date
      comes in days, hours, minutes and seconds.
    </p>
    <p>
      I used a form which transfers the variables to datecount.php with a GET
      method.
    </p>
    <p>
      Nothing special to be said here, quite an easy task.
    </p>
    <div class="img-container"><img src="captions/dateget.png"></a></div>
  </div>
</div>

<div class="main">
  <div class="container-right">
    <h2>Enter a future date</h2>
    <form action="datecount.php" method="get">
    <div class="col-25">Day:</div>
    <div class="col-75">
    <input type="text" placeholder="Enter Day" name="day">
    </div>
    <div class="col-25">Month:</div>
    <div class="col-75">
    <input type="text" placeholder="Enter Month" name="month">
    </div>
    <div class="col-25">Year:</div>
    <div class="col-75"><input type="text" placeholder="Enter Year" name="year">
    </div>
    <input type="submit" name="send" value="Count">
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>