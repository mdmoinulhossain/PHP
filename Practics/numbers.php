<?php 
// ************************** Integers
/*
define in:

is_int()
is_integer()
is_long()
*/

// *************************** Floats
/*
define in:

is_float()
is_double()
*/

// *************************** Infinity
/*
-to check is finite/infinite
is_finite()
is_infinite()
*/



// *********************** NaN
/*
* NaN is used for impossible mathematical operations.
 is_nan()
*/



// *********************** Numerical Strings
/*
From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings. 
*/
$x = "59.85" + 100;
var_dump(is_numeric($x));
// output: bool(true)


// ********************** Casting Strings and Floats to Integers
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast . "<br/>" . $x;


$float_val = 4.4;

var_dump(round($float_val));



echo "<script>console.log()</script>";

?>