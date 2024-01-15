<pre>
    <?php
    // print_r($_POST); // return button value and name. 
    // print_r($_FILES);
    /* 
        Array
        (
            [fileToUpload] => Array
                (
                    [name] => php.png
                    [full_path] => php.png
                    [type] => image/png
                    [tmp_name] => C:\xampp\tmp\phpF3FB.tmp
                    [error] => 0
                    [size] => 80456
                )

        )
    */
    // ************************************************
    $uploadDirectory = './assets/';
    // File Path
    $uploadedFile = $_FILES['file-upload']['tmp_name'];
    // File Name
    $originalFilename = $_FILES['file-upload']['name'];
    $destination = $uploadDirectory . $originalFilename;

    if ($_FILES['file-upload']) {
        $typeAllowed = ['image/jpg', 'image/jpeg', 'image/png'];
        // check Image file type
        if (!in_array($_FILES['file-upload']['type'], $typeAllowed)) {
            echo "Image Must be in jpg, jpeg, png formate!";
            exit();
        }
        // check Image file Size (less than 1 mb)
        if ($_FILES['file-upload']['size'] > 1024 * 1024) {
            echo "Image Must be Less Than 1 mb";
            exit();
        }
        move_uploaded_file($uploadedFile, $destination);
        echo "File uploaded Successfully";
    }
    ?>
</pre>