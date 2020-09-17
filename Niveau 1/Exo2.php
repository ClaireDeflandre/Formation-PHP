<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <h2>Créer une fonction from scratch qui s'appelle somme(). Elle prendra deux
arguments de type int. Elle devra retourner la somme des deux.</h2>


    <?php
        function somme(){
        $a = 5;
        $b = 6;
        return ($a + $b);
    }
        echo somme();
    ?>


    <h2>Créer une fonction from scratch qui s'appelle soustraction(). Elle
prendra deux arguments de type int. Elle devra retourner la soustraction
des deux. </h2>

    <?php
            function soustraction(){
            $a = 5;
            $b = 4;
            return ($a - $b);
    }
        echo soustraction();
    ?>


    <h2>Créer une fonction from scratch qui s'appelle multiplication(). Elle
prendra deux arguments de type int. Elle devra retourner la
multiplication des deux.</h2>

    <?php
            function multiplication(){
            $a = 5;
            $b = 4;
            return ($a * $b);
    }
            echo multiplication();
    ?>


    </body>
</html>