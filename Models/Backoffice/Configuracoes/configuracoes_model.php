<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$mensagem = (empty($rotas[2]))? NULL : $rotas[2];

// Carregamento dos "fragmentos" que constroem a página:
require_once 'Templates/Backoffice/header_nav.php';
require_once 'Views/Backoffice/Configuracoes/configuracoes_view.php';

// Variaveis após o carregamento da página.
$form = isset($_POST["senha_antiga"]) && isset($_POST["senha_nova"]) && isset($_POST["confirmar_senha"]);

// Havendo dados introduzidos no formulário:
if($form){

    $id = $user["id"];
    $senha_guardada = $user["senha"];
    $senha_antiga = $_POST["senha_antiga"];
    $senha_nova = $_POST["senha_nova"];
    $confirmar_senha = $_POST["confirmar_senha"];

    alterarSenha($senha_guardada, $senha_antiga, $senha_nova, $confirmar_senha);
}    

?>