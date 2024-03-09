<!DOCTYPE html>
<html>

<body>

    <!-- A callback function (often referred to as just "callback") is a function which is passed as an argument into another function. -->

    <!-- Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function: -->

    <!-- Pass a callback to PHP's array_map() function to calculate the length of every string in an array -->
    <?php
    function my_callback($item)
    {
        return strlen($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    ?>

    <!-- Callbacks in User Defined Functions -->
    <?php
    function exclaim($str)
    {
        return $str . "! ";
    }

    function ask($str)
    {
        return $str . "? ";
    }

    function printFormatted($str, $format)
    {
        // Calling the $format callback function
        echo $format($str);
    }

    // Pass "exclaim" and "ask" as callback functions to printFormatted()
    printFormatted("Hello world", "exclaim");
    printFormatted("Hello world", "ask");
    ?>

</body>

</html>

<?php
// SON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.

// Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.

// PHP has some built-in functions to handle JSON.


// json_encode()
// json_decode()
echo "<br>";
// JSON

// The json_encode() function is used to encode a value to JSON format.
$age = array("Ali" => 35, "Akbar" => 37, "Sufyan" => 43);

echo json_encode($age);
?>

<?php
echo "<br>";
// The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
$jsonobj = '{"Imran":35,"Cristiano":37,"Misbah":43}';

var_dump(json_decode($jsonobj));
echo "<br>";
// The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
var_dump(json_decode($jsonobj, true));

$jsonobj = '{"aa":35,"ab":37,"ac":43}';
echo "<br>";
$obj = json_decode($jsonobj);
echo "<br>";
foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>


<?php
// An exception is an object that describes an error or unexpected behaviour of a PHP script.

// Exceptions are thrown by many PHP functions and classes.

// User defined functions and classes can also throw exceptions.

// Exceptions are a good way to stop a function when it comes across data that it cannot use.
?>

<?php
// Throwing an Exception
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

echo divide(5, 0);

// Fatal error: Uncaught Exception: Division by zero in C:\webfolder\test.php:4
// Stack trace: #0 C:\webfolder\test.php(9):
// divide(5, 0) #1 {main} thrown in C:\webfolder\test.php on line 4
?>

<?php
// The try...catch Statement
// to avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process
try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "Unable to divide.";
}
?>

<?php
// The try...catch...finally Statement
// The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. If finally is present, the catch block is optional.
try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "Unable to divide. ";
} finally {
    echo "Process complete.";
}
?>