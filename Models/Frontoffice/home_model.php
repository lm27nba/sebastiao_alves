<?php

// Definir a página atual:
$pagina_atual = (empty($rotas[0]))? NULL : $rotas[0];

// Variaveis para a página: 
$autor = descarregarPaginaHomeFront();
$destaques = livrosEmDestaque();
$livro;


// Carregamento das partes que compõe o Home:
require 'Templates/Frontoffice/header_nav.php';
require 'Views/Frontoffice/home_view.php';
require 'Templates/Frontoffice/footer.php';

?>