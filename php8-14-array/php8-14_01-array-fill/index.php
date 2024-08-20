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
    // Neste exemplo, a função array_fill() cria um array com 5 elementos,
    // todos preenchidos com o valor "João". Isso significa que o array
    // resultante terá o nome "João" em todas as posições, neste caso, 5 vezes.

    // Criando um array com 5 elementos, preenchidos com o valor "João"
    $fillArray = array_fill(0, 5, "João");

    // Imprimindo o array
    print_r($fillArray);
    ?>
</body>
</html>