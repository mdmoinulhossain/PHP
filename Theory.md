- PHP statements end with a semicolon (;)
- all variable names are case-sensitive!
- PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
- A variable starts with the $ sign

* The PHP var_dump() function returns the data type and value

# echo

- `echo` can takes multiple parameter/arguments while `print` takes one, and it's faster than `print`.
- The `print_r()` function prints the information about a variable in a more human-readable way(by array).

# Rules for PHP variables:

- A variable starts with the $ sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and \_ )
- Variable names are case-sensitive ($age and $AGE are two different variables)

# PHP Variables Scope

- local - A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function
- global - A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
- static

# Data types

- String
- Integer
- Float (ex. 1.5)
- Boolean(true/false)
- Array
- Object
- NULL
- Resource

# PHP is a Loosely Typed Language

PHP is considered a loosely typed language because it allows flexibility in variable typing and data manipulation. In loosely typed languages, variables do not have explicit data types declared during their creation, and the type of data a variable holds can be changed dynamically during runtime.

In PHP 7, a new feature called strict typing was introduced. Strict typing allows you to specify the type of a variable when you declare it, and PHP will then check to make sure that the variable is only ever assigned values of the correct type. This can help to prevent errors, but it can also make your code less flexible.

Example:

```
<?php
$age = 30; // $age is an integer
$age = "thirty"; // $age is now a string

$number1 = "5";
$number2 = 10;

$result = $number1 + $number2; // PHP automatically converts $number1 from string to integer for the addition

echo $result; // Output: 15
?>
```


* require will produce a fatal error (E_COMPILE_ERROR) and stop the script
* include will only produce a warning (E_WARNING) and the script will continue