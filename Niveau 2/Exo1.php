<!DOCTYPE html>
<html>
    <head>
        <title>`Syracuse`</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php

    function syracuse($int){
        if (is_int($int) && $int > 0){
                $result = '';
            do {
                if ($int % 2 == 0){
                    $int/=2;
                }
                else{
                    $int = $int*3+1;
                }
                $result.=$int.' ';
            }
            while ($int != 1);
        }
        else{
            $result ='Vous devez entrer un nombre entier supérieur à zéro';
        }
        return $result;
    }

    echo syracuse(25);
    
    ?>

    </body>
</html>