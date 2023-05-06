<?php

// Verificar se há sessão aberta:
comSession();

// Rotas possiveis na página:
$mensagem = (empty($rotas[2])) ? false : $rotas[2];

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header.php';
require 'Views/Backoffice/login_view.php';

// Variaveis da página:
$form = isset($_POST["login"]) && isset($_POST["pass"]);

// Em caso de haver formulário:
if($form){

    // Variaveis para login com formulário:
    $login = $_POST["login"];
    $pass = $_POST["pass"];

    // Fazer login:
    $logado = logincodificado($login, $pass);

    // Rota em caso de login OK.
    if(!empty($logado)){
        header("Location: " . $url_backoffice . "inicio");
        exit();
    }

    // Rota em caso de login NOK.
    else{
        header("Location: " . $url_backoffice . "login/false");
        exit();
    }
}


?>