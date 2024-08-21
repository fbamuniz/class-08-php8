<?php
include("../model/connect.php");
mysqli_query($conexao, "DELETE FROM alunos WHERE Aluno_Codigo = ".$_GET["ida"]);
unlink("../view/imgs/".$_GET["idf"]);
header("location:../view/");
?>