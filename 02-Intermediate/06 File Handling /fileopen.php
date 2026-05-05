<html>
<body>

<?php
$filename = "welcome.txt";

// Check if file exists
if (!file_exists($filename)) {
    die("The file $filename does not exist.");
}

// Open file in read mode
$file = fopen($filename, "r");

// Optional: read content
echo fread($file, filesize($filename));

// Close file
fclose($file);
?>

</body>
</html>