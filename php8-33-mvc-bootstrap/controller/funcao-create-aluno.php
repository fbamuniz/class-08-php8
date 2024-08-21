<?php
  include("../model/connect.php");

  $arquivo = $_FILES["arquivo"];
  $destino = "../view/imgs/".$arquivo['name'];
  move_uploaded_file($arquivo['tmp_name'],$destino);

  mysqli_query($conexao,"INSERT INTO alunos (Aluno_Foto, Aluno_Nome, Aluno_Cidade, Aluno_Curso) VALUES ('".$arquivo['name']."','".$_POST["campo_nome"]."','".$_POST["campo_cidade"]."','".$_POST["campo_curso"]."')");

  header("location:../view/");
?>