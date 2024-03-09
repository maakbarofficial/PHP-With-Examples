PHP Numbers
There are three main numeric types in PHP:

Integer
Float
Number Strings

In addition, PHP has two more data types used for numbers:
Infinity
NaN

<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

$x = 10.365;
var_dump(is_float($x));

// A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
$x = 1.9e411;
var_dump($x);

// NaN stands for Not a Number.
// NaN is used for impossible mathematical operations.
$x = acos(8);
var_dump($x);
?>

<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.


<?php
// PHP Casting Strings and Floats to Integers
// Sometimes you need to cast a numerical value into another data type.
// The (int), (integer), and intval() functions are often used to convert a value to an integer.

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>