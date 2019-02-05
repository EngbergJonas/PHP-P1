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
    <h3>Counting the date</h3>
    <p>
        This page retrieves the variables from the countdown page
        with a get method.
    </p>
    <div class="img-container"><img src="captions/datevariables.png"></div>
    <p>
        Then I get the UNIX timestamp for today, and the input date.
    </p>
    <div class="img-container"><img src="captions/unixvariables.png"></div>
    <p>
        Get the difference of todays and the input date in a UNIX stamp.
        I also check if the date has already passed, in which case i inform
        the user to enter a date in the future.
    </p>
    <div class="img-container"><img src="captions/difference.png"></div>
    <p>
        Lastly I use convert the UNIX timestmap to days, months, minutes and hours.
        I use floor to get the next lowest integer rounded down if necessary.
    </p>
    <div class="img-container"><img src="captions/alldates.png"></div>
    <p>
        I had quite a bit of problems figuring out how to count the down to the due date.
        Luckily w3 schools had good examples. This part tought me a lot about how UNIX works,
        and how to break it down into parts.
    </p>
</div>
</div>

<?php
echo "<div class=main>";
echo "<div class=container-right>";
echo "<h3>I have counted that, </h3>";

$day = $_GET["day"];
$month = $_GET["month"];
$year = $_GET["year"];

$today = time();
$input = mktime(0, 0, 0, $month, $day, $year);

$inputdate = date("d.m.Y", mktime(0, 0, 0, $month, $day, $year));
$currentdate = date("d.m.Y", $today);

if (($day < 0)) {
    echo ("<p>You have given an invalid date...</p>");
}

//counting the difference between the two dates in days
$difference = $input - $today;
if ($difference < 0) {
    $difference = 0;
    print("Your date <b>{$inputdate}</b>, has already passed. ");
    print("Please enter a future date.");
} else {

    echo ("<p> The UNIX version untill your time <b>{$difference}</b>.</p>");

    $dueday = floor($difference / (24 * 60 * 60));
    $rest = $difference % (24 * 60 * 60);
    $duehour = floor($rest / 3600);
    $dueminute = floor($rest / 60 % 60);
    $duesecond = floor($rest % 60);

    echo "<p>Today it is the <b>{$currentdate}</b>, your desired date, <b>{$inputdate}
    </b> will be in <b>{$dueday}</b> days, <b>{$duehour}</b> hours,
    <b>{$dueminute}</b> minutes and <b> {$duesecond}</b> seconds.</p>";
    echo "</div>";
    echo "</div>";
}
?>
</div>
</body>
</html>