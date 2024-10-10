<?php
	$diretorio = "recebidos/";
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
	for ($k = 0; $k < count($arquivo['name']); $k++) {
		$destino = $diretorio . "/" . $arquivo['name'][$k];
		if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
			echo "Arquivo(s) enviado(s) com sucesso!";
		} else {
			echo "Falha ao enviar o(s) arquivo(s)...";
		}
	}
?>