<?php
include("../model/connect.php");
$query = mysqli_query($conexao, "SELECT * FROM alunos_login WHERE Login_Email = '".trim($_POST["campo_email"])."' AND Login_Senha='".md5($_POST["campo_senha"])."'");
if(mysqli_num_rows($query)==1){
    header("location:../view");
} else {
    header("location:../view/login.php");
}
?>