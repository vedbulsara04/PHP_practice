<?php

    function test($num){
        if($num %2 == 0){
            echo "Even";
        }
        else{
            throw new Exception("Enter even number only");
        }
    }
    try{
        test(4);
    }
    catch(Exception $e){
        echo "Message!" . $e ->getMessage();
    }
?>