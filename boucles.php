<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <?php

    $x = 2; $y = 2; $a = 2; $b = 2;

    echo 'Post incrémentation pour $x : ' .$x++. '<br>';
    echo '$x contient maintenant : ' .$x. '<br>';


    echo 'Pré incrémentation pour $y : ' .++$y. '<br>';
    echo '$y contient maintenant : ' .$y. '<br>';


    echo 'Post décrémentation pour $a : ' .$a--. '<br>';
    echo '$a contient maintenant : ' .$a. '<br>';

    echo 'Pré décrémentation pour $b : ' .--$b. '<br>';
    echo '$b contient maintenant : ' .$b. '<br>';

?>

<br><hr><br>

<?php

$x = 0;

while($x <=10) {
    echo '$x contient la valeur ' .$x. '<br>';
    $x++;
}





?>
<br><hr><br>

<?php

    $x = 0;
    $y= 20;

    do {
        echo '$x contient la valeur ' . $x . '<br>';
        $x++;


    }while ($x <= 5);

    do {
        echo '$y contient la valeur ' . $y . '<br>';
        $y++;


    }while ($y <= 5);




?>

<br><hr><br>


<?php
    for ($x = 0; $x <=5; $x++){
        echo '$x contient la valeur ' .$x. '<br>';
    }



?>
   
  </body>
</html>