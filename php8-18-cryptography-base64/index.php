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
    // Palavra original
    $originalString = "Centro Paula Souza";

    // Codifica a string em Base64
    $encodedString = base64_encode($originalString);

    // Exibe a string codificada
    echo "String codificada em Base64: " . $encodedString . "\n";
    // Exemplo de saída esperada: U2VudHJvIFBhdWxhIFNvdXph

    // Decodifica a string de Base64
    $decodedString = base64_decode($encodedString);

    // Exibe a string decodificada
    echo "String decodificada: " . $decodedString . "\n";
    // Exemplo de saída esperada: Centro Paula Souza
    ?>

</body>

</html>