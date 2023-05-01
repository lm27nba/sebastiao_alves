<?php

$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/frontoffice/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){

    case "backoffice": require_once 'Controllers/backoffice_controller.php'; break;    
    default: require_once 'Controllers/frontoffice_controller.php'; break;       
}

?>