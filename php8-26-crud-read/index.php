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
    $connect = mysqli_connect("127.0.0.1","root","");
               mysqli_select_db($connect, "escola2");
               mysqli_set_charset($connect,"UTF8");

    $query = mysqli_query($connect,"SELECT * FROM aluno");
    while($result = mysqli_fetch_array($query)){
        echo $result[1]."<hr>";
    }
    ?>
</body>
</html>