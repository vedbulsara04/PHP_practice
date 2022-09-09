<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trim</title>
  </head>
  
  <body>
    <?php
      $str1 = "Hello World!";
        echo $str1 . "<br>";
        echo "<br>";
        echo trim($str1,"Held!");
    ?>
  </body>

</html>
