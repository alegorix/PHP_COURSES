<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Tableaux multidimensionnels</h1>
<?php

    //Tableau multidim numéroté stockant des tableaux numérotés

    $suite = [
        [1, 2, 4, 8, 16],
        [1, 3, 9, 27, 81]
    ];

    //Tableau multidim numéroté qui va stocker des tableaux associatifs et une valeur simple
    
    $utilisateurs = [
        ['nom' => 'Mathilde', 'mail' => 'mathilde@gmail.com'],
        ['nom' => 'Pierre', 'mail' => 'pierre@hotmail.com'],
        ['nom' => 'Amandine', 'mail' => 'amandine@outlook.fr'],
        'Paul'
    ];

    //Tableau multidim associatif stockant des tableaux associatifs

    $produits = [
        'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
        'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
    ];

    
    echo $suite[0][0]. '<br>'.$suite[0][2]. '<br>';
    echo $utilisateurs[2]['nom']. '<br>';
    echo $utilisateurs[3]. '<br>';
    echo $produits ['Livre']['prix'];


?>

<p>Mon paragraphe</p>
  </body>
</html>