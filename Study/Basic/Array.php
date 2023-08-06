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
#  sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
/* Two-dimensional Arrays(an array of array).
each element of the outer array holds another array as its value. */
echo "<br/>";
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][1]; // Output: 22

// By loop
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}




/* Three-dimensional Arrays(an array of array of array). */
$threeDimensionalArray = array(
  // Layer 1
  array(
      // Layer 2 - Row 1
      array(1, 2, 3),
      // Layer 2 - Row 2
      array(4, 5, 6),
  ),
  // Layer 1
  array(
      // Layer 2 - Row 1
      array(7, 8, 9),
      // Layer 2 - Row 2
      array(10, 11, 12),
  ),
);

print_r($threeDimensionalArray);
?>