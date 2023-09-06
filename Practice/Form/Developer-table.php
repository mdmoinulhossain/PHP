<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Table</title>
</head>

<body>
    <?php
    $connect_db = mysqli_connect("localhost", "root", "", "form_test");

    if (!$connect_db) {
        echo "Connection Error From Database";
    }

    $emErr = $nmErr = $wsErr = $cmErr = "";
    $em = $nm = $ws = $cm = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        if (empty($_POST["name"])) {
            $nmErr = "Name is required";
        } else {
            $nm = $_POST["name"];
        }

        if (empty($_POST["email"])) {
            $emErr = "Email is required";
        } else {
            $em = $_POST['email'];
        }

        if (empty($_POST["website"])) {
            $wsErr = "Website is required";
        } else {
            $ws = $_POST['website'];
        }

        if (empty($_POST["comment"])) {
            $cmErr = "Comment is required";
        } else {
            $cm = $_POST['comment'];
        }




        $insert = "INSERT INTO `test-data`(`email`, `name`, `website`, `comments`) VALUES ('$em', '$nm', '$ws', '$cm')";

        $insertQuery = mysqli_query($connect_db, $insert);

        // Prevent re-submitting data, (to redirect page it's self)
        header("location: " . $_SERVER['PHP_SELF']);
        exit;
    }


    ?>
    <h2>Enter your Info.</h2>
    <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>'>
        Name: <input type="text" name="name"> <span><?php echo $nmErr ?></span>
        <br><br>
        E-mail: <input type="text" name="email"> <span><?php echo $emErr ?></span>
        <br><br>
        Website: <input type="text" name="website"> <span><?php echo $wsErr ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea> <span><?php echo $cmErr ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit" id="submitBtn">
    </form>
</body>

</html>