<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Multidimensional array</title>
  </head>
  <body>
    <!-- example of Two Dimensional array -->
    <?php 
      $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
    ?>
    <table>
      <tr>
        <td>#</td>
        <td>BrandName</td>
        <td>Stock</td>
        <td>Sold</td>
      </tr>
      <?php
        for ($row = 0; $row < 4; $row++) {
          echo "<tr>";
          echo "<td>$row</td>";
          for ($col = 0; $col < 3; $col++) {
            echo "<td>".$cars[$row][$col]."</td>";
          }
          echo "</tr>";
        }
      ?>     
    </table>
    <hr>




<!-- example of Three Dimensional array -->
    <?php 
    $studentGrades = array(
      array(
          array('Math' => 90, 'Science' => 85, 'History' => 78),
          array('Math' => 92, 'Science' => 88, 'History' => 80),
      ),
      array(
          array('Math' => 85, 'Science' => 92, 'History' => 87),
          array('Math' => 88, 'Science' => 78, 'History' => 92),
      ),
      array(
          array('Math' => 95, 'Science' => 91, 'History' => 84),
          array('Math' => 89, 'Science' => 90, 'History' => 82),
      ),
  );
?>

<!-- Creating a table using for loops -->
<table border="1">
<tr>
  <th>Subject</th>
  <th>Semester 1</th>
  <th>Semester 2</th>
  <th>Semester 3</th>
</tr>
<?php
$subjects = array('Math', 'Science', 'History');

for ($i = 0; $i < count($subjects); $i++) {
    echo '<tr>';
    echo '<td>' . $subjects[$i] . '</td>';
    
    for ($j = 0; $j < count($studentGrades); $j++) {
        echo '<td>' . $studentGrades[$j][0][$subjects[$i]] . '</td>';
    }

    echo '</tr>';
}

echo '</table>';

?>
  </body>
</html>
