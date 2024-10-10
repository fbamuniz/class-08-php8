<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos</title>
</head>
<body>
    
<?php
    $path = "recebidos/";
    $diretorio = dir($path);
?>
<table border='1'>
<tr>
    <td>Nome</td>
    <td>Ação</td>
</tr>
    <?php while($arquivo = $diretorio->read()) { 
         if ($arquivo != '.' && $arquivo != '..') { ?>
        <tr>
            <td><a href="<?php echo $path.$arquivo ?>"><?php echo $arquivo ?></a></td>
            <td> <a href="deletar.php?id=<?php echo $arquivo ?>">Excluir</a></td>
        </tr>
    <?php }} ?>
</table>
<?php $diretorio->close(); ?>

</body>
</html>