<?php
// Define o nome e valor do cookie
$cookie_name = "user";
$cookie_value = "CPS";

// Define o tempo de expiração do cookie para 1 hora a partir de agora
$cookie_expiration = time() + 3600; // 3600 segundos = 1 hora

// Define o caminho onde o cookie está disponível
$cookie_path = "/"; // O cookie estará disponível em todo o site

// Cria o cookie
setcookie($cookie_name, $cookie_value, $cookie_expiration, $cookie_path);

// Verifica se o cookie foi definido
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie '$cookie_name' já está definido com o valor: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '$cookie_name' foi definido com sucesso. Recarregue a página para ver o valor.";
}
?>
