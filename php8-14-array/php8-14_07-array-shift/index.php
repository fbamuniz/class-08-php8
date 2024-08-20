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
    Neste exemplo, a função array_shift() é utilizada para remover e retornar o primeiro elemento de um array. Os índices dos elementos também são reorganizados e Terça passa da posição 1 para 0.
     */

    // Criando um array com nomes de dias da semana
    $diasSemana = array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");

    // Removendo e armazenando o primeiro elemento do array
    $primeiroDia = array_shift($diasSemana);

    // Imprimindo o primeiro dia removido e o array resultante
    echo "O primeiro dia removido foi: $primeiroDia\n";
    echo "O array de dias da semana restante é:\n";
    print_r($diasSemana);
    ?>
</body>
</html>