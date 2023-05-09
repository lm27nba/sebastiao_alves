<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Variaveis da página:
$form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]);

// Havendo dados do Formulário:
if($form){

    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];

    adicionarLivro($imagem, $titulo, $texto);
    header("Location: " . $url_backoffice. "livros");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Backoffice/header_nav.php';
require 'Views/Backoffice/Livros/adicionar_livros_view.php';
require 'Templates/Backoffice/footer.php';

?>