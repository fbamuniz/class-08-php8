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
        $semaforo = "Vermelho";
        switch ($semaforo) {
            case "Verde":
                echo "Siga!";
                break;
            case "Amarelo":
                echo "Atenção!";
                break;
            case "Vermelho":
                echo "Pare!";
                break;
            default:
                echo "Cor desconhecida...";
        }
    ?>
</body>
</html>