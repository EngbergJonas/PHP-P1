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
        <h2>Posting a comment</h2>
        <p>
            The comments file can be found
            <b><a href="https://cgi.arcada.fi/~engbergj/Backend/Project1/blogposts.txt">here</a></b>.
        </p>
        <p>
            I use the same process as when you write to a file. The text field becomes
            the message that I add to a text file with a GET method. To have the newest
            message come first I use <b>file_get_contents</b> and <b>file_put_contents</b>,
            which basically reads all the content of the text file, and appends the newest
            message on top.
        </p>
        <div class="img-container"><img src="captions/getnewestmessage.png"></a></div>
        <p>
            This was a bit repetivite to what I had done earlier, the only
            problem I had was getting the message displayed at the top. To me it sounds a bit
            slow to have the program read the whole file every time I write a new message, but
            I guess there are better ways to accomplish this task.
        </p>
    </div>
  </div>

<div class="main">
    <div class="container-right">
    <h2>Write a comment!</h2><br><br>
    <form action="blog.php" method="get">
        <input type="text" placeholder="Post a comment:" name="text"/><br>
        <input type="submit" name="comment" value="Comment" style="width:100px;"/>
    </form>
<?php
if (isset($_GET["comment"])) {
    $text = $_GET["text"];
    $user = $_SERVER["REMOTE_USER"];
    $time = date("j.n.Y H:i ");
    $message = "{$time} From: {$user}: {$text} \n";

    $myfile = fopen("blogposts.txt", "a+") or die("Unable to open file!");
    $message .= file_get_contents('blogposts.txt');
    file_put_contents('blogposts.txt', $file_content);
    fwrite($myfile, $message);
    fclose($myfile);
}

echo "</div>";
echo "</div>";
?>
</div>
</body>
</html>