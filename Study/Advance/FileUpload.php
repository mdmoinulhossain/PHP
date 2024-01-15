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
    // ******************** Single File Upload ****************************
    /*
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
    */

    // ******************** Multi File Upload ****************************
    $uploadDirectory = './assets/';

    // Check if files were submitted
    /* checks whether there is at least one file uploaded. 
        If the first file name is not empty, it means that there is at least one file uploaded through the "file-upload" form input.
    */
    if (!empty($_FILES['file-upload']['tmp_name'][0])) {
        $files = $_FILES['file-upload'];

        // Loop through each file
        for ($i = 0; $i < count($files['name']); $i++) {
            $uploadedFile = $files['tmp_name'][$i];
            $originalFilename = $files['name'][$i];
            $destination = $uploadDirectory . $originalFilename;

            $typeAllowed = ['image/jpg', 'image/jpeg', 'image/png'];

            // Check Image file type
            if (!in_array($files['type'][$i], $typeAllowed)) {
                echo "Image $originalFilename must be in jpg, jpeg, png format!<br/>";
                continue; // Skip to the next iteration of the loop
            }

            // Check Image file Size (less than 1 mb)
            if ($files['size'][$i] > 1024 * 1024) {
                echo "Image $originalFilename must be less than 1 MB!<br/>";
                continue; // Skip to the next iteration of the loop
            }

            // Move the uploaded file
            if (move_uploaded_file($uploadedFile, $destination)) {
                echo "File $originalFilename uploaded successfully.<br/>";
            } else {
                echo "Error uploading file $originalFilename.<br/>";
            }
        }
    } else {
        echo "No files were submitted.";
    }

    ?>
</pre>