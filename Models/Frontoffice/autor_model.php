<?php

// Definir a página atual:
$pagina_atual = (empty($rotas[0]))? NULL : $rotas[0];

// Variaveis para a página: 
$autor = descarregarPaginaAutor();

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Frontoffice/header_nav.php';
require 'Views/Frontoffice/autor_view.php';
require 'Templates/Frontoffice/footer.php';

?>