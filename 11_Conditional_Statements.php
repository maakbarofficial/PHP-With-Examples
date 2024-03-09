<?php
if (5 > 3) {
    echo "Have a good day!";
}

$t = 14;

if ($t == 14) {
    echo "Have a good day!";
}

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $c < $a) {
    echo "Both conditions are true";
}
?>

<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

// Shorthand 

// One-line if statement:
$a = 5;
if ($a < 10) $b = "Hello";
echo $b

// One-line if...else statement:
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;
?>

<?php
// Nested if
$a = 13;

if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
}
?>