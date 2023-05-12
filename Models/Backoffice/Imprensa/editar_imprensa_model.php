<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$id = (empty($rotas[3]))? NULL : intval($rotas[3]);

// Variaveis da página:
$imprensa = retonarPubicacaoEspecifica($id);
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["quando"]) && isset($_POST["posicao"]);

// Havendo dados do Formulário:
if($form){

    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $quando = $_POST["quando"];
    $posicao = $_POST["posicao"];

    editarPublicacao($id, $imagem, $titulo, $texto, $quando, $posicao);
    header("Location: " . $url_backoffice. "imprensa");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Imprensa/editar_imprensa_view.php';
require 'Templates/Backoffice/footer.php';

?>