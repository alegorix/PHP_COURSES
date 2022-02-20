<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Variables Tableaux</h1>
<?php
   $prenoms = array ('Jean','Paul','Pierre','Mathilde');
   $ages = [27, 29, 21, 29];
    
?>


<?php
    $prenoms[0] = 'Jean';
    $prenoms[1] = 'Paul';
    $prenoms[2] = 'Pierre';
    $prenoms[3] = 'Mathilde';

    $ages[0] = 27;
    $ages[1] = 29;
    $ages[2] = 21;
    $ages[3] = 29;


?>


<?php
   $prenoms2 = array ('Jean','Paul','Pierre','Mathilde');
    
   echo $prenoms2[0]. '<br>';
   echo $prenoms2[3]. '<br><hr><br>';
?>


<?php
   $prenoms3 = array ('Jean','Paul','Pierre','Mathilde');
    
  echo 'Le tableau $prenoms3 contient ' .count($prenoms3). ' valeurs <br><hr><br>';
?>

<?php
    $prenoms4 = array ('Jean','Paul','Pierre','Mathilde');

    //On récupère la taille du tableau et on la stocke dans une variable $taille

    $taille = count($prenoms4);

    //On peut soit parcourir le tableau et afficher les valeurs une à une

    for($i = 0; $i < $taille; $i++ ) {
        echo $prenoms4[$i]. ', ';
    }

    echo '<br><br>';

    //...soit les stocker dans une autre variable et faire un echo de cette variable


    for($i = 0; $i < $taille; $i++) {
        $p .= $prenoms4[$i]. ', ';

    }
    echo $p;
    
?>

<br><hr><br>
<?php

    $prenoms5 = array ('Jean','Paul','Pierre','Mathilde');

    // on Rajoute une valeur à $prenoms5 et on associe la clef 8

    $prenoms5[8] = 'Lisa';

    $taille2 = count($prenoms5);
    /*On tente d'afficher les valeurs de notre tableau en utilisant le
    *résultat de count() et en bouclant sur les indices */
    for($i2 = 0; $i2 < $taille2; $i2++){
        $p .= $prenoms5[$i2]. ', ';
    }
    echo $p. '<br><br>';

    //On utilise une boucle foreach ($tableau as $valeurs)
    foreach ($prenoms5 as $valeurs) {
        $resultat .= $valeurs. ', ';
    }
    echo $resultat;


?>

<p>Mon paragraphe</p>
  </body>
</html>