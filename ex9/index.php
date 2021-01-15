
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Créer une variable nombre aléatoire et l'initialiser avec un nombre aléatoire compris entre 0 et 30.
// En allant de 1 à 100 avec un pas de 1, afficher les nombres jusqu'au nombre aléatoire, puis sortir de la boucle.


$randomNumber = rand (0,30);

for ($i = 0; $i <= 100; $i++) { 
    if ($i == $randomNumber) {
        echo $randomNumber,'=',$i,' GG';
        break;
    } else {
        echo $i, ' ';
    }
}

?>
    
</body>
</html>