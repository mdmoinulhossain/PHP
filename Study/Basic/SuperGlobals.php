<?php
# Super global variables are built-in variables that are always available in all scopes.


# $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
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


# $_REQUEST
/*
 PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
 An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE
*/



/*
$_GET:
Data Transmission: Data sent using the GET method is appended to the URL as query parameters. 
For example, https://example.com/page.php?param1=value1&param2=value2.
Security: Data is visible in the URL, so sensitive information should not be transmitted using GET. Users can also modify the URL parameters easily.
Data Size: Limited by the maximum length of a URL, typically around 2048 characters in most web servers and browsers.
Caching: Parameters are cached by some browsers and proxy servers.
Usage: Generally used for non-sensitive data retrieval, like searching or filtering, where bookmarking or sharing URLs with parameters makes sense.

$_POST:
Data Transmission: Data sent using the POST method is included in the HTTP request body and is not visible in the URL.
Security: More secure compared to GET as data is not exposed in the URL.
Data Size: Can handle larger amounts of data compared to GET. The server and PHP configuration might impose their own limits, but they are generally higher than GET.
Caching: Parameters are not cached by default, reducing the risk of unintentional data exposure.
Usage: Used for transmitting sensitive data, like passwords, user credentials, or any data that should not be exposed in the URL.
*/
?>