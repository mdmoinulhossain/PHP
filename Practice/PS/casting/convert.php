<?php

// String to Integer
$price = "200.50";
$quantity = 3;
// Multiply price by quantity and make sure the result is an integer.
$total = (int)$price * $quantity;
echo $total . '<br/>';


// Boolean from Integer
$value = 0;

// Convert the value to boolean and check if it is true or false.
$isbool = (bool)$value;

echo $isbool ? 'true' : 'false' . '<br/>';



// Array to Object
$user = [
    "name" => "John",
    "age" => 30
];

// Convert this array to an object and access the 'name' property.
$convObj = (object)$user;
echo $convObj->name . '<br/>';


// Null to String
$data = null;

// Convert it to string and display the result.
$str = (string)$data;
var_dump($str) . '<br/>';



// Array to String
$items = [1, 2, 3];

// Try to cast it to a string and observe the result.
$isArrToStr = (string)$items;

echo $isArrToStr . '<br/>'; // Output: Notice (Array to string conversion)
// PHP does not support direct array-to-string casting. You can use implode() instead. Join array elements with a string.
echo implode(",", $items); // Output: 1,2,3
