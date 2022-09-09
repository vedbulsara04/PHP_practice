<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default arguments</title>
  </head>
  
  <body>
    <?php
      function sayHello($name = "Ved"){
        echo "Hello $name!";
        echo "<br><br>";
      }

      sayHello(); //passing no value.
      sayHello("Virat Kohli");
      sayHello("Lewis Hamilton");
    ?>
  </body>

</html>
