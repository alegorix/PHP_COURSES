<?php declare(strict_types= 1); ?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Les Fonctions</h1>

    <?php 
        function bonjour(){
            echo 'Bonjour tout le monde <br>';
        }
        bonjour();
        bonjour();
        bonjour();
    ?>
    <br>
    <hr>
    <br>

    <?php
        $prenom = 'Jason';
        $x = 4;
        $y = 5;

        function bonsoir($p){
            echo 'Bonsoir ' .$p. '<br>';
        }

        function addition($p1, $p2) {
            echo $p1. ' + ' .$p2. ' = ' .($p1 + $p2). '<br>';
        }
    

        bonsoir($prenom);
        bonsoir('Theo');
        addition($x,$y);
        addition(10,15);


    ?>
    <br>
    <hr>
    <br>
    <?php
        $x = 0;
        function plus3($p){
            $p = $p + 3;
            echo 'Valeur dans la fonction : ' .$p;
        }
        plus3($x);
        echo '<br>Valeur en dehors de la fonction : ' .$x;
    ?>

    
<br>
    <hr>
    <br>
    <?php
        $x = 0;
        function plus3v2(&$p){
            $p = $p + 3;
            echo 'Valeur dans la fonction : ' .$p;
        }
        plus3v2($x);
        echo '<br>Valeur en dehors de la fonction : ' .$x;
    ?>
<br>
<hr>
<br>

    <?php

        function hello($prenom, $role='abonné(e)')
{
echo 'Hello ' .$prenom. ' vous êtes un(e) ' .$role. '.<br>';
}    
hello('Norbert');
hello('Eric', 'administrateur');


    ?>

    <br>
    <hr>
    <br>
<?php
    function bonap(...$prenoms) {
    foreach($prenoms as $p) {
        echo 'Bon ap ' .$p. ' !<br>';
    }
}
bonap('Pierre', 'Paul', 'Jean');
?>

<br>
<hr>
<br>

<?php
function test($a, $b) {

    echo $a. ' + ' .$b. ' = ' .($a + $b). '<br>';
}

function test2(float $a, float $b) {

    echo $a. ' + ' .$b. ' = ' .($a + $b). '<br>';

}

test(3, 4);
test(3, '4Jean');
test (3,'Jean');




test2(3, 4);
test2(3, '4Jean');
test2(3,'Jean');
test2(3, 4.5);
test2(3.8, 4.7);

?>

    <p>Un paragraphe</p>
   
  </body>
</html>