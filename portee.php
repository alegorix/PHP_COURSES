<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>La Portée des variables</h1>
<?php
    $x = 10; //déclaration globale

    function portee1(){
        //espace local
        echo 'La valeur de $x globale est : ' .$x. '<br>';
    }

    function portee2(){
        $x = 5; //déclaration locale
        // Les variables $x déclarées localement et globalement ne sont pas les mêmes pour PHP
        echo 'La valeur de $x locale est : ' .$x. '<br>';
    }

    function portee3(){
        $y = 0;
        $y++;
        echo '$y contient la valeur : ' .$y. '<br>';
    }

    function portee4(){
        $z = 1;
    }

    portee1();
    portee2();
    portee3();
    portee3();
    portee4();
    echo 'La variable locale $z contient : ' .$z;

?>
<p>Mon paragraphe</p>
  </body>
</html>