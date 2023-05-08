<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Variaveis da página:
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["quando"]);

// Havendo dados do Formulário:
if($form){

    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $quando = $_POST["quando"];

    adicionarPublicacao($imagem, $titulo, $texto, $quando);
    header("Location: " . $url_backoffice. "imprensa");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require_once 'Templates/Backoffice/header_nav.php';
require_once 'Views/Backoffice/Imprensa/adicionar_imprensa_view.php';

?>