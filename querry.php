<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("querryInput.txt", "a+") or die("Unable to open file.");
$txt = $_POST["inputQuerry"];
fwrite($myfile, $txt);
echo fread($myfile, filesize("querryInput.txt"));
fclose($myfile);
?>

</body>
</html>
