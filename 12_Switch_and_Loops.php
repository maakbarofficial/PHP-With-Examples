<?php
// The Switch expression is evaluated once
// The value of the expression is compared with the values of each case
// If there is a match, the associated block of code is executed
// The break keyword breaks out of the switch block
// The default code block is executed if there is no match
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>

<?php
// The while loop executes a block of code as long as the specified condition is true.

// Print $i as long as $i is less than 6:
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}

// Stop the loop when $i is 3:
$x = 1;
while ($x < 6) {
    if ($x == 3) break;
    echo $x;
    $x++;
}

// Stop, and jump to the next iteration if $i is 3:
$y = 0;
while ($y < 6) {
    $y++;
    if ($y == 3) continue;
    echo $y;
}
?>

<?php
// The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.

// Print $i as long as $i is less than 6:
$i = 1;

do {
    echo $i;
    $i++;
} while ($i < 6);

// Set $i = 8, then print $i as long as $i is less than 6:
$i = 8;

do {
    echo $i;
    $i++;
} while ($i < 6);

// Stop the loop when $i is 3:

$i = 1;

do {
    if ($i == 3) break;
    echo $i;
    $i++;
} while ($i < 6);

// Stop, and jump to the next iteration if $i is 3:

$i = 0;

do {
    $i++;
    if ($i == 3) continue;
    echo $i;
} while ($i < 6);
?>

<?php
// The for loop is used when you know how many times the script should run.
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

for ($x = 0; $x <= 100; $x += 10) {
    echo "The number is: $x <br>";
}
?>

<?php
// The foreach loop - Loops through a block of code for each element in an array or each property in an object.
// The most common use of the foreach loop, is to loop through the items of an array.

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
}

$members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($members as $x => $y) {
    echo "$x : $y <br>";
}

class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
}

// Alternative Syntax
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
    echo "$x <br>";
endforeach;
?>
