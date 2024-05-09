<?php
// Verificar se os campos de e-mail e senha foram enviados
if ( isset( $_POST[ 'email' ] ) && isset( $_POST[ 'senha' ] ) ) {
    // Simular autenticação de usuário ( substitua por lógica real )
    $usuario_valido = false;

    // Verificar se o usuário e a senha são válidos ( exemplo simples )
    if ( $_POST[ 'email' ] === 'usuario@example.com' && $_POST[ 'senha' ] === 'senha123' ) {
        // Usuário válido
        $usuario_valido = true;
    }

    // Se o usuário for válido, redirecionar para a página desejada
    if ( $usuario_valido ) {
        header( 'Location: file:///C:/Users/Moises%20Freitas/OneDrive/%C3%81rea%20de%20Trabalho/Desafio/index.html' );
        exit();
    } else {
        // Se o login falhar, redirecionar de volta para a página de login com uma mensagem de erro
        header( 'Location: file:///C:/Users/Moises%20Freitas/OneDrive/%C3%81rea%20de%20Trabalho/Desafio/login.html' );
        exit();
    }
} else {
    // Se os campos não foram enviados, redirecionar de volta para a página de login com uma mensagem de erro
    header( 'Location: login.html?erro=2' );
    exit();
}
?>
