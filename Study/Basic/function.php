<?php
/*
Function: 1. Build in 
          2. User Defined Function
*/
#2 User Defined Function:
// Function declaration
function square($x, $y) {
    echo pow($x, $y) . "<br/>";
}

// These Information can be passed to functions through arguments. An argument is just like a variable.
$x = 5;
$y = 2;
square($x,$y); // call/execute a function
square(10,3);



# As like loosely type(without strict)
/*
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days") . "<br/>";
*/
// In php 7, since strict is NOT enabled "5 days" is changed to int(5), and it will return 10.

//  declare(strict_types=1); // strict requirement, it's will be in the beginning of php code.
/*
<?php declare(strict_types=1);
?>
*/
# Note: in php 8, "5 days" is making fetal error "Uncaught TypeError: addNumbers(): Argument #2 ($b) must be of type int, string given"



# Default Argument Value
function greetings($name="Guest") {
    print("Hello ". $name."!<br>");
}
    greetings();   # Output : Hello Guest! <default value>
    greetings("World");   # Output : Hello World! <changes default value>




# Return Type Declarations
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2) . "<br/>";

// You can specify a different return type, than the argument types, but make sure the return is the correct type:
function addNumber(float $a, float $b) : int {
return (int)($a + $b);
}
echo addNumber(1.2, 5.2) . "<br/>";



# Passing Arguments by Reference
function add_five(&$value) {
$value += 5;
}

$num = 2;
add_five($num);
echo $num; // Output: 7



?>