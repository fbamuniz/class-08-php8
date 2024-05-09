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
     Neste exemplo, a função array_map() é utilizada para aplicar uma função a cada elemento de um array. Aqui, estamos usando array_map() para adicionar um sobrenome a cada nome no array.
     */

    // Função para adicionar um sobrenome a um nome
    function adicionarSobrenome($nome) {
        return $nome . " Silva";
    }

    // Criando um array com nomes de pessoas
    $nomes = array("João", "Maria", "Pedro", "Ana");

    // Aplicando a função adicionarSobrenome() a cada elemento do array
    $nomesComSobrenome = array_map("adicionarSobrenome", $nomes);

    // Imprimindo o array resultante
    print_r($nomesComSobrenome);
    ?>
</body>
</html>