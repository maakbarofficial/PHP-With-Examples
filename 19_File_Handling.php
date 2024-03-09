<a href="https://www.w3schools.com/php/php_ref_filesystem.asp">File Ref</a>
<?php
// PHP has several functions for creating, reading, uploading, and editing files.
// echo readfile("webdictionary.txt");
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
// echo fread($myfile, filesize("webdictionary.txt"));

fclose($myfile);
?>

<!DOCTYPE html>
<html>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>

</html>