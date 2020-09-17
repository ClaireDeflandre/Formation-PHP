<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <h2>Créer une fonction from scratch qui s'appelle verificationPassword().
Elle prendra un argument de type string. Elle devra retourner un boolean
qui vaut true si le password fait 8 caractères ou plus et false si il
fait moins.</h2>

<?php
        function verificationPassword($mdp){
            $mdp = "passwords";
            if (strlen ($mdp)>=8){
                return true;
            }else{
                return false;
            }
        }
            echo verificationPassword();
?>


        <h2>On améliore la verificationPassword() écrite précédemment. Elle prend
toujours un argument de type string. Elle devra désormais retourner un
boolean qui vaut true si le password respecte toutes les règles suivantes
:
* Faire au moins 8 caractères
* Avoir au moins 1 chiffre
* Avoir au moins une majuscule et une minuscule
Et false dans tous les autres cas.</h2>

<?php

    function verificationPassword1(){
        $string = $mdp;
        $majuscule = preg_match ('@[A-Z]@', $mdp);
        $minuscule = preg_match ('@[a-z]@',$mdp);
        $chiffre = preg_match ('@[0-9]@', $mdp);

        if ($majuscule && $minuscule && $chiffre && strlen($mdp)<8);
        {
            return true;
        }
    }
        echo verificationPassword1();
?>


    <h2>Créer une fonction from scratch qui s'appelle capital(). Elle prendra un
argument de type string. Elle devra retourner le nom de la capitale des
pays suivants :
* France ==> Paris
* Allemagne ==> Berlin
* Italie ==> Rome
* Maroc ==> Rabat
* Espagne ==> Madrid
* Portugal ==> Lisbonne
* Angleterre ==> Londres
* Tout autre pays ==> Inconnu
Il faudra utiliser la structure SWITCH pour faire cette exercice.
Bonus : Faîtes en sorte de gérer le nom nom des pays indépendamment de la
casse (majuscules/minuscules).</h2>

<?php

    function capital($pays){

        $string = $pays;
        
        switch ($pays){
            case "France":
                return "Paris";
            break;
            case "Allemagne":
                return "Berlin";
            break;
            case "Italie":
                return "Rome";
            break;
            case "Maroc":
                return "Rabat";
            break;
            case "Espagne":
                return "Madrid";
            break;
            case "Portugual":
                return "Lisbonne";
            break;
            case "Angleterre":
                return "Londres";
            break;
            default:
                return "Inconnu";

        }
    }
        echo capital();

?>


    <h2>Créer une fonction from scratch qui s'appelle listHTML(). Elle prendra
deux arguments :
* Une string représentant le nom de la liste
* Un array représentant les élements de cette liste
Elle devra retourner une liste HTML. Chaque element de cette liste
viendra du tableau passé en paramètre.
Exemple :
Argument titre : "Capitale"
Argument liste : ["Paris", "Berlin", "Moscou"]
Résultat :
"<h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>"
Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne
entre les élements de la liste. Pas d'espace non plus entre le titre et
la liste.
Contraintes :
* Si le titre est null ou vide, il faut que la fonction retourne null.
* Si l'array est vide (0 élément), il faut que la fonction retourne null.</h2>


<?php

function listHTML($listname,$arrayelements){
    $resultat="<h3>$listname</h3>";
    $resultat.="<ul>";
    foreach($arrayelements as $element){
        $resultat.="<li>$element</li>";
    }
    $resultat.="</ul>";
return $resultat;
}
echo "<br>".listHTML('Capitale',["Berlin","Paris","Moscou"]);


?>


    <h2>Créer une fonction from scratch qui s'appelle remplacerLesLettres(). Elle
prendra un argument de type string. Elle devra retourner cette même
string mais en remplacant les "e" par des "3", les "i" par des "1" et les
"o" par des "0"
Exemple :
argument : "Bonjour les amis" ==> Output : "B0nj0ur l3s am1s"
argument : "La programmation Web est trop cool" ==> Output : "La
pr0grammat10n W3b 3st tr0p c00l"</h2>


<?php

    function remplacerLesLettres($string){
        $string = "Bonjour les amis";
        if (!empty($string)){
            return str_replace(["e","i","o"],["3","1","0"], $input);
        }
    }
        echo remplacerLesLettres($string);

?>


    <h2>Créer une fonction from scratch qui s'appelle quelleAnnee(). Elle devra
retourner un integer representant l'année actuelle.
Cherchez en PHP comment on intéragit avec les dates !</h2>

<?php

function quelleAnnee(){
    $today = date("Y");
    return $today;
}
echo "<br>".quelleAnnee();

?>


Créer une fonction from scratch qui s'appelle quelleDate(). Elle devra
retourner une string representant la date actuelle sous le format suivant
DD/MM/YYYY
Où DD représente le jour actuel, MM le mois actuel et YYYY l'année
actuelle. Là encore, cherchez comment en PHP on intéragit avec les dates.


<?php

function quelleDate(){
    $todaysdate = date("d/m/Y");
    return $todaysdate;
}
echo "<br>".quelleDate();

?>


    </body>
</html>