<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>La Portée des variables - Static</h1>
<?php

    function compteur(){
        static $x = 0;
        //$x = 0;
        echo '$x contient la valeur : ' .$x. '<br>';
        $x++;
    }
    compteur();
    compteur();
    compteur();
    compteur();
    compteur(); 
?>
<p>Mon paragraphe</p>
  </body>
</html>