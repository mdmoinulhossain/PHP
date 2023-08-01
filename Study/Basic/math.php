<?php 
// ******** pi()
echo(pi()); // returns 3.1415926535898

echo "<br/>";
// ******* min() and max()
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo "<br/>";
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo "<br/>";
// ****** abs() - returns the absolute (positive) value of a number
echo(abs(-6.7));  // returns 6.7
echo "<br/>";

// ****** sqrt() - root
echo(sqrt(64));  // returns 8
echo "<br/>";

// ****** pawer() - square
echo(pow(4,2));  // returns 16
echo "<br/>";

// ****** round() - rounds a floating-point number to its nearest integer
echo(round(0.60));  // returns 1
echo "<br/>";
echo(round(0.49));  // returns 0
echo "<br/>";

// ***** rand() - random number generate
echo(rand());
echo "<br/>";

# random integer between 10 and 100 (inclusive)
echo(rand(10, 100));

?>