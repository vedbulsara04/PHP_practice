<?php
    try{
        $a = 10;
        $b = 5;

        if ($b == 0) throw new Exception("Divide by zero exception occurred");
        $c - $a / $b;
        echo "Value of C: " . $c."<br>";
}
catch (Exception $e) {
    printf("Exception %s", $e->getMessage());
}

?>