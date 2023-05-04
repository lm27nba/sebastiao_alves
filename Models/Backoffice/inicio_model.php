<?php

semSession();

$user = $_SESSION["usuario"];
$pagina_atual = (empty($rotas[1]))? NULL : $rotas[1];
$nome = $user["nome"];
$id = $user["id"];


require_once 'Templates/Backoffice/header_nav.php';
require_once 'Views/Backoffice/inicio_view.php';

?>