<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <h2>Créer une fonction from scratch qui s'appelle estIlMajeur(). Elle prendra
un argument de type int. Elle devra retourner un boolean.
Si age >= 18 elle doit retourner true
si age < 18 elle doit retourner false</h2>

<?php

    function estIlMajeur(){
        $a = age;
        $b = 18;
        if ($a < $b)
            {echo "False";}
        elseif ($a >= $b)
            {echo "True";}
    }
?>



    <h2>Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
deux arguments de type int. Elle devra retourner le plus grand des deux.</h2>

<?php
    function plusGrand(){
        $a = 5;
        $b = 9;
        if ($a<$b)
        {echo $b;}
        else
        {echo $a;}
    }
?>


    <h2>Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
deux arguments de type int. Elle devra retourner le plus petit des deux.</h2>

<?php
    function plusPetit(){
        $a = 5;
        $b = 9;
        if ($a<$b)
        {echo $a;}
        else
        {echo $b;}
    }
?>


    <h2>Créer une fonction from scratch qui s'appelle lePlusPetit(). Elle prendra
trois arguments de type int. Elle devra retourner le plus petit des
trois.</h2>


<?php
    function lePlusPetit(){
        $a = 3;
        $b = 5;
        $c = 9;
        if ($a<$b<$c)||($a<$c<$b)
        {echo $a;}
        elseif ($b<$a<$c)||($b<$c<$a)
        {echo $b;}
        else
        {echo $c;}
     
    }
?>



    </body>
</html>