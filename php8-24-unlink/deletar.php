<?php

$arquivo = $_GET["id"];
$path = "recebidos/";
unlink($path.$arquivo);
header("location:index.php");

?>