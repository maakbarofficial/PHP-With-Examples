Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

<?php
// $GLOBALS is an array that contains all global variables.
$x = 7;

function myfunction()
{
    echo $GLOBALS['x'];
}

myfunction();

$y = 100;

echo $GLOBALS["y"];
echo $y;
?>

<?php
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<?php
// $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.

// In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.

// You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie, like this:

$_REQUEST['firstname']

?>


<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

</body>

</html>

<?php
// $_POST contains an array of variables received via the HTTP POST method.

// There are two main ways to send variables via the HTTP Post method:

// HTML forms
// JavaScript HTTP requests
?>

<?php
// $_GET contains an array of variables received via the HTTP GET method.

// There are two main ways to send variables via the HTTP GET method:

// Query strings in the URL
// HTML Forms
?>

<!DOCTYPE HTML>
<html>

<body>

    <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

</body>

</html>


<!-- PHP code inside the welcome_get.php page:

<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>


-->