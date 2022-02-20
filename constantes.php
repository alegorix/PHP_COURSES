<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Constantes</h1>
<?php
    define('DIX', 10);

    echo 'La constante DIX stocke la valeur ' .DIX. '<br>';

    //Afficher numéro de la ligne où la constante est appelée (dans le code)
    echo 'Numéro de ligne : ' .__LINE__. '<br>';

    //Afficher le chemin du fichier et son nom
    echo 'Chemin complet du fichier : ' .__FILE__. '<br>';

    //Afficher le nom du dossier qui contient le fichier
    echo 'Dossier contenant le fichier :' .__DIR__. '<br>';

    //Afficher à nouveau le numéro de la ligne où la constante est appelée (dans le code)
    echo 'Numéro de ligne : ' .__LINE__. '<br>';


    //Renvoyer le nom de la fonction depuis laquelle la constante est appelée
    function test(){
        echo 'Constante appelée depuis la fonction ' .__FUNCTION__;

    }
    //Ne pas oublier d'exécuter la fonction pour qu'elle echo la valeur de la constante magique !

    test();




    
?>
<p>Mon paragraphe</p>
  </body>
</html>