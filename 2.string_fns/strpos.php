<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strpos</title>
  </head>

  <body>
    <?php
        $name = "Ved Bulsara";
            
            echo strpos($name, "ed");
            echo "<br> <br>";
            echo strpos("Ved Bulsara", "d");
            echo "<br> <br>";
            echo strpos("Ved Bulsara", "sara");
    ?>
	
  </body>
</html>
