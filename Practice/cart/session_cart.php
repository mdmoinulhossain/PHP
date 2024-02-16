<?php
// start the session
session_start();
// NOTE: The function session_start() should be the first statement of the page, before any HTML tag.


// set the session variable
$_SESSION["quantity"] = "2";
$_SESSION["price"] = "300";
$_SESSION["UnitPrice"] = "150";

?>

<html>

<body>

    <?php
    echo "Session variable is set.";
    ?>

    <a href="./cart.php" target="_blank">Go to Cart Page</a>

</body>

</html>