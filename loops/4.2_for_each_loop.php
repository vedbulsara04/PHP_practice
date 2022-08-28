<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  
  <body>
    <?php
        $age = array("John Wick"=>"55", "Jason Bourne"=>"45", "John Price"=>"35");
            foreach($age as $x => $val){
              echo "$x = $val <br>";
            }
    ?>
  </body>

</html>
