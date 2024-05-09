<?php
// Verificar se os campos de e-mail e senha foram enviados
if ( isset( $_POST[ 'email' ] ) && isset( $_POST[ 'senha' ] ) ) {
    // Verificar se o e-mail e a senha correspondem aos dados cadastrados ( simulação )
    $email = $_POST[ 'email' ];
    $senha = $_POST[ 'senha' ];

    // Verificar se o e-mail e a senha correspondem aos dados cadastrados ( simulação )
    if ( $email === 'usuario@example.com' && $senha === 'senha123' ) {
        // Redirecionar para a página inicial
        header( 'Location: file:///C:/Users/Moises%20Freitas/OneDrive/%C3%81rea%20de%20Trabalho/Desafio/index.html' );
        exit();
    } else {
        // Se as credenciais estiverem incorretas, redirecionar de volta para a página de login com uma mensagem de erro
        header( 'Location: file:///C:/Users/Moises%20Freitas/OneDrive/%C3%81rea%20de%20Trabalho/Desafio/login.html' );
        exit();
    }
} else {
    // Se os campos não foram enviados, redirecionar de volta para a página de login com uma mensagem de erro
    header( 'Location: login.html?erro=2' );
    exit();
}
?>
