<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call By Reference 1</title>
  </head>
  
  <body>
    <?php
      
      function adder(&$str2){
        $str2 .=  "Ved Bulsara";
      }

      $str1 = "Hello ";
      adder($str1);
      echo $str1;

    ?>
  </body>

</html>
