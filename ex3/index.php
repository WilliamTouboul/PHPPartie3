<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
    // Tant que la première variable n'est pas inférieure ou égale à 10 :
    // - multiplier la première variable avec la deuxième
    // - afficher le résultat
    // - décrémenter la première variable
    $a = 100;
    $b = 7;
    while ($a > 10) {
        $c = $a * $b;
        echo $c, '<br>';
        $a--;
    }
    ?>

</body>

</html>