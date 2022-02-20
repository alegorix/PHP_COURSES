
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <?php
        echo "<h2>Mon titre de niveau 2</h2>";
        echo 'Bonjour !<br>';
        echo 47;
        echo "<br>J'ai ", 47, " ans.<br>";

        print "<h2>Mon titre de niveau 2</h2>";
        print 'Bonjour !<br>';
        print 47;

        print '<br>';

        echo 'Je m\'appelle Eric mais tout le monde m\'appelle "Ricks" <br>';

        echo "Je m'appelle Eric mais tout le monde m'appelle \"Ricks\"<br>";


        print 'Je m\'appelle Eric mais tout le monde m\'appelle "Ricks" <br>';

        print "Je m'appelle Eric mais tout le monde m'appelle \"Ricks\"<br>";




    ?>

    <p>Séparation</p>
    <hr>

    <?php
        $prenom = "Eric";
        $age = 47;


        //echo $prenom;

        echo "La variable \$age contient : ";
        echo $age;
        echo "<br>";

        $age = 48;
        $age2 = "48";
        $age3 = 47.75;
        $vrai = true;
        $faux = false;
        $vide = NULL;
        $vide2;


        echo "La variable \$age contient : ";
        echo $age;
        echo "<br>";

        echo "La variable \$age contient une valeur de type ";
        echo gettype ($age);

        echo "<br>La variable \$age2 contient une valeur de type ";
        echo gettype ($age2);

        echo "<br>La variable \$age3 contient une valeur de type ";
        echo gettype ($age3);

        echo "<br>La variable \$vrai contient une valeur de type ";
        echo gettype ($vrai);

        echo "<br>La variable \$faux contient une valeur de type ";
        echo gettype ($faux);

        echo "<br>La variable \$vide contient une valeur de type ";
        echo gettype ($vide);

        echo "<br>La variable \$vide2 contient une valeur de type ";
        echo gettype ($vide2);




    ?>
<p>Séparation</p>
    <hr>
    <?php
        $prenom = "Eric";
        $nom = "Delbrassinne";
        $age = 47;

        echo "Je m'appelle $prenom et j'ai $age ans <br>";
        echo "Je m'appelle {$prenom} et j'ai {$age} ans <br>";
        echo 'Je m\'appelle $prenom et j\'ai $age ans <br>';

        $presentation1 = "Je suis $prenom $nom, j'ai $age ans <br>";
        $presentation2 = "Je suis {$prenom} {$nom}, j'ai {$age} ans <br>";
        $presentation3 = 'Je suis $prenom $nom, j\'ai $age ans';

        echo $presentation1;
        echo $presentation2;
        echo $presentation3;



    ?>
<p>Séparation</p>
    <hr>
<?php
    $prenom = "Eric";
    $nom = "Delbrassinne";
    $age = 47;
    $pres = "Je suis " .$prenom. " " .$nom. ", j'ai " .$age. " ans";
    $pres2 = 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai ' .$age. ' ans';

    echo $pres. '<br>' .$pres2;


?>
    
    <p>Séparation</p>
    <hr>

<?php
    $x = 2;
    $y = 3;
    $z = 4;

    echo '$x stocke ' .$x. ', $y stocke ' .$y. ', $z stocke ' .$z. '<br>';


    $a = $x + 1; //$a stocke 2 + 1 = 3
    $b = $x + $y; //$b stocke 2 + 3 = 5
    $c = $x - $y; //$c stocke 2 - 3 = -1

    echo '$a stocke ' .$a. ', $b stocke ' .$b. ', $c stocke ' .$c. '<br>';

    $x = $x * $y; //$x stocke désormais 2 * 3 = 6
    echo 'La variable $x stocke désormais : ' .$x. '<br>';

    $z = $x / $y; //$z stocke désormais 6 / 3 = 2
    echo 'La variable $z stocke désormais : ' .$z. '<br>';

    $m = 5 % 3;
    echo 'le reste de la division euclidienne de 5 par 3 est ' .$m.'<br>';

    $p = $z ** 4; // 2 exposant 4 = 2 * 2 * 2 * 2 = 16
    echo 'La variable $p stocke le résultat de 2 puissance 4 = '.$p.'<br>';




?>


    
<p>Séparation</p>
    <hr>


<?php
    $x = 2 + 3 * 4; //$x stocke 14
    $y = (2 + 3) * 4; //$y stocke 20
    $z = 2 ** 3 - 4 * 4 / 8; //$z stocke 6
    
    echo '$x : ' .$x. '<br>$y : ' .$y. '<br>$z : ' .$z.'<br>';


?>    

<p>Séparation</p>
    <hr>

<?php

    $x = "2";
    $y = "3.14";

    echo '$x stocke la valeur ' .$x. ' de type ' .gettype($x). '<br>';
    echo '$y stocke la valeur ' .$y. ' de type ' .gettype($y). '<br>';


    $x = +$x;
    $y = -$y;
    $z = +"3";

    echo '$x stocke la valeur ' .$x. ' de type ' .gettype($x). '<br>';
    echo '$y stocke la valeur ' .$y. ' de type ' .gettype($y). '<br>';
    echo '$z stocke la valeur ' .$z. ' de type ' .gettype($z). '<br>';


    


?>    


<p>Séparation</p>
    <hr>

<?php
$a = "Bonjour";
$a .= " Jason";
echo '$a stocke : ' .$a. '<br>';

$x = 5;
$x -= 3; // 5 - 3 = 2   $x stocke désormais 2 
echo '$x stocke : ' .$x. '<br>';

$y = 5;
$y += 3; // 5 + 3 = 8   $y stocke désormais 8
echo '$y stocke : ' .$y. '<br>';

$z = 3;
$z **= $x; // 3 exposant 2 = 3 * 3 = 9
echo '$z stocke : ' .$z. '<br>';





?>

<p>Séparation</p>
    <hr>

<?php
    $x = 1;
    $y = 2;
    $z = 3;
    $a = 5;

    $x = $z += 2; //$z stocke 5 et $x stocke 5
    echo '$x stocke : ' .$x. ' et $z stocke : ' .$z. '<br>';

    $y += $z -= 2; // $z stocke 5 - 2 = 3 et $y stocke 2 + 3 = 5
    echo '$y stocke : ' .$y. ' et $z stocke : ' .$z. '<br>';

    $y /= $z -= 2; // $z stocke 1 et $y stocke 5
    echo '$y stocke : ' .$y. ' et $z stocke : ' .$z. '<br>';

    $a *= 4 + 2; // $a stocke 30
    echo '$a stocke : ' .$a;



?>


   
  </body>
</html>