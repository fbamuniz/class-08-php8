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
$produto_cod = 25;
$produto_nome = "Bolacha Doce Redonda";
?>

<a href="destino.php?id_produto_cod=<?php echo $produto_cod ?>&id_produto_nome=<?php echo $produto_nome ?>">Exibir</a>

</body>    
</html>