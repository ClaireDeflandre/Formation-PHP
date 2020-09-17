<!DOCTYPE html>
<html>
    <head>
        <title>`Le triangle`</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php




$nb = 2;
echo "<div align=\"center\">";
while ($nb <> 22){ // Soit 50 le nombre de * à la base de la pyramide
  $nb2 = $nb;
  while ($nb2 <> 0){
    echo "*";
    $nb2 = $nb2-1;
  }
  $nb = $nb+2;
  echo "<br>";
}
echo "</div>";
    

   /* function triangle($int){
        $taille = 10;
        $k = 2 * $int - 2; 
        for ($i = 10; $i<=$taille; $i++){
            for ($k=1; $k<=$i; $k++)
            {
                echo "*";
            }
            
            echo "<br/>";
            }
        }
        echo triangle ($taille)*/
    ?>

    </body>
</html>