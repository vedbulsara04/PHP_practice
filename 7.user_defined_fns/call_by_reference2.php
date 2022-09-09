<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  
  <body>
    <?php
      function increment(&$i){
        $i++;
      }

      $i = 43;
      increment($i);
      echo $i;
    ?>
  </body>

</html>
