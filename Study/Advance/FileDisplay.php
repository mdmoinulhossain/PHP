<?php

// $openDirectory = opendir("./assets");

// while ($readDirectory = readdir($openDirectory)) {
//     var_dump($readDirectory);
// }

function FileDisplay($directory, array $exclude = array('.', '..'))
{
    $files = [];

    if (!is_dir($directory)) {
        return null;
    }

    if (!($openDirectory = opendir($directory))) {
        return null;
    }

    while (($readDirectory = readdir($openDirectory)) !== false) {
        // Remove '.' , '..' from directory
        if (in_array($readDirectory, $exclude)) {
            continue;
        }
        // Display files
        $files[] = $directory . '/' . $readDirectory;
    }

    closedir($openDirectory);

    return $files;
}
