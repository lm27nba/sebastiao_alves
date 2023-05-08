<?php

// Inicio de sessão: 
semSession();
$user = $_SESSION["usuario"];

// Rotas possiveis na página:
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];

// Carregamento dos "fragmentos" que constroem a página:
require_once 'Templates/Backoffice/header_nav.php';
require_once 'Views/Backoffice/Configuracoes/configuracoes_erro_view.php';

?>