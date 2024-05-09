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
    // Neste exemplo, a função implode() junta os elementos de um array em uma string, separados por vírgulas. É semelhante ao join em JavaScript.

    // Criando um array com nomes de pessoas
    $nomes = array("João", "Maria", "Pedro", "Ana");

    // Juntando os elementos do array em uma string separada por vírgulas
    $nomesString = implode(", ", $nomes);

    // Imprimindo a string resultante
    echo $nomesString;
    ?>
</body>
</html>