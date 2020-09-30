<!DOCTYPE html>
<html>
    <head>
        <title>`Compteur de visites`</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php

session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
/*if ($compteur_f>=1){
echo '<strong>'.$compte.'</strong> visite.';
}else {*/
    echo '<strong>'.$compte.'</strong> visites.';


?>

</body>
</html>