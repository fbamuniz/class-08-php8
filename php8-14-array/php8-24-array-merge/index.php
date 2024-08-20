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
    // Comentário: Definindo o primeiro array com alguns valores
    $array1 = array("maçã", "banana", "laranja");

    // Comentário: Definindo o segundo array com alguns valores diferentes
    $array2 = array("uva", "manga", "kiwi");

    // Comentário: Concatenando os dois arrays usando a função array_merge,
    // que é semelhante ao método concat do JavaScript
    $array_concatenado = array_merge($array1, $array2);

    // Comentário: Exibindo o resultado usando a função print_r
    echo "Arrays concatenados:\n";
    print_r($array_concatenado);
    ?>
</body>

</html>