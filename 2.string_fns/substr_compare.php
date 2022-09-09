<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>substr compare</title>
  </head>
  
  <body>
    <?php

        # if this function returns 0, the 2 strings are equal.
        # if it returns -1, 2 strings are != 

          echo substr_compare("Lewis Hamilton","Lewis hamilton",0);
          echo "<br><br>";
          echo substr_compare("Hello world","Hello world",0);

    ?>
  </body>

</html>
