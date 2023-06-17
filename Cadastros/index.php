<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['NivelDeAcesso'])) {
    // Verifica o nível de acesso do usuário
    if ($_SESSION['NivelDeAcesso'] == 'Admin') {
        // Código para administradores
        echo "Bem-vindo, administrador!";
    } elseif ($_SESSION['NivelDeAcesso'] == 'DivFlor') {
        // Código para moderadores
        echo "Bem-vindo! Acesso";
    } else {
        // Código para usuários comuns
        echo "Sem nível de acesso!";
    }
} else {
    echo "Sem nível de acesso!";
    // Redireciona o usuário para a página de login
    header('Location: index.php');
    exit();
}
?>
