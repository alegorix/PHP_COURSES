<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Tableaux associatifs</h1>
<?php
    $ages = ['Mathilde' => 27, 'Pierre' => 29, 'Amandine' => 21];

    $mails['Mathilde'] = 'mathilde@gmail.com';
    $mails['Pierre'] = 'pierre@hotmail.com';
    $mails['Amandine'] = 'amandine@outlook.fr';

    //echo 'Pierre a ' .$ages['Pierre']. ' ans';

    foreach ($ages as $clef => $valeur){
        echo $clef. ' a ' .$valeur. ' ans<br>';

    }


?>

<p>Mon paragraphe</p>
  </body>
</html>