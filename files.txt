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
    <h3>Uploading a file</h3>
    <p>
        Making the script for file uploading was a bit tricky in the beginning,
        because you have to avoid any harmful files from being uploaded. To achieve
        this I used a format that can be found <b><a href="https://www.w3schools.com/php/php_file_upload.asp">Here</a></b>.
        It will make sure that you can only upload files that are jpg, png, jpeg or gif.
    </p>
    <h3>Variables</h3>
    <p>
        I start by making three variables, the <b>catalogue</b>, which acts as the folder for the files.
        The <b>target_file</b>, which stands for the path of the file that is uploaded. <b>uploadOK</b>,
        which acts as a boolean to determine if errors, with the default value of 1.
        Lastly <b>imageFileType</b>, which holds the file extension.
    </p>
    <div class="img-container"><img src="captions/filevariables.png"></a></div>
    <h3>Display the files</h3>
    <p>
        Lastly if the file passes all the checks it uploads into the uploads folder. After this I use
        the <b>scandir()</b> function to scan the folder containing all the uploaded files, and
        loop through it with a foreach loop to display each file from the folder. I also make
        them into a link through each loop using the existing variables, so that the user can
        view the images.
    </p>
    <div class="img-container"><img src="captions/displayfiles.png"></a></div>
    <p>
        I found this to be a very interesting excercise. The hardest part for me was to display
        the pictures within the loop, but that didn't take me too long.
    </p>
    </div>
  </div>

  <div class="main">
    <div class="container-right">
    <h2>Upload a picture</h2>
    <form action="files.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <p>(The file needs to be smaller than <b>2MB</b>)</p>
    <p><input type="submit" value="Upload" name="submit"></p>
    </form>

<?php
$catalogue = "uploads/";
$target_file = $catalogue . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "<p>File is an image - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
    } else {
        echo "<p>File is not an image.</p>";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo ", your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<p>The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.</p>";
        } else {
            echo "<p>Sorry, there was an error uploading your file.</p>";
        }
    }
}
$content = scandir($catalogue);
echo "<p>Content of uploads catalogue: </p>";
foreach ($content as $row) {
    if (($row != "..") && ($row != ".")) {
        print('<p>- <a href="' . $catalogue . '/' . $row . '" target="_blank">' . $row . '</a></p>');
    }
}
?>
</div>
</div>
</div>
</body>
</html>