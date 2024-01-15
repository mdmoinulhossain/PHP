<?php
require "./FileDisplay.php";

// pass parameter of FileDisplay() - function
$images = FileDisplay("./assets");

if (!$images) {
    die('No Folder Found'); // die() - If function works then rest of function not works.
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br />
    <br />
    <br />
    <form action="./FileUpload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="file-upload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <br />
    <br />
    <br />

    <?php foreach ($images as $image) : ?>
        <img src=<?php echo $image; ?> alt="">
    <?php endforeach; ?>

</body>

</html>