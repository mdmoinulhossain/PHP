<?php
// start the session
session_start();
?>

<html>

<body>

    <?php
    // clean the session variable
    session_unset();

    // destroy the session
    session_destroy();
    ?>

</body>

</html>