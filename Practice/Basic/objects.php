<?php
# A class is a template for objects, and an object is an instance of a class.

// `Car` is a class.
class Car {
    # These variables are hold the values of these properties for this(Car) class.
    public $color;
    public $model;

    // __construct function is automatically called when an object is created for this(Car) class.
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    // Output 
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  // An object is created
  $myCar = new Car("black", "Volvo"); 
  echo $myCar -> message();

  echo "<br>";

  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();

  # a new object is inherit all the properties and behaviors from the class.
  # each object will have different values for the properties.

?>