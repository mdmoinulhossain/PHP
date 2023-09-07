<?php

echo "Today is " . date("Y/m/d - l") . "<br/>";

/* H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
*/
date_default_timezone_set('Asia/Dhaka'); // List Of time zone https://www.php.net/manual/en/timezones.php

echo "The time is " . date("h:i:sa") . "<br/>";

// Make time
# mktime(hour, minute, second, month, day, year)
$d = mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:s a", $d) . "<br/>";



// Create a Date From a String With strtotime()
$d = strtotime("10:30pm April 15 2014");
echo "strtotime() - " . date("Y-m-d h:i:s a", $d) . "<br/>";
