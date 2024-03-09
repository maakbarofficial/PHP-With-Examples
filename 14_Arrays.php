<h1>PHP Arrays</h1>
<a href="https://www.w3schools.com/php/php_ref_array.asp">Link Ref</a>
<p>
    In PHP, there are three types of arrays:

    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays
</p>

<?php
// function myFunction()
// {
//     echo "This text comes from a function";
// }

// // create array:
// $myArr = array("BMW", 15, ["apples", "bananas"], myFunction);

// // calling the function from the array item:
// $myArr[3]();

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

<?php
// PHP Indexed Arrays
// In indexed arrays each item has an index number.

// By default, the first item has index 0, the second item has item 1, etc.
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];
var_dump($cars);

$cars[1] = "Ford";
print_r($cars);

// Loop through an array
foreach ($cars as $x) {
    echo "$x <br>";
}

// Adding new item to an array
array_push($cars, "BMW");
var_dump($cars);
?>


<?php
// PHP Associative Arrays
// Associative arrays are arrays that use named keys that you assign to them.
$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
var_dump($car);

// Changing values
$car["year"] = 2024;
var_dump($car);

// looping through
foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}
?>


<?php
// Creating Array
$cars = array("Volvo", "BMW", "Toyota");
// $cars = ["Volvo", "BMW", "Toyota"];

// Access Array Item
echo $cars[2];

// Update Array Item
$cars[1] = "Ford";
print_r($cars);

// Add Array Item
$fruits = array("Apple", "Banana", "Cherry");
$fruits = ["Orange"];

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];


// Remove Array Item
// With the array_splice() function you specify the index (where to start) and how many items you want to delete.
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);

$cars = array("Volvo", "BMW", "Toyota"); // Remove 2 items, starting a the second item (index 1):
array_splice($cars, 1, 2);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);

// Create a new array, without "Mustang" and "1964":
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);

// Remove the last item:
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);

// Remove the first item:
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
?>

<?php
// Sorting Arrays
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
?>

<?php
// PHP Multidimensional Arrays
// A multidimensional array is an array containing one or more arrays.
// PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage 

// A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
print_r($cars);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

// We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}

?>

For Array Functions Ref
https://www.w3schools.com/php/php_arrays_functions.asp


Function Description
array() Creates an array
array_change_key_case() Changes all keys in an array to lowercase or uppercase
array_chunk() Splits an array into chunks of arrays
array_column() Returns the values from a single column in the input array
array_combine() Creates an array by using the elements from one "keys" array and one "values" array
array_count_values() Counts all the values of an array
array_diff() Compare arrays, and returns the differences (compare values only)
array_diff_assoc() Compare arrays, and returns the differences (compare keys and values)
array_diff_key() Compare arrays, and returns the differences (compare keys only)
array_diff_uassoc() Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
array_diff_ukey() Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
array_fill() Fills an array with values
array_fill_keys() Fills an array with values, specifying keys
array_filter() Filters the values of an array using a callback function
array_flip() Flips/Exchanges all keys with their associated values in an array
array_intersect() Compare arrays, and returns the matches (compare values only)
array_intersect_assoc() Compare arrays and returns the matches (compare keys and values)
array_intersect_key() Compare arrays, and returns the matches (compare keys only)
array_intersect_uassoc() Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
array_intersect_ukey() Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
array_key_exists() Checks if the specified key exists in the array
array_keys() Returns all the keys of an array
array_map() Sends each value of an array to a user-made function, which returns new values
array_merge() Merges one or more arrays into one array
array_merge_recursive() Merges one or more arrays into one array recursively
array_multisort() Sorts multiple or multi-dimensional arrays
array_pad() Inserts a specified number of items, with a specified value, to an array
array_pop() Deletes the last element of an array
array_product() Calculates the product of the values in an array
array_push() Inserts one or more elements to the end of an array
array_rand() Returns one or more random keys from an array
array_reduce() Returns an array as a string, using a user-defined function
array_replace() Replaces the values of the first array with the values from following arrays
array_replace_recursive() Replaces the values of the first array with the values from following arrays recursively
array_reverse() Returns an array in the reverse order
array_search() Searches an array for a given value and returns the key
array_shift() Removes the first element from an array, and returns the value of the removed element
array_slice() Returns selected parts of an array
array_splice() Removes and replaces specified elements of an array
array_sum() Returns the sum of the values in an array
array_udiff() Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
array_udiff_assoc() Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
array_udiff_uassoc() Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
array_uintersect() Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
array_uintersect_assoc() Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
array_uintersect_uassoc() Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
array_unique() Removes duplicate values from an array
array_unshift() Adds one or more elements to the beginning of an array
array_values() Returns all the values of an array
array_walk() Applies a user function to every member of an array
array_walk_recursive() Applies a user function recursively to every member of an array
arsort() Sorts an associative array in descending order, according to the value
asort() Sorts an associative array in ascending order, according to the value
compact() Create array containing variables and their values
count() Returns the number of elements in an array
current() Returns the current element in an array
each() Deprecated from PHP 7.2. Returns the current key and value pair from an array
end() Sets the internal pointer of an array to its last element
extract() Imports variables into the current symbol table from an array
in_array() Checks if a specified value exists in an array
key() Fetches a key from an array
krsort() Sorts an associative array in descending order, according to the key
ksort() Sorts an associative array in ascending order, according to the key
list() Assigns variables as if they were an array
natcasesort() Sorts an array using a case insensitive "natural order" algorithm
natsort() Sorts an array using a "natural order" algorithm
next() Advance the internal array pointer of an array
pos() Alias of current()
prev() Rewinds the internal array pointer
range() Creates an array containing a range of elements
reset() Sets the internal pointer of an array to its first element
rsort() Sorts an indexed array in descending order
shuffle() Shuffles an array
sizeof() Alias of count()
sort() Sorts an indexed array in ascending order
uasort() Sorts an array by values using a user-defined comparison function and maintains the index association
uksort() Sorts an array by keys using a user-defined comparison function
usort() Sorts an array by values using a user-defined comparison function