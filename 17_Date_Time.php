<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "The time is " . date("h:i:sa");
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<!DOCTYPE html>
<html>

<body>
    <br>
    © 2010-<?php echo date("Y"); ?>

</body>

</html>