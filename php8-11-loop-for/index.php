<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>

<body>
    <?php
    // Estrutura de repetição for simples (n)
    for ($x = 0; $x < 5; $x++) {
        echo $x . "<br>";
    }
    ?>
    <hr>
    <?php
    //Estrutura de repetição for aninhada (n²)
    for ($x = 0; $x < 5; $x++) {
        echo $x . "<br>";
        for ($y = 0; $y < 5; $y++) {
            echo $y . "<br>";
        }
    }
    ?>
    <hr>
    <?php
    //Estrutura de repetição for aninhada (n³)
    for ($x = 0; $x < 5; $x++) {
        echo $x . "<br>";
        for ($y = 0; $y < 5; $y++) {
            echo $y . "<br>";
            for ($n = 0; $n < 5; $n++) {
                echo $n . "<br>";
            }
        }
    }
    ?>

</body>

</html>