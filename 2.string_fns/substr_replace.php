<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>substr replace</title>
  </head>
  
  <body>
    <?php
        echo substr_replace("Hello","Earth",0);        # replacing 'Hello'
        echo "<br><br>";
        echo substr_replace("Hello world","earth",-5); # replacing 'world'
    ?>
  </body>

</html>
