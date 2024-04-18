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
    // Utilizando if isolado
    $cidade = "Registro";
    
    if ($cidade == "Registro") {
        echo "Sua cidade é Registro!";
    }
    ?>
    <hr>
    <?php
    // Utilizando else e if
    $cidade = "Sete Barras";

    if ($cidade == "Registro") {
        echo "Sua cidade é Registro!";
    } else {
        echo "Você digitou outra cidade...";
    }
    ?>
    <hr>
    <?php
    // Utilizando if, else if e else
    $cidade = "Sete Barras";

    if ($cidade == "Registro") {
        echo "Sua cidade é Registro!";
    } else if ($cidade == "Sete Barras") {
        echo "Sua cidade é Sete Barras!";
    } else {
        echo "Você digitou outra cidade...";
    }
    ?>
    <hr>
    <?php
    // Utilizando Estrutura Condicional aninhada
    $uf = "Paraná";
    $cidade = "Registro";

    if ($uf == "São Paulo") {
        echo "Você selecionou a UF São Paulo ";
        if ($cidade == "Registro") {
            echo "e a cidade de Registro.";
        } else if ($cidade == "Sete Barras") {
            echo "e a cidade de Sete Barras.";
        } else {
            echo " e uma cidade inválida...";
        }
    } else if ($uf == "Paraná") {
        echo "Você selecionou a UF Paraná ";
        if ($cidade == "Curitiba") {
            echo "e a cidade de Curitiba.";
        } else if ($cidade == "Quatro Barras") {
            echo "e a cidade de Quatro Barras.";
        } else {
            echo " e uma cidade inválida...";
        }
    } else {
        echo "Digite uma UF válida...";
    }

    ?>
</body>
</html>