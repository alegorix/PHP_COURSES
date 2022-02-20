<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Timestamp</h1>
<?php
    echo 'Timestamp actuel : ' .time(). '<br>';
    //echo 'Timestamp actuel (avec mktime()) : '.mktime(). '<br>';

    $stt = strtotime('2021-12-20');
    echo 'Timestamp 20 décembre 2021 à minuit (GMT+1) : '.$stt. '<br>';

    echo '<pre>';
    print_r(getdate());
    echo '</pre>';

    echo '<pre>';
    print_r(getdate($stt));
    echo '</pre><br><hr><br>';

    echo date ('d/m/Y'). '<br>';
    echo date ('c'). '<br>';


?>

<p>Mon paragraphe</p>
  </body>
</html>