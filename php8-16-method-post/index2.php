<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>

<body>    
    <h1>Envia para index2.php</h1>
    <form action="index2.php" method="post">
        <label>Nome</label>
        <input type="text" name="campo_nome">
        <label>Cidade</label>
        <input type="text" name="campo_cidade">
        <input type="submit">
    </form>

    <?php
    if(empty($_POST["campo_nome"]) or empty($_POST["campo_cidade"])){
    ?>

    <h3>Digite um nome e uma cidade...</h3>

    <?php
    } else {
        $nome = $_POST["campo_nome"];
        $cidade = $_POST["campo_cidade"];      
    ?>
    <hr>
    <h3>Resultado</h3>
    A pessoa se chama <b><?php echo $nome ?></b> e mora na cidade de <b><?php echo $cidade ?></b>.

    <?php } ?>
</body>

</html>