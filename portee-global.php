<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>La Portée des variables - Global</h1>
<?php
    $x=10; //portée globale
    
    function portee(){
        global $x;
        echo 'la valeur de $x globale est : ' .$x. '<br>';
        $x = $x + 5;
    }

    portee();
    echo '$x contient maintenant : ' .$x; 


?>
<p>Mon paragraphe</p>
  </body>
</html>