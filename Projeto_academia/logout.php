<?php
require_once 'config.php';

// Limpa todas as variáveis de sessão
$_SESSION = array();

// Destrói os cookies da sessão caso existam
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destrói a sessão
session_destroy();

// Redireciona para a home
header('Location: index.php');
exit;