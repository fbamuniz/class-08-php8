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
    /**
     * Neste exemplo, o comprimento do array é obtido usando a função count().
     * Isso retorna o número de elementos no array. É semelhante ao length em JavaScript.
     */

    // Criando um array com nomes de pessoas
    $nomes = array("João", "Maria", "Pedro", "Ana");

    // Obtendo o comprimento do array
    $comprimentoArray = count($nomes);

    // Imprimindo o comprimento do array
    echo "O comprimento do array é: $comprimentoArray";
    ?>
</body>
</html>