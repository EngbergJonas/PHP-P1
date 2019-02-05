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
    <h3>Gathering information from the server</h3>
    <p>
        This page shows versions of Apache and PHP, the port of the the server, the server name
        and the IP of the server, as well as the users IP.
    </p>
    <p>
        To gather information about the server I used the function <b>phpinfo();.</b> which
        outputs a large amount of information about the current state of PHP.
    </p>
    <p>
        I used the gathered information to display information about the server,
        as well as information about the user.
    </p>
    <div class="img-container"><img src="captions/serverdata.png"></div>

    <h3>Getting the time and date</h3>
    <p>
        I used the <b>date</b> and <b>DateTime</b> functions to get the current date,
        as well as the time on the server. After which I formatted them to the Finland time scheme.
    </p>
    <div class="img-container"><img src="captions/timeanddate.png"></div>

    <h3>Weekdays</h3>
    <p>
        Lastly I create and array with the keys standing for each day of the week.
        I then get the date with the php function getdate() and turn it into a number_format
        with "wday", which gives a numeric representation of the day of the week. I then use this
        date as the index I want to print out in my array (- 1 because otherwise it will always
        give me one day in advance).
    </p>
    <div class="img-container"><img src="captions/weekdays.png"></div>

    <p>
        This part was not very hard in my experience, but showed me some interesting things you can do with PHP.
    </p>
    </div>
</div>
<?php
echo "<div class=main>";
echo "<div class=container-right>";
echo "<h2>About the server</h2>";
//php info tells information about php
//phpinfo();

$serverport = $_SERVER['SERVER_PORT'];
$yourIP = $_SERVER['REMOTE_ADDR'];
$serverIP = $_SERVER['SERVER_ADDR'];
$servername = $_SERVER['SERVER_NAME'];
$version = $_SERVER['SERVER_SOFTWARE'];

echo "<p>The <b>Apache</b> and <b>PHP</b> versions are:
    <b>{$version}</b></p>";

echo "<p>Your server is running on port nr: <b>{$serverport}
    </b>, and your IP is: <b>{$yourIP}</b></p>";

echo "<p>The server name is: <b>{$servername}
    </b>, and the server IP is: <b>{$serverIP}</b></p>";

echo "<h2>Time and date</h2>";

$weekday = array('Måndag', 'Tisdag', 'Onsdag', 'Torsdag',
    'Fredag', 'Lördag', 'Söndag');
$today = getdate();
$swedishweekday = $weekday[$today[wday] - 1];

$time = date("H:i:s");
$date = date("j.n.Y");

$ddate = new DateTime($date);
$week = $ddate->format("W");

echo "<p>The date is: <b>{$date}</b>, week <b>{$week}</b>.</p>
<p>The server time is: <b>{$time}</b>.</p>
<p>The weekday in Swedish is: <b>{$swedishweekday}</b></p>";
echo "</div>";
echo "</div>";
?>
</div>
</div>

</body>
</html>