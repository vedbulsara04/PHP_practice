<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameterized functions</title>
  </head>
  
  <body>
    <?php
      // any number of parameters in the function

        # adding 2 numbers

        function add($x,$y){
          $sum = $x + $y;
          echo "Sum of 2 numbers : $sum";
          echo "<br><br>";
        }

        add(91,9);

        # subtraction of 2 numbers

        function sub($x,$y){
          $diff = $x - $y;
          echo "Difference of 2 numbers : $diff";
          echo "<br><br>";
        }

        sub(100,91);
    ?>
  </body>

</html>
