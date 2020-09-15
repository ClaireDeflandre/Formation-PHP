<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <h2>Créer une fonction from scratch qui s'appelle premierElementTableau().
Elle prendra un argument de type array. Elle devra retourner le premier
élement du tableau.
Si l'array est vide, il faudra retourner null;</h2>

<?php
    function premierElementTableau(){
    $array = [1,2,3];
    $firstkey = $array[array_key_first($array)];
    echo "$firstkey";
    if (empty($array)) {
        echo "le tableau est vide.";
     } else {
          echo "le tableau n'est pas vide.";
     }
     }
?>


    <h2>Créer une fonction from scratch qui s'appelle dernierElementTableau().
Elle prendra un argument de type array. Elle devra retourner le dernier
élement du tableau.
Si l'array est vide, il faudra retourner null;</h2>

<?php
    function dernierElementTableau(){
    $array = [1,2,3];
    $lastkey = $array[array_key_last($array)];
    echo "$lastkey";
    if (empty($array)) {
    echo "le tableau est vide.";
    } else {
    echo "le tableau n'est pas vide.";
}
}
?>


    <h2>Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra
un argument de type array. Elle devra retourner le plus grand des
élements présent dans l'array.
Si l'array est vide, il faudra retourner null;</h2>

<?php
    function plusGrand(){
        $array = [1, 2, 3];
        echo max ($array);
        if (empty($array)) {
            echo "le tableau est vide.";
            } else {
            echo "le tableau n'est pas vide.";
        }
    }
?>

    <h2>Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra
un argument de type array. Elle devra retourner le plus petit des
élements présent dans l'array.
Si l'array est vide, il faudra retourner null;</h2>


<?php
    function plusPetit(){
        $array = [1, 2, 3];
        echo min ($array);
        if (empty($array)) {
            echo "le tableau est vide.";
            } else {
            echo "le tableau n'est pas vide.";
        }
    }
?>


    </body>
</html>

