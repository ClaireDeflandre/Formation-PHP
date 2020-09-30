<!DOCTYPE html>
<html>
    <head>
        <title>`Tableau associatif`</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php
        
        $note = [
        "Roger"=> 12,
        "Monica"=> 16,
        "Najat"=> 15,
        ];

        print_r ("<br>");

        //Ajouter une valeur au tableau

        $note["Anton"]=10;
        var_dump($note);

        print_r ("<br>");
        
        //Supprimer une valeur du tableau grace à "unset"
        
        unset ($note["Monica"]);
        var_dump($note);

        //Créer des espaces entre les lignes pour rendre la lecture plus clair

        print_r ("<br>");

        //Afficher la note maximum et minimum du tableau avec max($note) et min($note)

        echo "<br> La note max est: ",max($note), " et la note min est: ",min($note);

        print_r ("<br>");

        //Afficher les valeurs du tableau par ordre alphabethique grace à ksort

        ksort($note);
        foreach ($note as $key => $value) {
            print_r ("<br>La note de l’étudiant $key est : $value");
        }
       
        print_r ("<br>");

        //Afficher les valeurs du tableau de la meilleure note à la moins bonne grace à arsort

        arsort ($note);
        foreach ($note as $key => $value) {
            print_r ("<br>La note de l'étudiant $key est : $value");
        }
        
        echo "<br>";

        //Afficher la moyenne des notes des élèves grace à round(array_sum($note)/count($note),2)

       echo "<br>La moyenne de la classe: ",round(array_sum($note)/count($note),2);

        /*foreach ($note as $clef => $valeur){
            print_r( $clef. ' a obtenu la note ' .$valeur. '<br>');
        }
        
  */
        
    ?>

    </body>
</html>