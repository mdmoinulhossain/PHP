<?php
// ************************************************ While loop
/*
 * $ takes Initialize value 
 while (condition is true) {
  code to be executed;
}
*/
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}


// *********************************************** do while Loop
/*
Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false.
do {
  code to be executed;
} while (condition is true);
*/

$y = 1;
do {
  echo "The number is: $y <br>";
  $y++;
} while ($y <= 5);



// ************************************************* for Loop
/*
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

* init counter: Initialize the loop counter value
* test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
* increment counter: Increases the loop counter value
*/

for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }



// ********************************************** foreach Loop
/*
  * The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

  foreach ($array as $value) {
    code to be executed;
  }

  Ex.
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
    echo "$value <br/>";
    }
*/

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $key => $val) {
  echo "$key = $val<br/>";
}


// ********* Break and continue
# loop is stop when it's reach 4
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

  // skips current element of a sequence, here skip 4 from the output
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }


//   use in while loop
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>