
<!DOCTYPE html>
<html lang='fr'>
  <head>

    <meta charset='UTF-8'>
    <title>La suite de fibonacci</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="java.js"></script>

  </head>
  <body>


<?php

	const max_iteration = 10;
	$tableau_couple = array(0);
	function fibo( $etape, $tableau_couple ){
		echo "Etape $etape : ";

		$couple_etape = 0;
		$taille_tableau = count($tableau_couple);
		for($i = 0; $i < $taille_tableau; $i++ ){
			if( $tableau_couple[$i] == 0 ){
				$tableau_couple[$i] = 1;
			}elseif( $tableau_couple[$i] == 1 ){
				$tableau_couple[] = 0;
				$couple_etape++;
			}
		}
		
		echo $couple_etape . "<br/>";

		if( $etape < max_iteration ){
			fibo( $etape+1, $tableau_couple );
		}

	}	
	
	fibo( 0, $tableau_couple );
	
?>

</body>

</html>