<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Variaveis da página:
$autor = descarregarPaginaAutor();
$form = isset($_POST["img_autor"]) && isset($_POST["texto_autor"]);

// Havendo dados do Formulário:
if($form){

    $img_autor = $_POST["img_autor"];
    $texto_autor = $_POST["texto_autor"];

    editarAutor($img_autor, $texto_autor);
    header("Location: " . $url_backoffice. "autor");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Autor/editar_autor_view.php';
require 'Templates/Backoffice/footer.php';

?>