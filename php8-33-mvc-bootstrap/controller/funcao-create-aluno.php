<?php
  include("../model/connect.php");

  $arquivo = $_FILES["arquivo"];
  $file_name = $_FILES['arquivo']['name'];
  $extensao = pathinfo($file_name, PATHINFO_EXTENSION);
  $nomeCompleto = md5(uniqid(pow(date("s"),date("m")))) . "." . $extensao;

  $destino = "../view/imgs/".$nomeCompleto;
  move_uploaded_file($arquivo['tmp_name'],$destino);

  mysqli_query($conexao,"INSERT INTO alunos (Aluno_Foto, Aluno_Nome, Aluno_Cidade, Aluno_Curso) VALUES ('".$nomeCompleto."','".$_POST["campo_nome"]."','".$_POST["campo_cidade"]."','".$_POST["campo_curso"]."')");

  header("location:../view/");
?>