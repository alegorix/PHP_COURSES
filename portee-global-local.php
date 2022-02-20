<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>La Portée des variables - Global - Local</h1>
<?php

    function portee(){
        $y = 5;
        echo 'Valeur de $y (depuis la fonction) : ' .$y. '<br>';
    }

    function portee2(){
        $z = 5;
        return $z;
    }

    portee();
    echo 'Valeur de $y (depuis l espace global) : ' .$y. '<br>';

    $a = portee2();

    echo '$z contient la valeur : ' .$a;
?>
<p>Mon paragraphe</p>
  </body>
</html>