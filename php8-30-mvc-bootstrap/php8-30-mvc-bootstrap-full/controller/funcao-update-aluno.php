<?php
  include("../model/connect.php");
  mysqli_query($conexao,"UPDATE alunos SET Aluno_Nome='".$_POST['campo_nome']."' WHERE Aluno_Codigo =".$_POST['campo_codigo']);
  header("location:../view/v_edit.php?ida=".$_POST['campo_codigo']);
?>