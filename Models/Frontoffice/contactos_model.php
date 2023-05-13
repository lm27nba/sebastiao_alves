<?php

// Definir a página atual:
$pagina_atual = (empty($rotas[0]))? NULL : $rotas[0];

// Variaveis para esta página: 
$contactos = retornarCampoContactos();

// Carregamento dos "fragmentos" que constroem a página:
require 'Templates/Frontoffice/header_nav.php';
require 'Views/Frontoffice/contactos_view.php';
require 'Templates/Frontoffice/footer.php';

?>