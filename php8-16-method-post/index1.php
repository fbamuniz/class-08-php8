<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>

<body>
    <h1>Envia para destino.php</h1>
    <form action="destino.php" method="post">
        <label>Nome</label>
        <input type="text" name="campo_nome">
        <label>Cidade</label>
        <input type="text" name="campo_cidade">
        <input type="submit">
    </form>
    <hr>
</html>