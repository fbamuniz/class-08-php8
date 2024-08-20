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
    // Comentário: Definindo um array com alguns valores numéricos
    $array = array(10, 20, 30, 40, 50, 60);

    // Comentário: Usando a função max para encontrar o maior valor no array
    // max é semelhante ao método Math.max do JavaScript
    // Aqui, encontramos o maior valor no array
    $valor_maximo = max($array);

    // Comentário: Exibindo o resultado usando a função echo
    echo "O maior valor no array é: " . $valor_maximo . "\n";
    ?>

</body>

</html>