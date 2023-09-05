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


    if (isset($_POST['submit'])) {

        $em = $_POST['email'];
        $nm = $_POST['name'];
        $ws = $_POST['website'];
        $cm = $_POST['comment'];

        $insert = "INSERT INTO `test-data`(`email`, `name`, `website`, `comments`) VALUES ('$em', '$nm', '$ws', '$cm')";

        $insertQuery = mysqli_query($connect_db, $insert);

        // Prevent re-submitting data
        header('location: Developer-table.php');
    }

    ?>
    <h2>Enter your Info.</h2>
    <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>'>
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit">

        <?php
        if (isset($_POST['submit']) == true) {
        ?>
            <h1>Success</h1>
        <?php
        }
        ?>
    </form>
</body>

</html>