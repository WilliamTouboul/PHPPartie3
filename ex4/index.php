<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Créer une variable et l'initialiser à 1.  
    // Tant que cette variable n'atteint pas 10, il faut :
    // - l'afficher
    // - l'incrementer de la moitié de sa valeur

    $a = 1;
    while ($a < 10) {
        echo $a, ' ';
        $a += $a / 2;
    }

    ?>
</body>

</html>