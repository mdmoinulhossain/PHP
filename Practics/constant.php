<?php 
// Constants are like variables except that once they are defined they cannot be changed or undefined.
# in php v8, constants case-insensitive are deprecated.
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;


// Constant Arrays
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];



//  constant is global. constant function
define("testing", "Welcome to W3Schools.com!");

function myTest() {
  echo testing;
}
 
myTest();
?>