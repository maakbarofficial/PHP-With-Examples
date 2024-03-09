The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

<?php
function myMessage()
{
    echo "Hello World";
}

myMessage();
?>

<?php
function familyName($fname)
{
    echo "$fname ali.<br>";
}

familyName("akbar");
familyName("imran");
familyName("sufyan");
familyName("usman");
familyName("arsalan");

// function familyName($fname, $year)
// {
//     echo "$fname Refsnes. Born in $year <br>";
// }


function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>

<?php
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>

<?php
// Passing Arguments by Reference
// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

<?php
// Variable Number of Arguments
// By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

// The variadic function argument becomes an array.

// Example
// A function that do not know how many arguments it will get:

function sumMyNumbers(...$x)
{
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
?>

<?php
// You can only have one argument with variable length, and it has to be the last argument.

// Example
// The variadic argument must be the last argument:
function myFamily($lastname, ...$firstname)
{
    $txt = "";
    $len = count($firstname);
    for ($i = 0; $i < $len; $i++) {
        $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
}

$a = myFamily("ali", "akbar", "sufyan", "imran");
echo $a;
?>


PHP is a Loosely Typed Language
To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.

In the following example we try to send both a number and a string to the function, but here we have added the strict declaration:
<?php

// declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown

function addNumbers(float $a, float $b): int
{
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
?>