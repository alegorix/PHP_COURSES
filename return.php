<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Return</h1>
<?php
    
function multecho(float $a, float $b){
    echo $a. ' * ' .$b. ' = ' .$a * $b. '<br>';
}    
   
function multreturn(float $a, float $b){
    return $a * $b;
}  
multecho(2,3);

$resultat = multreturn(4,5);

echo $resultat+= 2;



?>
<p>Mon paragraphe</p>
  </body>
</html>