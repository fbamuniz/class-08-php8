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
     * Neste exemplo, a função array_push() é utilizada para adicionar um elemento ao final de um array.
     */

    // Criando um array com nomes de cores
    $cores = array("Vermelho", "Verde", "Azul");

    // Adicionando um novo elemento ao final do array
    array_push($cores, "Amarelo");

    // Imprimindo o array atualizado
    print_r($cores);
    ?>
</body>
</html>