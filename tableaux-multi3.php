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
        ['nom' => 'Amandine', 'mail' => 'amandine@outlook.fr']
        
    ];

    //Tableau multidim associatif stockant des tableaux associatifs

    $produits = [
        'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
        'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
    ];

    foreach ($suite as $suitenb => $n){
        echo 'Suite ' .($suitenb + 1). ' : ';

        foreach ($n as $ni => $nn){
            echo $nn. ', ';
        }
        echo '<br><br>';

    }
    foreach($utilisateurs as $nb => $infos){
        echo 'Utilisateur n°' .($nb + 1). '<br>';
        foreach ($infos as $c => $v){
            echo $c. ' : ' .$v. '<br>';
        }
        echo '<br>';
    }
    foreach($produits as $clef => $produit) {
        echo 'Produit : ' .$clef. '<br>';
        foreach($produit as $caracteristique => $valeur){
            echo $caracteristique. ' : ' .$valeur. '<br>';
        }
        echo '<br>';

    }

    //afficher rapidement la structure d'un tableau en PHP

    echo '<pre>';
    print_r($produits);
    var_dump($produits);

    echo '</pre>';



    
  
?>

<p>Mon paragraphe</p>
  </body>
</html>