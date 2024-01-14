<!-- PHP FileSystem Details -->
<!-- https://www.w3schools.com/php/php_ref_filesystem.asp -->
<?php
// echo readfile("./function.txt"); // Read and Count the character.
$path = "./function.txt";
echo "File Name: " . basename($path) . "<br/>";

// Return Path name
echo dirname($path) . "<br/>";

echo "Disk free space: " . disk_free_space("C:") . "<br/>";
echo "Disk Total space: " . disk_total_space("C:") . "<br/>";

$myfile =  fopen("function.txt", "r+") or die("Unable to open file!");

// echo filesize("function.txt");  // Count the character of a file.
echo "Content: " . fread($myfile, filesize("function.txt")) . "<br/>";

fclose($myfile);

// Copy a file.
// echo copy("function.txt", "target.txt");
// delete()/unlink(); - deleting file.

// return array with content.
print_r(file("./function.txt"));
echo "<br/>";
// return string
print_r(file_get_contents("./function.txt"));

// file access time
echo  "<br/>" . "Last access: " . date("F d Y H:i:s.", fileatime("./function.txt")) . "<br/>";

echo "File Size " . filesize("./function.txt") . " Bytes <br/>";
echo "File type " . filetype("./function.txt") . "<br/>";

// Check is it directory or Not.
$file = "./assets";
if (is_dir($file)) {
    echo ("$file is a directory");
} else {
    echo ("$file is not a directory");
}
echo "<br/>";
// Absolute path
echo realpath("./function.txt") . "<br/>";

// Return file details information
print_r(stat("./function.txt"));

// Delete file
// unlink("./function.txt");
