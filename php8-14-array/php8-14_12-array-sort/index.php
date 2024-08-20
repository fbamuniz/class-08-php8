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
    // Comentário: Definindo um array com alguns valores
    $array = array("maçã", "banana", "laranja", "uva", "manga", "kiwi");

    // Comentário: Usando a função sort para ordenar o array
    // sort é semelhante ao método sort do JavaScript
    // Aqui, ordenamos o array em ordem alfabética
    sort($array);

    // Comentário: Exibindo o resultado usando a função print_r
    echo "Array ordenado:\n";
    print_r($array);
    ?>
</body>

</html>