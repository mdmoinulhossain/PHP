<?php
# An array is a special variable, which can hold more than one value at a time.
/*
* Indexed arrays - Arrays with a numeric index
* Associative arrays - Arrays with named keys
* Multidimensional arrays - Arrays containing one or more arrays
*/
// Get The Length of an Array - The count() Function

// **************************************************************************** Indexed Arrays
$fruits = ["apple", "banana", "orange"]; // Create indexed array called fruits
echo $fruits[2] . "<br/>"; // Output: orange
// Loop Through an Indexed Array
/*
foreach ($fruits as &$fruit) {
    echo "$fruit\n";
}
*/

$arrlength = count($fruits);

for($x = 0; $x < $arrlength; $x++) {
  echo "$fruits[$x]\n";
}
echo "<br/>";

// **************************************************************************** Associative Arrays
# Associative arrays are arrays that use named keys(key => value) that you assign to them.
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// or
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

echo $age['Ben']. "<br/>"; // Output: 37

foreach($age as $key => $value){
 echo "\n$key" . "=" . "$value";
}





// **************************************************************************** Multidimensional Arrays


?>