<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>substr</title>
  </head>
  
  <body>
    <?php
        $str1 = "Hello world";
        echo substr($str1,6);
        echo "<br><br>";
        echo substr($str1,8);
        echo "<br><br>";
        echo substr($str1,-1);
    ?>
  </body>

</html>
