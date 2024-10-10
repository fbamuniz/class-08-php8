<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
    <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
        <input type="file" name="arquivo[]" multiple="multiple" />
        <input name="enviar" type="submit" value="Enviar">
    </form>
</body>
</html>