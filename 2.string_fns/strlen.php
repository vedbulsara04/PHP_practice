<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>String methods</title>
  
  </head>

  <body>
	<?php
      $name = "Ved Buslara";
      $str1 = "Ved";
        echo str_word_count($str1) . "<br> <br>";  
        echo str_word_count("Ved Buslara") . "<br> <br>";
        echo str_word_count($name);
    ?>
  </body>
</html>
