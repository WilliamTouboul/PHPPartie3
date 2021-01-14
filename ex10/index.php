<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P3E10</title>
</head>

<body>

    <?php
    $randomNumber = rand(0, 30);

    for ($i = 1; $i <= 100; $i++) {
        if ($i != $randomNumber) {
            echo $i,' ';
        } else {
            echo '/',' ';
        }
    }

    ?>

    <!-- 
    Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.
En allant de 1 à 100 avec un pas de 1, afficher tous les nombres sauf celui correspondant au nombre aléatoire.

-->
</body>

</html>