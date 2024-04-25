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
    $texto = "";
    if(strlen($texto) < 1){
        echo "O campo texto não pode ser vazio!";
    } else {
        echo "Você digitou: $texto";
    }       
    ?>
    <hr>
</body>
</html>