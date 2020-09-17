<!DOCTYPE html>
<html>
    <head>
        <title>`Reverse`</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php

    // echo strrev("abcdef GHI");
    
    function reverse(){
        $string = "abcdef GHI";
        $s ='';
        for ($i= strlen($string); $i>=0; $i--){
             $s .= substr($string, $i, 1);
        }
        return $s;
    }
        echo reverse();
    ?>

    </body>
</html>