<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- En allant de 0 à 100 avec un pas de 1, afficher tous ceux qui ne sont pas multiple de 3.

 -->

    <?php
    $i = 0;

    for ($i = 0; $i <= 100; $i++) {
        if (($i % 3) == 0) {
            echo $i, ' est divisible par 3', '<br>';
        }
    }

    ?>

</body>

</html>