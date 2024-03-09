<?php

echo "Learning Strings";


?>

Double or Single Quotes?
There is a big difference between double quotes and single quotes in PHP.
Double quotes process special characters, single quotes does not.

<?php
$double = "Akbar";
echo "Hello $double";

$double = "Akbar";
echo 'Hello $double';
?>

<?php
// https://www.w3schools.com/php/php_ref_string.asp

$name = "Ali Akbar";

// Getting Length
echo strlen($name);

// Getting Word Count
echo str_word_count($name);

// Search for specific text
echo strpos($name, "akbar");
echo strpos("Hello world!", "world");

// Lower & Upper Case
echo strtoupper($name);
echo strtolower($name);

// Replace String
echo str_replace("Akbar", "Muhammad", $name);

// Reverse String
echo strrev($name);

// Remove Whitespaces
$x = " Hello World! ";
echo trim($x);
?>


<?php
// Convert String into Array
// The PHP explode() function splits a string into an array.
// The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/

?>


<?php
// String Concatenation
$x = "Hello";
$y = "World";
// Using dot operator
$z = $x . $y;
$z_space = $x . " " . $y;
$z_double = "$x $y";
echo $z;
echo $z_space;
echo $z_double;
?>

<?php
// Slicing

// Start the slice at index 6 and end the slice 5 positions later:
$x = "Hello World!";
echo substr($x, 6, 5);


// Slice to the End
// By leaving out the length parameter, the range will go to the end:
// Start the slice at index 6 and go all the way to the end:
echo substr($x, 6);


// Slice From the End
// Use negative indexes to start the slice from the end of the string:
// Get the 3 characters, starting from the "o" in world (index -5):
echo substr($x, -5, 3);

// The last character has index -1.

// From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3).
// Should end up with "ow are y":

$x = "Hi, how are you?";
echo substr($x, 5, -3);

?>

Escape Character
To insert characters that are illegal in a string, use an escape character.
An escape character is a backslash \ followed by the character you want to insert.

\' Single Quote
\" Double Quote
\$ PHP variables
\n New Line
\r Carriage Return
\t Tab
\f Form Feed
\ooo Octal value
\xhh Hex value

<?php
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
?>