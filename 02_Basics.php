<?php
// PHP code goes here
?>

<!DOCTYPE html>
<html>

<body>

    <h1>PHP Page</h1>

    <?php
    echo "Hello PHP I am learning you....!";
    ?>

</body>

</html>


PHP Case Sensitivity
In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.

In the example below, all three echo statements below are equal and legal:
<!DOCTYPE html>
<html>

<body>

    <?php
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    ?>

</body>

</html>

Note: However; all variable names are case-sensitive!

Look at the example below; only the first statement will display the value of the $color variable! This is because $color, $COLOR, and $coLOR are treated as three different variables:

<!DOCTYPE html>
<html>

<body>

    <?php
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    ?>

</body>

</html>