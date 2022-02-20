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

    //$sous_suite = [1, 2, 4, 8, 16]
    $sous_suite = $suite[0];
    echo $sous_suite[0]. '<br>'.$sous_suite[2]. '<br>';

    //$sous_util = ['nom' => 'Amandine', 'mail' => 'amandine@outlook.fr']
    $sous_util = $utilisateurs[2];
    echo $sous_util['nom']. '<br>';

    //$sous_produits = ['poids' => 200, 'quantite' => 10, 'prix' => 15]
    $sous_produits = $produits['Livre'];
    echo $sous_produits['prix'];





?>

<p>Mon paragraphe</p>
  </body>
</html>