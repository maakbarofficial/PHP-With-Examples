PHP Include Files

The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.

Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.

It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.

The include and require statements are identical, except upon failure:

require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue

<?php include '05_print.php'; ?>

<?php include 'noFileExists.php';
echo "I have no file.";
?>

The require statement is also used to include a file into the PHP code.

However, there is one big difference between include and require; when a file is included with the include statement and PHP cannot find it, the script will continue to execute:

If we do the same example using the require statement, the echo statement will not be executed because the script execution dies after the require statement returned a fatal error:


<body>

    <?php echo "<h1>Use require when the file is required by the application.</h1>" ?>

    <?php echo "<h1> Use include when the file is not required and application should continue when file is not found.</h1>" ?>
</body>

<?php require 'noFileExists.php';
echo "I have a no file";
?>