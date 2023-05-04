<?php

semSession();

$user = $_SESSION["usuario"];
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$ecra = (empty($rotas[2]))? NULL : $rotas[2];
$accao = (empty($rotas[3]))? NULL : $rotas[3];

require_once 'Templates/Backoffice/header_nav.php';
require_once 'Views/Backoffice/carousel_view.php';

?>