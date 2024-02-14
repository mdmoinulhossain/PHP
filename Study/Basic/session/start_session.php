<?php
// start the session
session_start();
// NOTE: The function session_start() should be the first statement of the page, before any HTML tag.


// set the session variable
$_SESSION["username"] = "I am Moinul";
$_SESSION["userid"] = "100";

?>

<html>

<body>

    <?php
    echo "Session variable is set.";
    ?>

    <a href="./active_session.php" target="_blank">Go to Second Page</a>

</body>

</html>