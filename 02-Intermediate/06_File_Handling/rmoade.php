<html>
<body>
<?php
$file=fopen("welcome.txt","r") or exit("Unable to open file!");
echo fread($file, filesize("welcome.txt"));
fclose($file);
?>
</body>
</html>