<?php
echo (pi());

// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo (min(0, 150, 30, 20, -8, -200));
echo (max(0, 150, 30, 20, -8, -200));

// The abs() function returns the absolute (positive) value of a number:
echo (abs(-6.7));

// The sqrt() function returns the square root of a number:
echo (sqrt(64));

?>

<?php
// Constants are like variables, except that once they are defined they cannot be changed or undefined.

// A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

// A valid constant name starts with a letter or underscore (no $ sign before the constant name).

// Note: Unlike variables, constants are automatically global across the entire script.

define("name", "Hello PHP");
echo name;

// You can also create a constant by using the const keyword.
const MYCAR = "BMW";
echo MYCAR;
?>

const vs. define()

const are always case-sensitive
define() has has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.

<?php
define("cars", [
    "Civic",
    "BMW",
    "Toyota"
]);
echo cars[0];
?>

<?php
// Constants are automatically global and can be used across the entire script.
define("WELCOME", "Welcome to php Learning");

function myTest()
{
    echo WELCOME;
}

myTest();

?>

PHP Predefined Constants
PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.

__CLASS__ If used inside a class, the class name is returned.
__DIR__ The directory of the file.
__FILE__ The file name including the full path.
__FUNCTION__ If inside a function, the function name is returned.
__LINE__ The current line number.
__METHOD__ If used inside a function that belongs to a class, both class and function name is returned.
__NAMESPACE__ If used inside a namespace, the name of the namespace is returned.
__TRAIT__ If used inside a trait, the trait name is returned.
ClassName::class Returns the name of the specified class and the name of the namespace, if any.

<!DOCTYPE html>
<html>

<body>

    <?php
    echo __LINE__;
    ?>

</body>

</html>

Result Size: 1009 x 966
<!DOCTYPE html>
<html>

<body>

    <?php
    echo __DIR__;
    ?>

</body>

</html>