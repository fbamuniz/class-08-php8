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
    /*
     Neste exemplo, a função array_pop() é utilizada para remover o último elemento de um array.
     */

    // Criando um array com nomes de frutas
    $frutas = array("Maçã", "Banana", "Morango", "Uva");

    // Removendo o último elemento do array
    $ultimaFruta = array_pop($frutas);

    // Imprimindo a fruta removida e o array resultante
    echo "A última fruta removida foi: $ultimaFruta\n";
    echo "O array de frutas restante é:\n";
    print_r($frutas);
    ?>
</body>
</html>