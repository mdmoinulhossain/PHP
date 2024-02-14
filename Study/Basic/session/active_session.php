<?php
// start the session
session_start();

// get the session variable values
$username = $_SESSION["username"];
$userid = $_SESSION["userid"];
?>

<html>

<body>

    <?php
    // update the session variable values
    $_SESSION["userid"] = "1111";

    echo "Username is: " . $username . "<br/>";
    echo "User id is: " . $userid;
    ?>

    <!-- To display list of session variable which are store in web application -->
    <?php
    echo "<br/>";
    // print_r($_SESSION);
    ?>
    <a href="./destroy_session.php" target="_blank">Destroy Session</a>

</body>

</html>