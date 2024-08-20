<?php
include("../model/connect.php");
mysqli_query($conexao, "DELETE FROM alunos WHERE Aluno_Codigo = ".$_GET["ida"]);
header("location:../view/");
?>