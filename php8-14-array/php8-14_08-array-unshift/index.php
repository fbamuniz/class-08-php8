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
 * Neste exemplo, a função array_unshift() é utilizada para adicionar um elemento ou mais no início de um array. É semelhante ao unpush em JavaScript.
 */

// Criando um array com nomes de frutas
$frutas = array("Banana", "Morango", "Uva");

// Adicionando um novo elemento no início do array
array_unshift($frutas, "Maçã");

// Imprimindo o array atualizado
print_r($frutas);
?>

</body>
</html>