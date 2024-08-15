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

    // Comentário: Usando a função array_slice para extrair uma parte do array
    // array_slice é semelhante ao método slice do JavaScript
    // Aqui, extraímos elementos do índice 1 ao 3 (exclusivo) do array original
    $sub_array = array_slice($array, 1, 3);

    // Comentário: Exibindo o resultado usando a função print_r
    echo "Parte do array extraída:\n";
    print_r($sub_array);
    ?>
</body>

</html>