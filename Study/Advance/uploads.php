<?php
require "./FileDisplay.php";

// pass parameter of FileDisplay() - function
$images = FileDisplay("./assets");

if (!$images) {
    die('No Folder Found'); // die() - If function works then rest of function not works.
}

?>

<!DOCTYPE html>
<html>

<body>
    <form action="./FileUpload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php foreach ($images as $image) : ?>
        <img src=<?php echo $image; ?> alt="">
    <?php endforeach; ?>

</body>

</html>