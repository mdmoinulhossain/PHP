<!-- PHP FileSystem Details -->
<!-- https://www.w3schools.com/php/php_ref_filesystem.asp -->
<?php
// echo readfile("./function.txt");
$myfile =  fopen("function.txt", "r") or die("Unable to open file!");

echo fread($myfile, filesize("function.txt"));
fclose($myfile);
