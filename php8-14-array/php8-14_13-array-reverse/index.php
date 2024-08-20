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
    // Comentário: Definindo um array com alguns valores
    $array = array("maçã", "banana", "laranja", "uva", "manga", "kiwi");

    // Comentário: Usando a função array_reverse para inverter a ordem dos elementos
    // array_reverse é semelhante ao método reverse do JavaScript
    // Aqui, invertemos a ordem do array
    $array_reverso = array_reverse($array);

    // Comentário: Exibindo o resultado usando a função print_r
    print_r($array_reverso);
    ?>
</body>

</html>