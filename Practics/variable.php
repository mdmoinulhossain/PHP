
<?php
# The `global` keyword is used to access a global variable from within a function.

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; 




/*
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
*/

$x = 5;
$y = 10;

function myTest2() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest2();
echo $y;


# The `static` Keyword
/*
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
*/

function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest3();
  myTest3();
  myTest3();
?>