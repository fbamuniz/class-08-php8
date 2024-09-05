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
     Neste exemplo, a função array_splice() é utilizada para remover um elemento de um array a partir de uma posição específica.
     */

    // Criando um array com nomes de cidades
    $cidades = array("São Paulo", "Rio de Janeiro", "Belo Horizonte", "Salvador");

    // Removendo o elemento "Belo Horizonte" do array. Se fosse pra remover São Paulo e Rio de Janeiro, logo seria: array_splice($cidades, 0, 1);
    array_splice($cidades, 2, 1);

    // Imprimindo o array atualizado
    print_r($cidades);
    ?>
</body>
</html>