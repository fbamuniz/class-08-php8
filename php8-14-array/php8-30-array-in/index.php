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
    // Comentário: Definindo um array com alguns nomes de frutas
    $array_frutas = array("maçã", "banana", "laranja", "uva", "manga", "kiwi");

    // Comentário: Usando a função in_array para verificar se "banana" está no array
    // in_array verifica a presença de um valor no array e retorna true se o valor for encontrado
    $valor_procurado = "banana";
    $encontrado = in_array($valor_procurado, $array_frutas);

    // Comentário: Exibindo o resultado usando a função echo
    if ($encontrado) {
        echo "O valor '{$valor_procurado}' está presente no array.\n";
    } else {
        echo "O valor '{$valor_procurado}' não está presente no array.\n";
    }
    ?>


</body>

</html>