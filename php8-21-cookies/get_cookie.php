<?php
// Verifica se o cookie está definido
if (isset($_COOKIE['user'])) {
    echo "O valor do cookie 'user' é: " . $_COOKIE['user'];
} else {
    echo "O cookie 'user' não está definido.";
}
?>