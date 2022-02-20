<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Variables SuperGlobales</h1>
<?php
    $prenom = "John";
    $nom = "Rambo";
    $age = 48;

    //Utilisation du mot clef global
    function prez(){
        $mail = 'john.rambo@skynet.be';
        global $prenom, $nom, $age;
        echo 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai' .$age. ' ans.<br>
        
        Mon adresse mail est : ' .$mail;
    }
    //Utilisation de la superglobale $GLOBALS
    function prez2(){
        $mail = 'john.rambo@skynet.be';
        echo 'Je suis ' .$GLOBALS['prenom']. ' ' .$GLOBALS['nom']. ', j\'ai '
        .$GLOBALS['age']. ' ans.<br>Mon adresse email est : '.$mail;
    }

    prez();
    echo '<br><br>';
    prez2();
    echo '<br><br>';
    echo '<pre>';
    print_r($GLOBALS);
    echo '</pre>';


//$_SERVER
//Renvoie le nom du fichier contenant le script
echo $_SERVER['PHP_SELF']. '<br>';
//Renvoie le nom du serveur qui héberge le fichier
echo $_SERVER['SERVER_NAME']. '<br>';

//Renvoie l'adresse IP du serveur qui héberge le fichier
echo $_SERVER['SERVER_ADDR']. '<br>';

//Renvoie l'IP du visiteur demandant la page
echo $_SERVER['REMOTE_ADDR']. '<br>';

//Renvoie une valeur non vide si le script a été appelé via le protocole HTTPS
echo $_SERVER['HTTPS']. '<br>';

//Retourne le temps Unix du début de la requête 
echo $_SERVER['REQUEST_TIME']. '<br>';


//$_ENV

echo $_ENV['USER'];



?>

<p>Mon paragraphe</p>
  </body>
</html>