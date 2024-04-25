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
    //Estrutura de repetição while aninhada (n)
    $x = 0;
    while ($x < 5) {
        echo $x . "<br>";
        $x++;
    }
    ?>
    <hr>
    <?php
    //Estrutura de repetição while aninhada (n²)
    $x = 0;
    while ($x < 5) {
        echo $x . "<br>";
        $x++;
        $y = 0;
        while ($y < 5) {
            echo $y . "<br>";
            $y++;
        }
    }
    ?>
    <hr>
    <?php
    //Estrutura de repetição while aninhada (n³)
    $x = 0;
    while ($x < 5) {
        echo $x . "<br>";
        $x++;
        $y = 0;
        while ($y < 5) {
            echo $y . "<br>";
            $y++;
            $n = 0;
            while ($n < 5) {
                echo $n . "<br>";
                $n++;
            }
        }
    }
    ?>

</body>

</html>