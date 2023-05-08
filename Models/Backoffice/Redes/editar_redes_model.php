<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Variaveis:
$redes = retornarCampoRedes();
$form = isset($_POST["instagram"]) && isset($_POST["facebook"]) && isset($_POST["linkedin"]);

// Havendo dados introduzidos no formulário:
if($form){

    $instagram = $_POST["instagram"];
    $facebook = $_POST["facebook"];
    $linkedin = $_POST["linkedin"];

    editarCampoRedes($instagram, $facebook, $linkedin);
    header("Location: ". $url_backoffice . "redes");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require_once 'Templates/Backoffice/header.php';
require_once 'Views/Backoffice/Redes/editar_redes_view.php';

?>