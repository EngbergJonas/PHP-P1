<?php
$user_name = "User";
$user_value = $_SERVER["REMOTE_PORT"];
$visited_first = "firstvisited";
$visited_name = "lastvisited";
$visited_time = date("H:i:s - j.n.Y", time());
setcookie($user_name, $user_value, time() + 86400 * 15, "/");
setcookie($visited_name, $visited_time, time() + 86400 * 15, "/");
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
        <h3>Setting and checking the cookie</h3>
        <p>
            First I set the cookies, cookies need to be set before the<b>
            &lt;!DOCTYPE html&gt;</b> tag.<br><br> Then I pass parameters when
            setting the cookie, the only necessary one is the name parameter.
            <br><br> The last parameter is the expiry date, which happens two
            days after the cookie is set <b>(86400 = one day)</b>.
        </p>
        <div class="img-container"><img src="captions/setcookie.png"></div>
        <p>
            I check if the cookie is set, if it is, the site will display the name
            and the value of the cookie.
        </p>
        <div class="img-container"><img src="captions/issetcookie.png"></div>
        <p>The program also checks if there are cookies and tells
            the user if they are enabled.
        </p>
        <div class="img-container"><img src="captions/cookieenabled.png"></div>
        <h3>Registering the time</h3>
        <p>Lastly I make a second cooking storing the time when the user enters the
            page, I put it in the isset check to make sure that it displays it on the
            next visit to the page, and does not overwrite it.
        </p>
        <div class="img-container"><img src="captions/timecookie.png"></div>
        <p>
            I struggled a little bit with the setting the cookie into a timestamp, and
            it took me some time to figure out how I would get the time of the last visit,
            instead of displaying the new visit every time.
        </p>
    </div>
</div>

<?php
echo "<div class=main>";
echo "<div class=container-right>";
echo "<h2>Title</h2>";
if (isset($_COOKIE[$user_name])) {
    echo "<p>Welcome back '<b>{$user_name}</b>'!<br></p>";
    echo "<p>The value is: <b>{$_COOKIE[$user_name]}</b>.</p>";
    echo "<p>Your last visit at this page was <b>{$_COOKIE["lastvisited"]}</b>.</p>";
} else {
    echo "Cookie named '<b>" . $user_name . "</b>' is not set!";
}

if (count($_COOKIE) < 0) {
    echo "<p>Cookies are disabled.</p>";
    echo "<p><b>*TIP</b> Reload the page if you can't see the value of the cookie.</p>";
}

print("You now visited this page at <b>{$visited_time}</b>");
echo "</div>";
echo "</div>";
?>

</div>
</body>
</html>