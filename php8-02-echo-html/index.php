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
    // O echo é uma declaração, já print() é uma função que retorna 1
    $nome = "Fred";
    $cidade = "Registro";
    echo "<table border='1' width='200px'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$nome</td>
                <td>$cidade</td>
            </tr>
        </tbody>
    </table>";
    ?>
</body>
</html>