<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Returning a value</title>
  </head>
  
  <body>
    <?php
      function cube($n){
        return $n*$n*$n;
      }

      echo "Cube of 3 is : " . cube(3);
    ?>
  </body>

</html>
