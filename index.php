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
<?php
echo "<div class=side>";
echo "<div class=container-left>";
echo "<h2>Welcome to Jonas PHP Site!</h2>";
$file = "visitor.log";
$visitors = count(file($file));
echo "<p>You are the <b> {$visitors}th</b> visitor on this site.</p>";
echo "<p>Click <b><a href=visitor.log style=color:#e52a6f>here</a></b> for the full list of visited users.</p>";
?>
<h2>Till läraren</h2>
  <p>
  Jag har bestämt mig att dokumentera på engelska, för att möjligen använda "historian" om hur jag lärt
  mig programmera i GitHub, och för att all min kod skall kunna vara internationellt förståelig.
  </p>
  <p>
  Vissa saker som CSS och html uppbyggnad hade jag problem med, därför att jag inte sysslat med
  web utveckling på länget, utan hoppade rakt in i back-end kursen. PHP i sig självt var på en
  så "base-level" för tillfället att jag klarade mig ganska lätt med detta projekt.
  </p>
  <p>
  Jag tyckte denna kurs var mycket lärorik och en bra början till PHP syntax. P.g.a. att jag
  studerar på 3:dje året, så tyckte jag kanske att det flesta var ganska självklart, och att
  igenomgången av materialet möjligen inte behövat ge så många svar på uppgifterna. Det
  blev ganska lite att arbeta själv med, efter lektionerna.
  </p>
  <h3>Slutsatser</h3>
  <p>
  Jag tyckte projektet var en mycket bra början och väntar med iver på vad som kommer att följa.<br><br>
  /Jonas Engberg
  </p>
  </div>
</div>
<div class="main">
  <div class="container-right">
  <h2>About this Project</h2>
  <p>Hello, <br><br>My name is Jonas, and this is my first, out of three, PHP projects.</p>
  <p>This site uses the basic functionalities that PHP offers and yet does not have
    the support of any databases, which will come in later projects.</p>

  <p>The basic template I'm using a has filereader and a navbar linked to it. I use this filereader to
    write to a file, <b>"visitor.log"</b>, every time someone visits the site.
  </p>
  <div class="img-container"><img src="captions/filereader.png"></div>
  <p>The reason I have it on every site is so that no matter where you enter, I will know you visited. I then
    later use this file to count how many lines it has, and to tell the user how many visits the site has had
    in total based on the amount of lines.</p>
    <div class="img-container"><img src="captions/visitorcounter.png"></div>

  <p>This however is not ideal at all, because every page reload registeres a new visit, which is clumsy and would
    fill up a busy site in minutes. I will later fix this with SQL databases and Sessions.
  </p>

  <p>I found this project to be an excellent introduction to PHP, and a good learning experience.
    I explain separately on every page about what I'm doing, and what I thought was tough, as well as
    what was easy. One thing that I learned from this project was that planing your layout early really matters,
    since rewriting the CSS tags into every page separately after writing the code itself was very exhausting,
    especially with PHP code.
  </p>
  </div>
</div>

</div>
</body>
</html>