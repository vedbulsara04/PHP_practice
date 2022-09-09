<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str replace</title>
  </head>
  
  <body>
    <?php
        $name = "Ved";
        $str1 = "Have a nice day, Sir/Madam!";
           
            echo str_replace("world","Ved","Hello world!");
            echo "<br> <br>";
            echo str_replace("Sir/Madam",$name,$str1);
    ?>
  </body>

</html>
