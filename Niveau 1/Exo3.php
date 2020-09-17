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

    function estIlMajeur($age){
        
        if ($age < 18)
            {return true;}
        else 
            {return false;}
    }
        echo estIlMajeur(16);
?>



    <h2>Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
deux arguments de type int. Elle devra retourner le plus grand des deux.</h2>

<?php
    function plusGrand($nb1,$nb2){
        if ($nb1<$nb2)
        {return $nb2;}
        else
        {return $nb1;}
    }
        echo plusGrand(8,5);
?>


<!-- function plusGrand($nb1,$nb2) {
    return max($nb1,$nb2);
}
echo max(56,3); -->



    <h2>Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
deux arguments de type int. Elle devra retourner le plus petit des deux.</h2>

<?php
    function plusPetit($nb1,$nb2){
        
        if ($nb1<$nb2)
        {return $nb1;}
        else
        {return $nb2;}
    }
        echo plusPetit(12,6);
?>


    <h2>Créer une fonction from scratch qui s'appelle lePlusPetit(). Elle prendra
trois arguments de type int. Elle devra retourner le plus petit des
trois.</h2>

<?php
    function lePlusPetit($nb1,$nb2,$nb3){
      
        return min($nb1,$nb2,$nb3);  
    }

    echo lePlusPetit(5,8,9);

?>




    </body>
</html>