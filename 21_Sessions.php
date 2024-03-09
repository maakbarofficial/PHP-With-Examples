<?php
// A session is a way to store information (in variables) to be used across multiple pages.

// Unlike a cookie, the information is not stored on the users computer.

// A session is started with the session_start() function.

// Session variables are set with the PHP global variable: $_SESSION.
?>

<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>

    <!-- The session_start() function must be the very first thing in your document. -->

    <?php
    echo "<br>";
    echo "<br>";
    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>

    <?php
    echo "<br>";
    echo "Printing All Sessions Variables<br>";
    print_r($_SESSION);
    ?>

    <?php
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    ?>

    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>


</body>

</html>