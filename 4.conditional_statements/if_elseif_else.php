<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_ElseIf_Else</title>
  </head>
  
  <body>
    <?php
    
        $age = 12;
            if($age < 13){
                echo "You are a child!";
            }
            elseif($age >=13 and $age<=19){
                echo "You are a teenager!";
            }
            else{
                echo "You are an adult...";
            }           
    ?>
  </body>

</html>
