 <form method="GET">
  <h1>Quelle verbe voulez vous conjuguer ?</h1>
   <input type="text" name="verbepro">
   <input type="submit" name="submit" value="Conjuguer">
 </form>
<?php
 
 $verbe = !empty($_GET['verbepro']) ? $_GET['verbepro'] : null;
 
 if ($verbe)
  {
     $verbe= substr($verbe, 0, -2); 
        $tab1 = array( 'je' => 'e'
                  , 'tu' => 'es'
                  , 'il' => 'e'
                  , 'nous'  => 'ons'
                  , 'vous' => 'ez'
                  , 'ils' => 'ent');       // cette clé sera 0
              
       

  foreach($tab1 as $pronom=>$conjug ){

    echo "<br>".  $pronom . "  " . $verbe . $conjug . "<br>";
  }
} 
 
else 
  {exit();}
	  

?>