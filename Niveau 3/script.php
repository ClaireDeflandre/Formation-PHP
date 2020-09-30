<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<table>
        <tr>
        <th>Nom</th>
        <td><?php echo htmlspecialchars($_POST['nom']) ?></td>
        <tr>
        <th>Mail</th>
        <td><?php echo htmlspecialchars(verification_email($_POST["mail"])) ?></td>
        <tr>
        <th>Numéro de téléphone</th>
        <td><?php echo htmlspecialchars(verification_tel($_POST["tel"])) ?></td>
        <tr>
        <th>Adresse</th>
        <td><?php echo htmlspecialchars($_POST['adresse']) ?></td>
        <tr>
        <th>Code Postal </th>
        <td><?php echo htmlspecialchars(verification_postal($_POST["code_postal"])) ?></td>
    </table>

        


</body>
</html>


<?php
function verification_email($mail){
            

            if (empty($_POST['mail'])){
                echo '<br>Ce champ est obligatoire <button><a href="Exo4.php">Retour au formulaire</a></button>';
            }
            else{

                if (filter_var($mail,FILTER_VALIDATE_EMAIL))

                {
                    return $mail;
                }else{
                    echo "Votre adresse mail est invalide. <button><a href='Exo4.php'>Retour au formulaire</a></button>";
                }
            }
           
        }

          




function verification_tel ($num){
            
    if (empty($_POST['tel'])){
        echo '<br>Ce champ est obligatoire <button><a href="Exo4.php">Retour au formulaire</a></button>';
    }

    else{
            if (preg_match('/^(06|05) [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}$/', $num))
            {
                return $num;
            } else {
                echo "Votre numéro n'est pas valide. <button><a href='Exo4.php'>Retour au formulaire</a></button>";
            }
            }
        }
            

function verification_postal ($code_postal){

    if (empty($_POST['code_postal'])){
        echo '<br>Ce champ est obligatoire <button><a href="Exo4.php">Retour au formulaire</a></button>';
    } 

    else{
if (strlen($code_postal)==5 && (preg_match ('/[0-9]{5}/', $code_postal)))
    {
        echo $code_postal;
    }
    else
    {
        echo "Code postal incorrect. <button><a href='Exo4.php'>Retour au formulaire</a></button>";
    }
    }
}
    

    ?>
