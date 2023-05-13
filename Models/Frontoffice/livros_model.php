<?php

// Definir a página atual:
$pagina_atual = (empty($rotas[0]))? NULL : $rotas[0];
$id = (empty($rotas[1]))? NULL : $rotas[1];

// Variaveis para esta página:
$livro = retonarLivroEspecifico($id);

// No caso de não encontrar o livro:
if(!$livro){
    header("Location: " .$url_base. "404");
    exit();
}

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Frontoffice/header_nav.php';
require 'Views/Frontoffice/livros_view.php';
require 'Templates/Frontoffice/footer.php';

?>