<?php
// a variable starts with the $ sign, followed by the name of the variable:
$num = 5;
$name = "Ali"

// Rules for PHP variables:
// A variable starts with the $ sign, followed by the name of the variable
// A variable name must start with a letter or the underscore character
// A variable name cannot start with a number
// A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// Variable names are case-sensitive ($age and $AGE are two different variables)
?>


<?php
$text = "PHP";
echo "I love learning $text";

$x = 5;
$y = 4;
echo $x + $y;

$aa = $bb = $cc = "Fruit";

echo "$aa $bb $cc";
?>

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource


<?php
// To get the data type of a variable, use the var_dump() function.
$x = 5;
var_dump($x);
?>


<?php
var_dump(5);
var_dump("Akbar");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>


In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:
local
global
static


<?php
// Global and Local Scope
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$x = 5; // Global Scope

function myfun()
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}

myfun();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

function myTests()
{
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTests();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>


<?php
// PHP The global Keyword
// The global keyword is used to access a global variable from within a function.
// To do this, use the global keyword before the variables (inside the function):

$x = 5;
$y = 10;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>



<?php
// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

// The example above can be rewritten like this:

$x = 5;
$y = 10;

function func()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

func();
echo $y; // outputs 15

?>

<?php
// PHP The static Keyword
// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
// To do this, use the static keyword when you first declare the variable:

function staticfunc()
{
    static $x = 0;
    echo $x;
    $x++;
}

staticfunc();
staticfunc();
staticfunc();


?>