<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_POST["campo_nome"];
    $cidade = $_POST["campo_cidade"];
    ?>
    <h3>Resultado</h3>
    A pessoa se chama <b><?php echo $nome ?></b> e mora na cidade de <b><?php echo $cidade ?></b>.
</body>
</html>