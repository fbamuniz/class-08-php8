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

    // Gera o hash MD5 da string
    $md5Hash = md5($originalString);

    // Exibe o hash MD5
    echo "Hash MD5: " . $md5Hash . "\n";
    // Exemplo de saída esperada: b16a11a7cfb94d6b45280d3cc73a9a8f

    // Se você precisar verificar o hash contra a string original, você pode fazer o seguinte:
    $checkString = "Centro Paula Souza";
    $checkHash = md5($checkString);

    // Verifica se o hash gerado corresponde ao hash da string original
    if ($md5Hash === $checkHash) {
        echo "A verificação do hash foi bem-sucedida.\n";
    } else {
        echo "A verificação do hash falhou.\n";
    }
    ?>
    f
</body>

</html>