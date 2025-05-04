<?php
// **************************************************** Simple Problem ***************************************

// P1.
$input = "25abc";
// Cast only if it's a pure number. Otherwise, show an error.

/* ctype_digit — Check for numeric character(s) in a string.
Returns 'true' if every character in the string text is a decimal digit, false otherwise. When called with an empty string the result will always be false.
*/
if (ctype_digit($input)) {
    $checkNum = (int)$input;
    echo "valid number ->" . $checkNum;
} else {
    echo "Invalid Input";
}
