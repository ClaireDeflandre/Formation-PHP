<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>


        <h2>Faites en sorte que la fonction HelloWorld retourne exactement la valeur
Hello World!</h2>
        
        <?php
            function helloWorld(){
                echo "Hello World";
            }
        ?>

        

        <h2>Créer une fonction from scratch qui s'appelle quiEstLeMeilleurProf().
Elle doit retourner "Mon super formateur de dev web"</h2>

        <?php
            function quiEstLeMeilleurProf(){
                echo "Mon super formateur de dev web";
            }
        ?>



        <h2>Créer une fonction from scratch qui s'appelle jeRetourneMonArgument().
Exemple : argument = "abc" ==> return abc
arg = 123 ==> return 123</h2>

        <?php
            function jeRetourneMonArgument(){
                $a = "abc";
                   echo $a;
                $a = "123";
                    echo $a;
            }
        ?>



        <h2>Créer une fonction from scratch qui s'appelle concatenation(). Elle
prendra deux arguments de type string. Elle devra retourner la
concatenation des deux.</h2>

        <?php
            function concatenation(){
                $a="Kingsley";
                echo $a . "Coman";
            }
        ?>

        
        <h2>Créer une fonction from scratch qui s'appelle concatenationAvecEspace().
Elle prendra deux arguments de type string. Elle devra retourner la
concatenation des deux avec un espace entre les deux.
Exemple :
argument 1 = "Manuel"
argument 2 = "Neuer"
Resultat : "Manuel Neuer"</h2>

        <?php
            function concatenationAvecEspace(){
                $a="Manuel ";
                echo $a . "Neuer";
            }
        ?>
        


    </body>
</html>