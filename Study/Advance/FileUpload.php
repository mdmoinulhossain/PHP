<?php
$target_dir = "./assets/";
// The basename() function returns the filename from a path. basename(path, suffix) -> suffix is used to cut off file extension
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// strtolower() - use for to lowercase any string. The pathinfo(path, options) function returns information about a file path.
/* options possible values: 
* PATHINFO_DIRNAME - return only dirname
* PATHINFO_BASENAME - return only basename
* PATHINFO_EXTENSION - return only extension
* PATHINFO_FILENAME - return only filename
*/
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    // getimagesize( $filename, $image_info )
    /**
     * $filename: It is a mandatory parameter which specifies the image file name.
     * $image_info: It is an optional parameter which allows you to extract some extended information from the image file such as the different JPG APP markers as associative array.
     */
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
// The file_exists(path) function checks whether a file or directory exists.
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    // The move_uploaded_file(file, dest) function moves an uploaded file to a new destination.
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // The htmlspecialchars() function converts some predefined characters to HTML entities.
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
