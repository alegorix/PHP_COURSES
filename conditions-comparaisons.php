
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

    $x = 4; // affectation de la valeur 4 à $x

    /*On compare la valeur contenue dans $x à 4 en valeur.
    *On renvoie le résultat de la comparaison grâce à var_dump()*/

    var_dump ($x == 4);
    echo '<br>';

    var_dump ($x > 7);
    echo '<br>';

    /*on compare la valeur de $x à la chaîne de caractères "4" en 
    *valeur simplement */
    var_dump ($x == "4");
    echo '<br>';

    /*On compare la valeur de $x à la chaîne de caractères "4" en
    * termes de valeur et de type */
    var_dump ($x === "4");
    echo '<br>';


    var_dump ($x != "4");
    echo '<br>';

    var_dump ($x !== "4");
    echo '<br>';


    $y = 2;

    if ($x > 1) {

        echo '$x contient une valeur supérieure à 1 <br>';

    }
    elseif ($x == 1) {

        echo '$x contient la valeur 1<br>';
    }

    else {

        echo '$x contient une valeur inférieure à 1 <br>';

    }



    if ($x == $y){

        echo '<br>$x et $y contiennent la même valeur<br>';
    }
    else {

        echo '<br>$x et $y ne contiennent pas la même valeur<br>';
    }





    if (($x <= 1) == false) {
        echo '$x contient une valeur supérieure à 1';

    }

    if (($x != $y) == false ) {
        echo '$x et $y contiennent la même valeur';

    }



 
?>
<br>
<hr>
<br>

<?php
    $inscrit = true;
    $age = 21;


    if ($inscrit)
    { 
        if ($age >= 18){
            echo 'Utilisateur inscrit et majeur. Accès autorisé !';
        }
        else {
            echo 'Utilisateur incrit et mineur. Accès interdit ou restreint.';
        }

    }
    else {
        echo 'Utilisateur non incrit !!! Accès refusé !!!';
    }

 echo '<br><hr><br>';

    $x = 4;
    $y = -12;

    if ($x >= 0 AND $x <=5){
        echo '$x contient une valeur entre 0 et 5<br>';
    }

    if ($x >= 0 AND $y >= 0) {
        echo '$x et $y contiennent une valeur positive<br>';
    }

    if ($x >= 0 OR $y >= 0) {
        echo '$x ou $y (ou les deux) contient une valeur positive<br>';
    }

    if ($x >= 0 XOR $y >= 0) {
        echo '$x ou $y contient une valeur positive mais pas les deux<br>';
    }

    if (!$x >= 0 AND !$y >= 0) {
        echo 'Ce texte sera toujours affiché !<br>';
    }



    echo '<br><hr><br>';

    if ($x >= 0) {
        echo '$x est un nombre positif.<br>';
    }else {
        echo '$x est un nombre négatif.<br>';

    }
 // est équivalent à cela :
    echo $x >= 0 ? '$x est un nombre positif' : '$x est un nombre négatif';

    echo '<br><hr><br>';

    $x = 4;
    $y = NULL;
    $z;

    $resultatx = $x ?? 'NULL';
    $resultaty = $y ?? 'NULL';
    $resultatz = $z ?? 'NULL';

    echo   '$x contient ' .$resultatx. '<br>
            $y contient ' .$resultaty. '<br>
            $z contient ' .$resultatz;





?>

<br><hr><br>

<?php
    $x = 2;

    switch ($x){
        case 0:
            echo '$x stocke la valeur de 0';
            break;
        
        case 1:
            echo '$x stocke la valeur de 1';
            break;

        case 2:
            echo '$x stocke la valeur de 2';
            break;
            
        case 3:
            echo '$x stocke la valeur de 3';
            break;

        case 4:
            echo '$x stocke la valeur de 4';
            break;
        
        default:
            echo '$x ne stocke pas de valeur entre 0 et 4';


    }


?>


   
  </body>
</html>